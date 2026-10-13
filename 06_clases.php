<?php 
class Course 
{
//    // Primera forma 
//     public $title;
//     public $subtitle;
//     public $description;
//     public $tags;

//     public function __construct($title, $subtitle, $description, $tags)
//     {
//         $this->title = $title;
//         $this->subtitle = $subtitle;
//         $this->description = $description;
//         $this->tags = $tags;
//     }


  // Segunda forma

  public function __construct(
    public string $title,
    public string $subtitle,
    public string $description,
    public array $tags,
  ) {
    
  }
};

$course = new Course(
   title: 'Curso profesional de PHP y Laravel',
   subtitle: 'Aprende PHP y Laravel desde cero',
   description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eos omnis dolorem, magnam reiciendis voluptates necessitatibus fuga tempora possimus ea laudantium vitae quibusdam similique minus dolore sunt veritatis enim eligendi.', 
   tags: ['PHP', 'Laravel', 'Javascript', 'HTML', 'CSS', 'MySQL', 'NodeJS']
);


class Author
 {

    public function __construct(
        public string $name,
        public string $email,
        public string $github,
        public array $proyects,
    )
    {
        
    }


};

$autor = new Author (
    name: 'Luis Felipe Gómez Vargas',
    email: 'luisfelipe_1002@hotmail.com',
    github: 'github.com/pipegovar',
    proyects: ['Tienda Latam', 'Ecomerce de ropa', 'To do list en Angular']
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course->title ?></title>
</head>
<body>
    <h1>Bienvenido al <?= $course->title ?></h1>

    <h2><?= $course->subtitle ?></h2>
    
    <p><?= $course->description ?></p>

    
    <p>
        <strong>Etiquetas</strong>
            <ul>
                <?php foreach ($course->tags as $tag): ?>
                    <li><?= $tag ?></li>
                <?php endforeach; ?> 
            </ul>
    </p>   

<h1>Autor</h1>

<p><strong>Nombre:</strong> <?= $autor->name ?></p>

<p><strong>Email:</strong> <?= $autor->email ?> </p>

<p><strong>Github:</strong> <?= $autor->github ?></p>

<p>
    <strong>Proyectos:</strong>
    <ul>
        <?php foreach ($autor->proyects as $proyect): ?>
            <li><?= $proyect ?></li>
        <?php endforeach; ?> 
    </ul>

</p>
          
</body>
</html>