<?php
 class Inicio  extends Context {
     function __construct(){
         parent::__construct();
         $this->title = "Inicio";
     }
     public function index(){
         $html  = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");

         $html  .= $this->create("inicio", [
             "title" => "Inicio"
         ]);

         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }
}

?>
