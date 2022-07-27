<?php
 class Contratistas  extends Context {
     function __construct( ){
         parent::__construct();
         $this->title = "Inicio";
     }
     public function index($arg = []){
         $html  = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");

         $servicio = $this->model("servicioscons")->get($arg[0])[0];
        $html .= "</br></br></br></br></br></br>";
         $data = $this->model("user")->getByServicio($arg[0]);

                  $html .= $this->create("_componentes/profilecons",$data);
         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }

}

?>
