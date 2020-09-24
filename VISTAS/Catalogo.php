<!DOCTYPE html>
        <?php
session_start();
$lista=$_SESSION['lista'];
echo sizeof($lista);
        ?>
<style type="text/css">
                body {
                    padding: 0;
                    margin:0;
                    font-family: Arial, "Times New Roman", Times, serif;
                    color: black;
                    background-color: white;
                    background-position:center;
                }

                .contenedor {
                    background: rgba(210, 217, 218, 0.377);
                    border: 1px solid;
                    margin: auto;
                    width: 75%;
                    display:flex;
                    justify-content: center;
                }
                .contenedor2 {
                    background: white;
                    border: 2px solid;
                    border-color: darkblue;
                    color: darkblue;
                    margin: auto;
                    width: 30%;
                    display:flex;
                    justify-content: center;
                }
                .imagensuper{
                    background: rgba(9, 133, 150, 0.377);
                    border: 1px solid;
                    border-color: darkblue;
                    color: darkblue;
                    margin:auto;
                    
                }

                ul.navbar {
                    list-style-type:none;
                    padding:0;
                    margin:0;
                    position:absolute;
                    top:5em;
                    left:1em;
                    width:9em;
                    cursor: pointer;
                }
                h1 {
                    font-family: Helvetica, Geneva, Arial, SunSands-Regular, sans-sefir;
                }
                h2{
                    font-family: Helvetica, Geneva, Arial, SunSands-Regular, sans-sefir;
                    color: darkblue;
                }
                h3 {
                    font-family: Helvetica, Geneva, Arial, SunSands-Regular, sans-sefir;
                    color: darkblue;
                }
                ul.navbar li {
                    background:lightblue;
                    margin: 0.5em 0;
                    padding: 0.3em;
                    border:0.2em solid blue;
                }
                ul.navbar a {
                    text-emphasis: NaNem;}
                a:link {
                    color:rgba(3, 3, 58, 0.699) }
                a:visited {
                    color:rgba(16, 8, 124, 0.096)}
                address {
                    margin-top: 1em;
                    padding-top: 1em;
                    border-top: thin dotted
                }
                .box1 {
                    border: 0.5px solid darkblue;
                    height: 150px;
                    width: 150px;
                    margin: 0;
                    padding: 15px 20px;
                    position: left;
                    background-color: white;
                }
                .box2 {
                    border: 0.5px solid darkblue;
                    height: 150px;
                    width: 150px;
                    margin: 0;
                    padding: 15px 20px;
                    position: center;
                    background-color: white;
                }
                .box3 {
                    border: 0.5px solid darkblue;
                    height: 150px;
                    width: 150px;
                    margin: 0;
                    padding: 15px 20px;
                    position: right;
                    background-color: white;
                }

                #columna1 {
                    width:150px;
                    margin-top:10px;
                    margin-bottom: 50px;
                    margin-right: 50px;
                    margin-left: 50px;
                }
                #columna2 { 
                    width:150px;
                    margin-top:10px;
                    margin-bottom: 50px;
                    margin-right: 50px;
                    margin-left: 50px;

                }
                #columna3 { 
                    width:150px;
                    margin-top:10px;
                    margin-bottom: 50px;
                    margin-right: 50px;
                    margin-left: 50px;

                }
            </style>

<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title></title>
    </head>
    <center><img src="https://imgur.com/kpEMiLH.jpg" alt="escudo"></center><BR>


    <body>
        <div class="contenedor2"><center><h2><em>NUESTRO CATALOGO</h2></em></center></div><br>


<body>    
      <div class="container">
        <table class="table table-dark"
               border="0"
               width="700"
               align="center">
                   <?php
                   $num = 0;
                   foreach ($lista as $reg) {
                       if ($num == 4) {
                           echo "<tr>";
                           $num = 1;
                       } else {
                           $num++;
                       }
                       ?>
                <th><img src="../Imagenes/<?php echo $reg[6]; ?>" width="120" height="120"
                         <br>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" onclick="enviar(<?php echo $reg[0]; ?>)">Agregar</button>
                </th>          

                <?php
                   }  
            ?>
                
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Caracteristicas del producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="mostrar">
                    ...
                </div>
            </div>
        </div>
    </div>
    <script>

        var resultado = document.getElementById("mostrar");

        function enviar(c) {

            var xmlhttp;
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }

            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    resultado.innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "Detalle.php?cod=" + c, true);
            xmlhttp.send();
        }
    </script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <address>
        WHOLE FOOD<br>
        Kilometro 15 via Bogota-Chia<br>
        Telefonos: 234 5645 - 134 4545 - 3207234569
    </address>

</body>
</html>
