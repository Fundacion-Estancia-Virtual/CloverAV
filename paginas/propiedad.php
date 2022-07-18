<?php
 class Propiedad  extends Context {
     function __construct( ){
         parent::__construct();
         $this->title = "Inicio";
     }
     public function index($arg = []){
         $html  = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");

         if(count($arg)){
           $data = $this->model("propiedad")->get($arg[0])[0];
           $html .= $this->create("propiedad/show",$data);
         }else {
           $data = $this->model("propiedad")->gets();
           $html .= $this->create("propiedad/index", $data);
         }
         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }

}

?>
