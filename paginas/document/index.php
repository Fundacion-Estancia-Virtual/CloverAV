<?php
 class Document  extends Context { 
     function __construct( ){
         parent::__construct();
         $this->title = "Document";
     }

     public function index(){
         $html  = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");

         $html  .= $this->create("document");
         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }

}

?>
