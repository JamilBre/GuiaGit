<?php
require_once("../modelo/index.php");

class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }
    
    static function index(){
        $productos   = new Modelo();
        $dato        = $productos->mostrar("products","1");
        require_once("../vista/index.php");
    }
    
    static function nuevo(){
        require_once("../vista/nuevo.php");
    }
    
    static function guardar(){
        $nombre= $_REQUEST['nombre'];
        $precio= $_REQUEST['precio'];
        $data= "'".$nombre."','".$precio."'";
        $productos = new Modelo();
        $dato = $productos->insertar("products",$data);
        header("Location:".urlsite);
    }
    
    static function editar(){
        $id = $_REQUEST['id'];
        $productos = new Modelo();
        $dato = $productos->mostrar("products","id=".$id);
        require_once("../vista/editar.php");
    }
    
    static function actualizar(){
        $id = $_REQUEST['id'];
        $nombre= $_REQUEST['nombre'];
        $precio= $_REQUEST['precio'];
        $data= "nombre='".$nombre."',precio=".$precio;
        $condicion = "id=".$id;
        $productos = new Modelo();
        $dato = $productos->actualizar("products",$data,$condicion);
        header("Location:".urlsite);
    }
    
    static function eliminar(){
        $id = $_REQUEST['id'];
        $condicion = "id=".$id;
        $productos = new Modelo();
        $dato = $productos->eliminar("products",$condicion);
        header("Location:".urlsite);
    }
}
?>