<?php
 class Categoria  extends Context { 
     function __construct( ){
         parent::__construct();
         $this->title = "Inicio";
     }
     public function index($arg = []){
         $html  = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");

         if(count($arg)){
           $data = $this->model("categoria")->get($arg[0])[0];
           $html .= $this->create("categoria/show",$data);
         }else {
           $data = $this->model("categoria")->gets();
           $html .= $this->create("categoria/index", $data);
         }
         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }

}

?>
