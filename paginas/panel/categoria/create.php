<?php
 class Create  extends Context {
     private $context;
     function __construct($context){
         $this->context = $context;
         $this->context->title = "Categoria";
     }
     public function index(){
         $html  = ($this->context->sessionExist())
            ?$this->context->create("_componentes/navLog")
            :$this->context->create("_componentes/nav");

         $html .= $this->context->create("categoria/create");

         $html  .= $this->context->create("_componentes/footer");
         return $this->context->ret($html);
     }

     public function add($value=""){
       $this->context->model("categoria")->create(
           $_POST["id_user"],
           $_POST["name"],
           $_POST["description"]
        );
       header("location:/panel/categoria");
     }
}
?>