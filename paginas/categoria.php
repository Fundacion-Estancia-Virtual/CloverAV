<?php
 class Categoria  extends Context {
     private $context;
     function __construct($context){
         $this->context = $context;
         $this->context->title = "Inicio";
     }
     public function index($arg = []){
         $html  = ($this->context->sessionExist())
            ?$this->context->create("_componentes/navLog")
            :$this->context->create("_componentes/nav");

         if(count($arg)){
           $data = $this->context->model("categoria")->get($arg[0])[0];
           $html .= $this->context->create("categoria/show",$data);
         }else {
           $data = $this->context->model("categoria")->gets();
           $html .= $this->context->create("categoria/index", $data);
         }
         $html  .= $this->context->create("_componentes/footer");
         return $this->context->ret($html);
     }

}

?>
