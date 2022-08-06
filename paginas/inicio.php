<?php
 class Inicio  extends Context {
     function __construct(){
         parent::__construct();
         $this->title = "Constructora en Guadalajara";
     }
     public function index(){
         $html  = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");

              $html  .= $this->create("_componentes/videoi");

            $html  .= $this->create("_pro/main1",[
              "title"=>"#SOMOS CLOVERAV ",
              "parrafo"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ",
              "url"=> "#",
              "text" => "Leer mas"
            ]);
            $html  .= $this->create("_componentes/aboutcons");
            $html  .= $this->create("_pro/main1",[
              "title"=>"MYEVENT de CLover AV ",
              "parrafo"=>"Es la  primer aplicacion capaz de decirte en un instante cómo puedes pasar de tener un simple lugar de trabajo a tener un espacio basado en la flexibilidad, innovación y atracción de talento ",
              "url"=> "#",
              "text" => "Leer mas"
            ]);

            $html  .= $this->create("_componentes/serviiclover");
            $html  .= $this->create("_componentes/comercialven");

            $html  .= $this->create("_pro/main1",[
              "title"=>"Habla con nosotros ",
              "parrafo"=>"Siempre tenemos a alguien para ayudarte en cualquier tipo de necesidad inmobiliaria. ",
              "url"=> "#",
              "text" => "Encuentra una persona u oficina"
            ]);
            $html  .= $this->create("_componentes/publiblog");

         // $html  .= $this->create("inicio", [
         //     "title" => "Inicio"
         // ]);
         // $html  .= $this->create("_pro/main1",[
         //   "title"=>"#SOMOS CLOVERAV ",
         //   "parrafo"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ",
         //   "url"=> "#",
         //   "text" => "Leer mas"
         // ]);

         // $html  .= $this->create("_componentes/infocloverav", [
         //     "ventainmo" => $this->create("_componentes/serviciosclover/ventasinmo")
         // ]);
         $html  .= $this->create("_componentes/constructrabajador");
         $data = $this->model("servicioscons")->gets();
        $html  .= $this->create("_componentes/serviciosclover", [
            "ventainmo" => $this->create("_componentes/serviciosclover/ventasinmo"),
             "serviciocateg" =>  $this->create("_componentes/profilecategoria", $data),
             "appmyevent" => $this->create("_componentes/serviciosclover/appmyevent")
        ]);
         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }
}

?>
