<?php
 class User  extends Context {
     function __construct(){
       parent::__construct();
         $this->title = "Inicio";
         if(!$this->sessionExist()) header("location:/");
         if(!$this->sessionUserIs("ADMIN")) header("location:/admin");
     }
     public function index(){
         $usuarios = $this->model("user")->gets();

         $html  = $this->create("_componentes/navLog");
         $html  .= $this->create("_componentes/title",[
             "title" => "Usuarios"
         ]);
         $html  .=  $this->create("admin/tableUser", [
                        "usuarios" => $usuarios
         ]);
         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }

     function active($id){
          if($this->sessionUserIs("ADMIN")){
              $this->model("user")->active($id[0]);
          }

          header("location:/panel/user");
     }
}

?>
