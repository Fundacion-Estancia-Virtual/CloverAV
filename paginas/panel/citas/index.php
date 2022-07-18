<?php
 class Citas  extends Context {
     function __construct( ){
         parent::__construct();
         $this->title = "Citas";
         if(!$this->sessionExist()) header("location:/");
         if(!$this->sessionUserIs("VENDEDOR")) header("location:/admin");
     }
     public function index(){
         $html  = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");

         $data = $this->model("citas")->gets();

         $html .= $this->create("citas/read", $data);

         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }

     public function delete($args=[]){
       $id = $args[0];
       $this->model("citas")->delete($id );
       header("location:/panel/citas");
    }
}

?>
