<html>
<body>

Hola <?php echo $_POST["nombre"]; ?>!<br>

Tu correo es <?php echo $_POST["correo"]; ?>.<br>

Has enviado el siguiente mensaje: <p><?php echo $_POST["mensaje"]; ?></p>

Tu respuesta a si deseas recibir respuesta: <?php echo $_POST["envioEmail"]; ?><br>

Tu rol en el sistema es: <?php echo $_POST["tipoUsuario"]; ?>

</body>
</html>