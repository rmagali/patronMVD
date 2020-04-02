<?php

class MvcController{

    #LLAMADA A LA PLANTILLA
    #-------------------------------------------------------------------------------

    public function plantilla(){

        include "views/template.php";
  
    }

    #INTERACCION DEL USUARIO
    #-----------------------------------------------------------------------------
    public function enlacesPaginasController(){

        $enlacesController = $_GET["action"]; //aca se va a recibir lo que estamos recibiendo de la variable action

        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);    //para mandar esto al model es necesario crear esta variable
        #respuesta que me va a dar la conexion de la clases y funcion del model
        
        include $respuesta;
    }

}
?>      