<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name; 
  }
  function get_name(){
  return $this->name;
 
}
}

$apple = new Fruit();
echo $apple->get_name();
?>
 
</body>
</html>