<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script>
            function ingresar() {
                location.href = "DAO/TiendaDAO.php?op=1";
            }
        </script>
                <frameset cols="15%,85%">      
        <frame src="vistas/MENU.php">  
            <frame src="vistas/Catalogo.php" name="ventanadinamica">
                <noframes>
                    <p>El navegador no soporta frames</p>
                </noframes>
                </frameset>
        
    </head>
        
    <body onload="ingresar()">

    </body>

                </html>
