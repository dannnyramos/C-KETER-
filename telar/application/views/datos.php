 
<!DOCTYPE html>
<html>
<head>
    <title>Información del Alumno</title>
</head>
<body>
  
 

    <h1>Alumnos </h1>
    <p>Id Alumno: <?php echo $alumno[0]->id_alumno;?></p>
    <?php if($alumno[0]->Foto): ?>
        <img src="<?=base_url('/uploader/image/').$alumno[0]->Foto?>" width="400px">
    <?php else: ?>
        <img src="<?=base_url('/uploader/image/reemplazo.jpg')?>" width="400px">
    <?php endif; ?>

    <p>Nombre: <?php echo $alumno[0]->nombre;?></p>
    <p>A Paterno: <?php echo $alumno[0]->ap_paterno;?></p>
    <p>A Materno: <?php echo $alumno[0]->ap_materno;?></p>
     <?php if($alumno[0]->Foto): ?>
        <i class="fa-solid fa-circle-xmark"></i>
    <?php else: ?>
        <i class="fa-regular fa-circle-xmark"></i>
    <?php endif; ?>
    <p>Id grupo: <?php echo $alumno[0]->id_grupo;?></p>
    <i class="fa-solid fa-circle-xmark"></i> 
    <p>Carrera: <?php echo $alumno[0]->carrera; ?></p>
    
    <h2>Materias</h2>
    <ul>
     <?php foreach ($materias as $materia): ?>  
    <p>Materia: <?php echo $materia['materia'];?></p>
        <?php endforeach; ?>
    </ul>
    

    
</body>
</html>