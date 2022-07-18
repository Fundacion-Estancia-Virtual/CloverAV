<?php
 class Aboutasesor  extends Context {
     function __construct(){
       parent::__construct();
       $this->title = "Registrate con noosotros";
     }

     public function index(){
         $html = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");
         $html  .= $this->create("_componentes/aboutasesor");
         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }

}

?>
