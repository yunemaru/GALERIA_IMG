<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuario</title>
</head>
<body>
    <h1>Registro de usuario</h1>
    <form action="registrar_usuarios.php" method = "post" >
        <label for="user">Nombre de usuario: </label>
        <br>
        <br>
        <input type="text" name = "user" id = "user" >
        <br>
        <br>
        <label for="email">Email: </label>
        <br>
        <br>
        <label for="pass">Contraseña: </label>
        <br>
        <br>
        <input type="text" name= "pass" id = "pass">
        <br>
        <br>
        <input type="submit" value = "Registra" >

    </form>
</body>
</html>