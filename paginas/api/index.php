<?php
 class Api  extends Context {
     function __construct(){
         parent::__construct();
         $this->title = "About";
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

       return $this->ok($data,"Correctamente");
     }

}

?>
