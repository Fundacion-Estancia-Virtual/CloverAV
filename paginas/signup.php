<?php
 class Signup  extends Context {
     private $context;
     function __construct($context){
         $this->context = $context;
         $this->context->title = "Registrarse";
         if($context->sessionExist()) header("location:/admin");
     }

     public function index(){
         $html  = $this->context->create("_componentes/nav");
         $html  .= $this->context->create("log/up");
         $html  .= $this->context->create("_componentes/footer");
         return $this->context->ret($html);
     }

     public function registrarse($arg = null){
          $msj = "";
          if($this->context->model("user")->exist($_POST["email"]))
          $msj = "El usuario con el email ya existe";
          else{
            $this->context->model("user")->create($_POST["name"],password_hash( $_POST["pass1"], PASSWORD_DEFAULT), $_POST["email"]);
            $this->context->sessionStart($_POST["email"]);
            return $this->context->ok($_POST["email"],"Correctamente");
          }
          return $this->context->error(200,$msj);
     }

}

?>
