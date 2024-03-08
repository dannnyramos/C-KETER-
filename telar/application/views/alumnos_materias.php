<!DOCTYPE html>
<html>
<head>
    <title>Información del Alumno</title>
</head>
<body>
    
    <h2>Materias</h2>
    <ul>
        <?php foreach ($materias as $materia): ?>
            <?php print_R($materias); ?>
            <li>Materia: <?php echo $materias[0]->materia; ?></li>
            <li>Horario: <?php echo $materias[0]->horario; ?></li>
            <li>Descripción: <?php echo $materias[0]->descripcion; ?></li>
        <?php endforeach; ?>
    </ul>


    <h3>Materias registradas</h3>
        <?php print_R($alumno); ?>
            <li>Materias por cursar: <?php echo $alumno[0]->materias; ?></li> 
</body>
</html>
