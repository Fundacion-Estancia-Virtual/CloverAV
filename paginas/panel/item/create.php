<?php
 class Create  extends Context {
     private $context;
     function __construct($context){
         $this->context = $context;
         $this->context->title = "Item";
     }
     public function index(){
         $html  = ($this->context->sessionExist())
            ?$this->context->create("_componentes/navLog")
            :$this->context->create("_componentes/nav");

         $html .= $this->context->create("item/create");

         $html  .= $this->context->create("_componentes/footer");
         return $this->context->ret($html);
     }

     public function add($value=""){
       $this->context->model("item")->create(
           $_POST["name"],
           $_POST["description"],
           $_POST["img"],
           $_POST["price"],
           $_POST["id_user"],
           $_POST["id_categ"]
        );
       header("location:/panel/item");
     }
}
?>