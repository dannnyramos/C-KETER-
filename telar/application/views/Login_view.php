<html>
<head>
    <title>Inicio de Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <?php echo form_open('login/do_login'); ?>
        <label for="username">Usuario:</label>
        <input type="text" name="username" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Iniciar Sesión">
    <?php echo form_close(); ?>

<a href="<?php echo base_url('usuario/cerrar_sesion'); ?>">Cerrar Sesión</a>

</body>
</html>


