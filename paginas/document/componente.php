<?php
 class Componente  extends Context {
     private $context;
     function __construct($context){
         $this->context = $context;
         $this->context->title = "file";
     }

     public function index(){
         $html  = ($this->context->sessionExist())
            ?$this->context->create("_componentes/navLog")
            :$this->context->create("_componentes/nav");

        // Permite usar funciones definidas en helper
        // helper.class.php
        $suma = $this->help("suma",[1, 1]);
        $html  .= $this->create("_cmp/componente",[
          "name" => "SOY UN COMPONENTE DE UN SOLO ARCHIVO y la suma 1 + 1 es $suma"
        ]);
        return $this->ret($html);
     }
}

?>
