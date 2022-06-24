<?php
 class Error404  extends Context {
   function __construct(){
     parent::__construct();
     $this->title = "404";
   }

     public function index(){
         $html  = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");
         $html  .= $this->create("error404");
         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }

}

?>
