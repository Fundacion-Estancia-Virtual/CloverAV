<?php
 class Propietario  extends Context {
     function __construct(){
       parent::__construct();
       $this->title = "Informacion de la Aplicacion MYEVENT";
     }

     public function index(){
         $html = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");
         $html  .= $this->create("_componentes/infomyevent",[
           "ventainmo" => $this->create("_componentes/serviciosclover/ventasinmo")
         ]);
         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }

}

?>
