<?php
    $Usuario = $_POST['Usuario'];
    $PalabraSecreta = $_POST['PalabraSecreta'];
    $NewPass = $_POST['NewPassword'];
    $NewPass2 = $_POST['NewPassword2'];
    //if(empty($Usuario)){
        //header("Location:Login.php");
        //exit();
    //}
    include_once 'Conexion.php';
    $mysqli = new mysqli($hostdb,$usuariodb,$clavedb,$basededatos);
    $sql_query = "SELECT * FROM Usuarios WHERE NombreUsuario = '".$Usuario."'";
    $resultado = $mysqli->query($sql_query);
    if($fetched_row = $resultado->fetch_array(MYSQLI_ASSOC)){
        if($fetched_row['PalabraSecreta'] == $PalabraSecreta){
            if($NewPass == $NewPass2){
                $sql_query = "UPDATE Usuarios SET Password = '$NewPass' WHERE NombreUsuario='$Usuario'";
                if($resultado = $mysqli->query($sql_query)){
                    ?>
                    <script type="text/javascript">
                        alert('Contraseña Actualizada');
                        window.location.href='Login.php';
                    </script>
                    <?php    
                }else{
                    ?>
                    <script type="text/javascript">
                        alert('Ha Ocurrio Un Error');
                        window.location.href='CambiarPassword.php';
                    </script>
                    <?php
                }
                //session_start();
                //$_SESSION['Usuario'] = $Usuario;
                //$_SESSION['PalabrsaSecreta'] = $PalabraSecreta;
                //$_SESSION['Password'] = $Password;
                //header("Location:Login.php");
            }else{
                ?>
                <script type="text/javascript">
                    alert('Las Contraseñas No Coinciden');
                    window.location.href='CambiarPassword.php';
                </script>
                <?php    
            }
        }else{
            ?>
            <script type="text/javascript">
                alert('Ha Ocurrido Un Error, Vuelva a Intentarlo');
            </script>
            <?php
            header("Location:CambiarPassword.php");
            exit();
            
        }
    }else{
        ?>
            <script type="text/javascript">
                alert('Ha Ocurrido Un Error, Vuelva a Intentarlo');
            </script>
        <?php
        header("Location:CambiarPassword.php");
        exit();
    }
?>