<?php
 class Examples2  extends Context {
     function __construct(){
         parent::__construct();
         $this->title = "About";
     }

     public function index(){
         $html  = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");
         $html  .= $this->create("_pro/main1",[
           "title"=>"#LOREM SET TITLE SET", 
           "parrafo"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ",
           "url"=> "#",
           "text" => "Leer mas"
         ]);
         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }

}

?>
