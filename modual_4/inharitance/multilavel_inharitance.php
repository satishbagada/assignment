<!-- multiple inharitance is not supported in php -->
<?php
class A{
    public function disp(){
        echo "this is a A class</br>";
    }
}

class B extends A{
    public function disp1(){
        echo "this is a B class</br>";
    }
}
class C extends B{
    public function disp2(){
        echo "this is C class</br>";
    }
}
class D extends C{
    public function disp3(){
        echo "this is a D class</br>";
    }
}
$obj=new D();
$obj->disp();
$obj->disp1();
$obj->disp2();
$obj->disp3();

?>