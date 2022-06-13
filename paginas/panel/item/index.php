<?php
 class Item  extends Context {
     private $context;
     function __construct($context){
         $this->context = $context;
         $this->context->title = "Item";
     }
     public function index(){
         $html  = ($this->context->sessionExist())
            ?$this->context->create("_componentes/navLog")
            :$this->context->create("_componentes/nav");

         $data = $this->context->model("item")->gets();

         $html .= $this->context->create("item/read", $data);

         $html  .= $this->context->create("_componentes/footer");
         return $this->context->ret($html);
     }

     public function delete($args=[]){
       $id = $args[0];
       $this->context->model("item")->delete($id );
       header("location:/panel/item");
    }
}

?>
