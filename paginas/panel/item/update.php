<?php
 class Update  extends Context {
     function __construct( ){
         parent::__construct();
         $this->title = "Inicio";
     }
     public function index($args = []){
         $html  = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");

         $data = $this->model(item)->get($args[0]);
         $html .= $this->create("item/update",[
           "data" => $data[0],
           "categorias" => $this->model("categoria")->gets()
           ]
         );

         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }
     public function put($arg = []){
       $this->model("item")->update(
         $_POST["name"],
           $_POST["description"],
           $_POST["img"],
           $_POST["price"],
           // $_POST["id_user"],
           $this->sessionUser()->id,
           $_POST["id_categ"],
          $_POST["id"]
        );
         header("location:/panel/item");
    }
}

?>
