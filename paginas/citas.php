<?php
 class Citas  extends Context {
     function __construct( ){
         parent::__construct();
         $this->title = "Inicio";
     }
     public function index($arg = []){
         $html  = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");

         if(count($arg)){
           $data = $this->model("citas")->get($arg[0])[0];
           $html .= $this->create("citas/show",$data);
         }else {
           $data = $this->model("citas")->gets();
           $html .= $this->create("citas/index", $data);
         }
         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }

}

?>
