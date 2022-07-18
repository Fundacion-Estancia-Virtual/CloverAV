<?php
 class My  extends Context {
     function __construct( ){
         parent::__construct();
         $this->title = "Inicio";
         if(!$this->sessionExist()) header("location:/");
     }
     public function index(){
         $us   = $this->sessionUser();
         $html  = $this->create("_componentes/navLog");
         $html  .= $this->create("_componentes/title",[
             "title" => "Mis datos"
         ]);
         $html  .=  $this->create("admin/userdata", [
                 "name" =>$us->name,
                 "email" => $us->email,
                 "phone" => $us->phone
         ]);
         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }


     public function update( ){
         $usuario   = $this->sessionUser();
         $this->model("user")->update($_POST["tel"], $_POST["name"],$usuario->id);
         header("location:/panel/my");
     }
}

?>
