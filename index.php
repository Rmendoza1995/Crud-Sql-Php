<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro</title>
</head>
<body>
    <h1>Formulario de Registro</h1>
    <form action="create.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label for="correo">Correo:</label>
        <input type="email" name="correo" required><br><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" required><br><br>


        
        <input type="submit" value="Registrar">
    </form>
</body>
</html>

