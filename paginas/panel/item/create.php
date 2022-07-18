<?php
 class Create  extends Context {
     function __construct( ){
         parent::__construct();
         $this->title = "Item";
     }
     public function index(){
         $html  = ($this->sessionExist())
            ?$this->create("_componentes/navLog")
            :$this->create("_componentes/nav");

         $html .= $this->create("item/create",[
           "categorias" => $this->model("categoria")->gets()
         ]);
         

         $html  .= $this->create("_componentes/footer");
         return $this->ret($html);
     }

     public function add($value=""){
       $this->model("item")->create(
           $_POST["name"],
           $_POST["description"],
           $_POST["img"],
           $_POST["price"],
           // $_POST["id_user"],
           $this->sessionUser()->id,
           $_POST["id_categ"]
        );
       header("location:/panel/item");
     }
}
?>
