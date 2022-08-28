<?php
 class Asesoriainmo  extends Context {
     function __construct(){
       parent::__construct();
       $this->title = "Asesoria Inmobiliaria Ventas Guadalajara";
     }

     public function index(){
         $html = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/navaseinmo");
         //
         // $html  .= $this->create("_componentes/asesoriainmo",[
         //   "ventainmo" => $this->create("_componentes/serviciosclover/ventasinmo"),
         //   "searchVenta" => $this->create("_componentes/search")
         // ]);
         $html  .= $this->create("searchAinmo/banner");
         $html  .= $this->create("searchAinmo/formSearch");
         //
         // $html  .= $this->create("_componentes/propiedadesin",[
         //    "sincuent" => $this->create("log/in")
         // ]);
         $html  .= $this->create("_componentes/descuentosp");
         $html  .= $this->create("_componentes/inmobiliariasred");
         $html  .= $this->create("_componentes/promoimagenes");

         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }

     public function busqueda(){
       $arrInmueble = $this->model("propiedad")->getsFilter($_POST["localidad"]);
       $htmlInmueble = "";
       foreach ($arrInmueble as $key => $value) {
         $htmlInmueble .= $this->create("_componentes/propiedadesin",[
           "ubicacion" => $value->direccion
         ]);
       }
       $html .= $this->create("searchAinmo/formSearchBusqueda",[
         "resultado" => $htmlInmueble
       ]);

       $html  .= $this->create("_componentes/footer");
       return $this->ret($html);
     }

}

?>
