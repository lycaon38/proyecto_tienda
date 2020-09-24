<!DOCTYPE html>
<?php
include '../DAO/MetodosDAO.php';

$cod = $_REQUEST['cod'];

$objMetodo = new MetodosDAO();
$lista = $objMetodo->ListarProductosCod($cod);

foreach ($lista as $row) {

    $nombre = $row[1];
    $precio = $row[2];
    $detalle = $row[5];
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form>
            <table
                border="0">
                <tr>
                    <th rowspan="4"><img src="../Imagenes/<?php echo $nombre; ?>.webp"
                                         width="200" height="170"></th>
                    <th><?php echo $nombre; ?></th>
                </tr>
                <tr>
                    <td align="justify"><?php echo $detalle; ?></td>
                </tr>
                <tr>
                    <th align="right">$/. <?php echo $precio; ?></td>
                </tr>
                <tr>
                    <td align="right">Ingrese cantidad: <input type="number" min="1" max="100" value="1" name="txtCan"></td>
                </tr>
                <tr>
                    <th align="rigth">
                        <button type="button" class="btn btn-info">Cerrar</button>
                        <button type="button" class="btn btn-info">Agregar al carrito</button>                                    
                    </th>
                </tr>
            </table>
        </form>
    </body>
</html>
