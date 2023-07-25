<?php
class Modelo{
    static public function RutasModelo($rutas){
        if($rutas == 'ingreso'){
            $pagina = 'Vistas/modulos/'. $rutas .'.php';
        }else{
            $pagina = 'Vistas/modulos/ingreso.php';
        }
        return $pagina;
    }
}
?>