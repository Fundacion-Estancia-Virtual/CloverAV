<?php
 class Create  extends Context {
     function __construct( ){
         parent::__construct();
         $this->title = "Citas";
     }
     public function index(){
         $html  = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");

         $html .= $this->create("citas/create");

         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }

     public function add($value=""){
       $this->model("citas")->create(
           $_POST["fecha"],
           $_POST["mensaje"],
           $_POST["id_registro"],
           $_POST["creacioncita"],
           $_POST["estado"],
           $_POST["id_propiedad"],
           $_POST["id_visitante"],
           $_POST["nombrevisita"]
        );
       header("location:/panel/citas");
     }
}
?>