<?php
        function Conectarse()
            {
            if (!($link=mysql_connect("localhost","pennywiser","Verbatiimm")))
                {
                echo "Error conectando a la base de datos.";
                exit();
                }
            if (!mysql_select_db("ladespensa",$link))
                {
                echo "Error seleccionando la base de datos.";
                exit();
                }
            return $link;			
        }
    ?>