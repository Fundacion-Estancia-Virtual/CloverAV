<?php
 class Categoria  extends Context {
     private $context;
     function __construct($context){
         $this->context = $context;
         $this->context->title = "Categoria";
     }
     public function index(){
         $html  = ($this->context->sessionExist())
            ?$this->context->create("_componentes/navLog")
            :$this->context->create("_componentes/nav");

         $data = $this->context->model("categoria")->gets();

         $html .= $this->context->create("categoria/read", $data);

         $html  .= $this->context->create("_componentes/footer");
         return $this->context->ret($html);
     }

     public function delete($args=[]){
       $id = $args[0];
       $this->context->model("categoria")->delete($id );
       header("location:/panel/categoria");
    }
}

?>
