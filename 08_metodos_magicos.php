<?php 

require 'Course.php';
require 'Author.php';


$course = new Course(
   title: 'Curso profesional de PHP y Laravel',
   subtitle: 'Aprende PHP y Laravel desde cero',
   description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eos omnis dolorem, magnam reiciendis voluptates necessitatibus fuga tempora possimus ea laudantium vitae quibusdam similique minus dolore sunt veritatis enim eligendi.', 
   tags: ['PHP', 'Laravel', 'Javascript']
);

$author = new Author (
    name: 'Luis Felipe Gómez Vargas',
    email: 'luisfelipe_1002@hotmail.com',
    github: 'github.com/pipegovar',
    proyects: ['Tienda Latam', 'Ecomerce de ropa', 'To do list en Angular']
);

$course->addTag('Frameworks');
$course->addTag('Desarrollo de Software');
$course->addTag('PHP');
$course->addTag('');
$course->addTag('HTML');

// Desafio
$course->setDescription('Aprende a desarrollar aplicaciones web dinámicas con PHP. Desde la instalación del entorno hasta la creación de formularios y gestión de sesiones, construirás una app de registro y login aplicando buenas prácticas. Dominarás la sintaxis básica, el uso de variables, arreglos, funciones y la integración con HTML. Este curso te prepara para avanzar hacia la programación orientada a objetos, bases de datos y APIs.'); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course->title ?></title>
</head>
<body>
    <?= $course ?>

    <?= $author ?>     
</body>
</html>