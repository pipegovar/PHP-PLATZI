<?php

class Author 
{

 public function __construct(
    protected string $name,
    protected string $email,
    protected string $github,
    protected array $proyects,
  ) {
    
  }
  
  public function __get($name)
  {
    if(property_exists($this, $name)) {
      return $this->$name;
    }

    return null;
  }

  public function __toString()
  {
    $html = "<h2>Autor</h2>";

	  $html .= "<p>{$this->name}</p>";
	  $html .= "<p>{$this->email}</p>";
	  $html .= "<p>{$this->github}</p>";

    $html .= "<h3>Proyectos:</h3>";

    $html .= "<ul>";
    foreach ($this->proyects as $proyect) {
      $html .= "<li>{$proyect}</li>";
    }
    $html .= "</ul>";

	  return $html;
  }
  }