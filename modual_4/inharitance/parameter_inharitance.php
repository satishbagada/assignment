<?php
class base{
public $name;
public $color;
public function __construct($n,$c){
    $this->name=$n;
    $this->color=$c;
}
public function test(){
    echo "the name is {$this->name} and the color is {$this->color}";
}
}
class derive extends base{
    public $weight;
    public function __construct($name,$color,$w){
         $this->weight=$w;        
    
        $this->color=$color;
        $this->name=$name;
    }
    public function message(){
        echo "the derive class name is  {$this->name} 
        and color is  {$this->color} and wight is {$this->weight}.</br>";


    }
}
$obj=new derive('strawberry','red','50g');
$obj1=new base('apple','red');
$obj->message();
$obj1->test();

?>