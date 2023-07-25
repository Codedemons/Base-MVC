<?php
class RutasControlador{
    public function Plantilla(){
        include 'Vistas/Plantilla.php';
    }
    public function Rutas(){
        if(isset($_GET['ruta'])){
            $rutas = $_GET['ruta'];
        }else{
            $rutas = 'index';        
        }
        $respuestas = Modelo::RutasModelo($rutas);
        include $respuestas;
    }
}

?>