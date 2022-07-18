<?php
 class Create  extends Context {
     function __construct( ){
         parent::__construct();
         $this->title = "Servicioscons";
     }
     public function index(){
         $html  = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");

         $html .= $this->create("servicioscons/create");

         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }

     public function add($value=""){
       $this->model("servicioscons")->create(
           $_POST["nombreserv"],
           $_POST["foto"],
           $_POST["descripcion"]
        );
       header("location:/panel/servicioscons");
     }
}
?>