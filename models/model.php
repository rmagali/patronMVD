<?php
    class EnlacesPaginas{

        public function enlacesPaginasModel($enlacesModel){ //ese parametro sera reemplazado por lo que yo le envie en la funcion de controller

            if ($enlacesModel=="inicio" || $enlacesModel=="nosotros" || $enlacesModel=="servicios" || $enlacesModel=="contactenos"){     //cuando todo esto coincida le voy a pedir que se genere una variable module

                $module = "views/modulos/".$enlacesModel.".php";//y se pone la ruta pero concatenado porque no se sabe cual va a ser el valor 
                                            // de esa variable por eso se concatena con .$enlacesModel.


                }

            return $module;

        }

    }
?>