<?php
 class Propiedad  extends Context {
     function __construct( ){
         parent::__construct();
         $this->title = "Propiedad";
         if(!$this->sessionExist()) header("location:/");
         if(!$this->sessionUserIs("PROPIETARIO") && !$this->sessionUserIs("VENDEDOR")) header("location:/admin");

     }
     public function index(){
         $html  = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");

         $data = $this->model("propiedad")->gets();

         $html .= $this->create("propiedad/read", $data);

         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }

     public function delete($args=[]){
       $id = $args[0];
       $this->model("propiedad")->delete($id );
       header("location:/panel/propiedad");
    }
}

?>
