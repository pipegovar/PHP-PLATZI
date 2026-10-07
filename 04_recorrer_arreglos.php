<?php 
$course = "Curso profesional de PHP";
$price = "3000 dolares";
$date = "27 de marzo del 2026";

$tags = [
    "PHP",       // 0
    "Laravel",   // 1 
    "Javasript", // 2
    "HTML",      // 3
    "CSS",       // 4
    "MySQL",     // 5
    "NodeJS",    // 6 
        
];

$cursos = [
    "Curso de Pensamiento Lógico",
    "Curso de Laravel",
    "Curso de Bases de Datos",
    "Curso de HTML",

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course ?></title>
</head>
<body>
    <h1>Bienvenido al <?= $course ?></h1>
    
    <p>El <?= $course ?> cuesta <?= $price ?> y fue publicado el <?= $date ?></p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eos omnis dolorem, magnam reiciendis voluptates necessitatibus fuga tempora possimus ea laudantium vitae quibusdam similique minus dolore sunt veritatis enim eligendi.</p>

    <!-- // Primera forma
    <?php 
    // Condicionales
    if ($archived) {
        echo "<p> El curso está archivado</p>" ;
    } else {
        echo "<p> El curso está activo</p>" ;
    }
    ?> -->

    <!-- // Segunda forma
    <?php if ($archived): ?>
        <p>Este curso está archivado</p>
    <?php else: ?>
        <p>Este curso está activo</p>
    <?php endif;?> -->
    
    <p>
        <strong>Etiquetas</strong>
            <ul>
                <?php foreach ($tags as $tag): ?>
                    <li><?= $tag ?></li>
                <?php endforeach; ?> 
            </ul>
          
        <strong>Curso relacionados</strong>
            <ul>
                <?php foreach ($cursos as $curso):  ?>
                    <li><?= $curso ?></li>
                <?php endforeach; ?>    
            </ul>
    </p>

     <!-- // Ejercicio 
    <?php 
    if ($nivelcurso == "Básico") {
        echo "<p> Curso básico: recomendado para quienes recién comienzan en programación</p>" ;
    } elseif ($nivelcurso == "Intermedio") {
        echo "<p> Curso intermedio: recomendado para estudiantes que tienen conocimientos básicos de programación</p>" ;
    } elseif ($nivelcurso == "Avanzado") {
        echo "<p> Curso avanzado: ideal para estudiantes con conocimientos sólidos de programación</p>" ;
    } else {
        echo "<p> Nivel del curso incorrecto </p>";
    }
    ?> -->

</body>
</html>