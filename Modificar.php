<?php

    include_once 'conexion.php';
    $mysqli = new mysqli($hostdb,$usuariodb,$clavedb,$basededatos);
    if ($mysqli -> connect_errno) {
        die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno(). ") " . $mysqli -> mysqli_connect_error());			
    }
if(isset($_POST['btn-guardar']))
{
    $idViejo = $_POST['idViejo'];
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];
    
    $mysqli = new mysqli($hostdb,$usuariodb,$clavedb,$basededatos);
    $sql_query = "UPDATE comida SET id='$id', nombre='$nombre', 
    categoria='$categoria', precio='$precio' WHERE idViejo='$idViejo'";
    
    if($resultado=$mysqli->query($sql_query))
    {
        ?>
        <script type="text/javascript">
        alert('Datos Actualizados');
        window.location.href='VerTodo.php';
        </script>
        <?php
    }
}
?>