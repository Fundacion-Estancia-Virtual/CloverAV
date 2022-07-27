<?php
 class Servicioscons  extends Context {
     function __construct( ){
         parent::__construct();
         $this->title = "Inicio";
     }
     public function index($arg = []){
         $html  = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");

         if(count($arg)){
           $data = $this->model("servicioscons")->get($arg[0])[0];
           $html .= $this->create("servicioscons/show",$data);
         }else {
           $data = $this->model("servicioscons")->gets();
           $html .= $this->create("_componentes/profilecategoria", $data);
         }
         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }

}

?>
