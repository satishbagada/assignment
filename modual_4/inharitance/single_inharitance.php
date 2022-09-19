<?php

class base{
    public function test(){
        echo "this is a base class</br>";
    }
}

    class derived extends base{

        public function testing(){
            echo "this is a derived class</br>";
        }
    }

$obj=new base();
$obj1=new derived();
$obj1->testing();
$obj->test();
?>