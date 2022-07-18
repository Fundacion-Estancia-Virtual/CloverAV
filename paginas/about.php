<?php
 class About  extends Context {
     function __construct(){
       parent::__construct();
       $this->title = "About";
     }

     public function index(){
         $html = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");
         $html  .= $this->create("about"); 
         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }

}

?>
