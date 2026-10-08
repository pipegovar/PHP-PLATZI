<?php 
$course = [
    'title' => 'Curso profesional de PHP y Laravel',
    'subtitle' => 'Aprende PHP y Laravel desde cero',
    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eos omnis dolorem, magnam reiciendis voluptates necessitatibus fuga tempora possimus ea laudantium vitae quibusdam similique minus dolore sunt veritatis enim eligendi.',
    'tags' => [
         "PHP",     
        "Laravel",  
        "Javasript",
        "HTML",      
        "CSS",       
        "MySQL",     
        "NodeJS",    
    ],
];

$lecciones = [
    'Introducción a PHP',
    'Variables en PHP',
    'Condicionales en PHP',
    'Arrays',
    "Arrays asociativos",
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course['title'] ?></title>
</head>
<body>
    <h1>Bienvenido al <?= $course['title'] ?></h1>

    <h2><?= $course['subtitle'] ?></h2>
    
    <p><?= $course['description'] ?></p>

    
    <p>
        <strong>Etiquetas</strong>
            <ul>
                <?php foreach ($course['tags'] as $tag): ?>
                    <li><?= $tag ?></li>
                <?php endforeach; ?> 
            </ul>
    </p>   
    
    <p>
        <strong>Lecciones</strong>
            <ul>
                <?php foreach ($lecciones as $leccion): ?>
                    <li><?= $leccion?></li>
                <?php endforeach; ?> 
            </ul>
    </p> 
          
</body>
</html>