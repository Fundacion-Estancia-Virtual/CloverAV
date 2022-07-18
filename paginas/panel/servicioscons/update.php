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

         $data = $this->model(servicioscons)->get($args[0]);
         $html .= $this->create("servicioscons/update", $data[0]);

         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }
     public function put($arg = []){
       $this->model("servicioscons")->update(
         $_POST["nombreserv"],
           $_POST["foto"],
           $_POST["descripcion"],
          $_POST["id"]
        );
         header("location:/panel/servicioscons");
    }
}

?>

