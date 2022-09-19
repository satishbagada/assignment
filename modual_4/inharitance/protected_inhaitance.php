<?php
class fruits{
    protected $name;
    public $color;

    public function __construct($n,$c){
     $this->name=$n;
    $this->color=$c;
    }
     protected function intro(){
        echo "the name is {$this->name} and the color is  {$this->color}.</br>";
    }
}
class strawberry extends fruits{

    public function message(){
        echo "an fruits class Inherited in strawberry class</br>";
        $this->intro()."</br>";
        echo $this->name;

    }
    
}
$obj =new strawberry('apple','red');
$obj1=new fruits('apple','red');
$obj->message();
//$obj->intro();
//$obj1->name;
?>