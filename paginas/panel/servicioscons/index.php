<?php
 class Servicioscons  extends Context {
     function __construct( ){
         parent::__construct();
         $this->title = "Servicioscons";
         if(!$this->sessionExist()) header("location:/");
         if(!$this->sessionUserIs("RH")) header("location:/admin");
     }
     public function index(){
         $html  = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");

         $data = $this->model("servicioscons")->gets();

         $html .= $this->create("servicioscons/read", $data);

         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }

     public function delete($args=[]){
       $id = $args[0];
       $this->model("servicioscons")->delete($id );
       header("location:/panel/servicioscons");
    }
}

?>
