<?php
 class Annuncio  extends Context {
     function __construct(){
       parent::__construct();
       $this->title = "Informacion Detallada";
     }

     public function index(){
         $html = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");
         $html  .= $this->create("anuncio");
         $html  .= $this->create("informaads");
         $html  .= $this->create("_componentes/formulario"); 
         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }

}

?>
