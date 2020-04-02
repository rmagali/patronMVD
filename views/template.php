<!DOCTYPE html>
<html lang= "en">
<head>
    <meta charset=UTF-8">
    <title>TEMPLATE</title>

    <style>
        header{
            position:relative;
            margin:auto;
            text-align:center;
            padding:5px;
        }
        nav {
            position:relative;
            margin:auto;
            width:100%;
            heigth:auto;
            background:black;
        }
        nav ul{
            position:relative;
            margin:auto;
            width:50%;
            text-align:center;
        }
        nav ul li{
            display:inline-block;
            width:24%;
            line-height:50px;
            list-style:none;

        nav ul li a{
            color: white;
            text-decoration: none;
        }

        section{
            position:relative;
            padding:20px;
        }
   </style>
</head>

<body>

    <header>

        <h1>APRENDIENDO PHP</h1>

    </header>

    <?php
        include "modulos/navegacion.php"
    ?>

    <section>
        
    <?php

        $mvc = new MvcController();  // esto sirve para que muestre el echo que esta en controller
        $mvc -> enlacesPaginasController(); //esta pidiendo que muestre esa funcion y esa funcion me arroja el echo
    ?>

    </section>


</body>
</html>