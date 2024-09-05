<html>
<body>
<?php

class fruta{
    //Propiedades
    public $name;
    public $color;
//Metodo
    function set_name($name){
        $this->name = $name; 
    }
    function get_name(){
        return $this ->name;
    }
}

$apple = new fruta();
$banana = new fruta();
$apple->set_name('Apple');
$apple->set_name('Banana');
  

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();



?>
</html>
</body>

















