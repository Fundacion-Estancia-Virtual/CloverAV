<?php
 class Item  extends Context { 
     function __construct( ){
         parent::__construct();
         $this->title = "Inicio";
     }
     public function index($arg = []){
         $html  = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");

         if(count($arg)){
           $data = $this->model("item")->get($arg[0])[0];
           $html .= $this->create("item/show",$data);
         }else {
           $data = $this->model("item")->gets();
           $html .= $this->create("item/index", $data);
         }
         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }

}

?>
