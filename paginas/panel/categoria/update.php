<?php
 class Update  extends Context {
     private $context;
     function __construct($context){
         $this->context = $context;
         $this->context->title = "Inicio";
     }
     public function index($args = []){
         $html  = ($this->context->sessionExist())
            ?$this->context->create("_componentes/navLog")
            :$this->context->create("_componentes/nav");

         $data = $this->context->model(categoria)->get($args[0]);
         $html .= $this->context->create("categoria/update", $data[0]);

         $html  .= $this->context->create("_componentes/footer");
         return $this->context->ret($html);
     }
     public function put($arg = []){
       $this->context->model("categoria")->update(
         $_POST["id_user"],
           $_POST["name"],
           $_POST["description"],
          $_POST["id"]
        );
         header("location:/panel/categoria");
    }
}

?>

