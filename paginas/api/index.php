<?php
 class Api  extends Context {
     private $context;
     function __construct($context){
         $this->context = $context;
         $this->context->title = "About";
     }

     public function index(){
       $data = [
         "Saludo" => "Hola",
         "version"=> "2.4",
         "items" => [
           "Loresm",
           "Loresm2",
           "Loresm3",
           "Loresm4"
         ]
       ];

       return $this->context->ok($data,"Correctamente");
     }

}

?>
