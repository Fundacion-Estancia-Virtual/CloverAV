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
         $html  .= $this->create("_componentes/serviciosclover", [
             "ventainmo" => $this->create("_componentes/serviciosclover/ventasinmo"),
              "serviciocateg" => $this->create("_componentes/serviciosclover/construccel"),
              "appmyevent" => $this->create("_componentes/serviciosclover/appmyevent")
         ]);
         $html  .= $this->create("_componentes/infocloverav", [
             "ventainmo" => $this->create("_componentes/serviciosclover/ventasinmo")
         ]);
         $html  .= $this->create("_componentes/constructrabajador", [

         ]);
         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }
}

?>
