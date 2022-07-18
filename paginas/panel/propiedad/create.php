<?php
 class Create  extends Context {
     function __construct( ){
         parent::__construct();
         $this->title = "Propiedad";
     }
     public function index(){
         $html  = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");
          $users = $this->model("user")->gets();

          $duenios = [];

          if($this->sessionUserIs("VENDEDOR")){
            foreach ($users as $key => $value) {
              $roles = explode(" ", $value->rol);

              if(in_array("ROL_PROPIETARIO", $roles)) {
                $duenios[] =[
                  "id"=> $value->id,
                  "nombre"=> $value->name
                ];
              }

            }
          }
          else {
            $duenios[] = [
              "id"=> $this->sessionUser()->id,
              "nombre"=> $this->sessionUser()->name
            ];
          }
         $html .= $this->create("propiedad/create",[
           "usuarios" => $duenios
         ]);

         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }

     public function add($value=""){
       $this->model("propiedad")->create(
           $_POST["direccion"],
           $_POST["imagenes"],
           ($this->sessionUserIs("VENDEDOR"))?$_POST["propietario"]:$this->sessionUser()->id,
           $_POST["categoria"],
           $_POST["descripcion"]
        );
       header("location:/panel/propiedad");
     }
}
?>
