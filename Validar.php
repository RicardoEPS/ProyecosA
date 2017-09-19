<?php
    $Usuario = $_POST['Nombre'];
    $Pass = $_POST['Password'];
    if(empty($Usuario) || empty($Pass)){
        header("Location:Login.php");
        exit();
    }
    include_once 'Conexion.php';
    $mysqli = new mysqli($hostdb,$usuariodb,$clavedb,$basededatos);
    $sql_query = "SELECT * FROM Usuarios WHERE NombreUsuario = '".$Usuario."'";
    $resultado = $mysqli->query($sql_query);
    if($fetched_row = $resultado->fetch_array(MYSQLI_ASSOC)){
        if($fetched_row['Password'] == $Pass){
            session_start();
            $_SESSION['Usuario'] = $Usuario;
            $_SESSION['Tipo'] = $ferched_row['Tipo'];
            header("Location:Index.php");
        }else{
            ?>
            <script type="text/javascript">
                alert('Ha Ocurrido Un Error, Vuelva a Intentarlo');
            </script>
            <?php
            header("Location:Login.php");
            exit();
            
        }
    }else{
        ?>
            <script type="text/javascript">
                alert('Ha Ocurrido Un Error, Vuelva a Intentarlo');
            </script>
            <?php
        header("Location:Login.php");
        exit();
    }
?>