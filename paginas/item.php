<?php
 class Item  extends Context {
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
           $data = $this->context->model("item")->get($arg[0])[0];
           $html .= $this->context->create("item/show",$data);
         }else {
           $data = $this->context->model("item")->gets();
           $html .= $this->context->create("item/index", $data);
         }
         $html  .= $this->context->create("_componentes/footer");
         return $this->context->ret($html);
     }

}

?>
