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

         $data = $this->model(citas)->get($args[0]);
         $html .= $this->create("citas/update", $data[0]);

         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }
     public function put($arg = []){
       $this->model("citas")->update(
         $_POST["fecha"],
           $_POST["mensaje"],
           $_POST["id_registro"],
           $_POST["creacioncita"],
           $_POST["estado"],
           $_POST["id_propiedad"],
           $_POST["id_visitante"],
           $_POST["nombrevisita"],
          $_POST["id"]
        );
         header("location:/panel/citas");
    }
}

?>

