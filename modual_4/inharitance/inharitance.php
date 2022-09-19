 <?php

class fruits{
    public $name;
    public $color;
    public function __construct($n,$c){
       $this->name=$n;
       $this->color=$c;
    }
    
    public function introdu(){
        echo "the fruit is {$this->name} and the color is {$this->color}.    ";
    }
}
class strawberry extends fruits{
    public function message(){
        echo "fruit class inharited</br>";
       echo $this->color."</br>";
    }
}
$obj=new strawberry('banana','yellow');
$obj->message();
$obj->introdu();

?>




