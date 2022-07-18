<?php
 class Update  extends Context {
     function __construct( ){
         parent::__construct();
         $this->title = "Inicio";
     }
     public function index($args = []){
         $html  = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");

         $data = $this->model(propiedad)->get($args[0]);
         $html .= $this->create("propiedad/update", $data[0]);

         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }
     public function put($arg = []){
       $this->model("propiedad")->update(
         $_POST["direccion"],
           $_POST["imagenes"],
           $_POST["id_usuario"],
           $_POST["categoria"],
           $_POST["descripcion"],
          $_POST["id"]
        );
         header("location:/panel/propiedad");
    }
}

?>

