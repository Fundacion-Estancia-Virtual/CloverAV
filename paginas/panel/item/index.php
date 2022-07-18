<?php
 class Item  extends Context { 
     function __construct( ){
         parent::__construct();
         $this->title = "Item";
     }
     public function index(){
         $html  = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");

         $data = $this->model("item")->gets();

         $html .= $this->create("item/read", $data);

         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }

     public function delete($args=[]){
       $id = $args[0];
       $this->model("item")->delete($id );
       header("location:/panel/item");
    }
}

?>
