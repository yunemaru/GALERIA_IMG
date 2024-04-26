<?php
session_start();
if (empty($_SESSION["usuario"])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio d sesion</title>
</head>
<body>
<h1>inicia sesion</h1>
    <form action="validar_login.php" method="post">
        <label for="user">Nombre de usuario</label>
        <br>
        <br>
        <input type="text" name="user" id="user">
        <br>
        <br>
        <label for="pass">contrasena</label>
        <br>
        <br>
        <input type="text" name="pass" id="pass">
        <br>
        <br>
        <input type="submit" value="iniciar sesion">
    </form>

</body>
</html>
<?php
}else{
    header("Location: index.php");
}
?>