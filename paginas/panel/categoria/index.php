<?php
 class Categoria  extends Context { 
     function __construct( ){
         parent::__construct();
         $this->title = "Categoria";
     }
     public function index(){
         $html  = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");

         $data = $this->model("categoria")->gets();

         $html .= $this->create("categoria/read", $data);

         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }

     public function delete($args=[]){
       $id = $args[0];
       $this->model("categoria")->delete($id );
       header("location:/panel/categoria");
    }
}

?>
