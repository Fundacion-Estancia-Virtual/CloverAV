<?php
 class Ls  extends Context {
     private $context;
     function __construct($context){
         $this->context = $context;
         $this->context->title = "file";
     }

     public function index(){
         $html  = ($this->context->sessionExist())
            ?$this->context->create("_componentes/navLog")
            :$this->context->create("_componentes/nav");

         // hace uso de la libreria core/lib/file
         // para listar los archivos en el directorio    
         $html  .= $this->lib("files")->ls("@recursos/icons");
         $html  .= $this->context->create("_componentes/footer");
         return $this->ret($html);
     }

}

?>
