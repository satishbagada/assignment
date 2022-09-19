<?php
class employee{
    public $name;
    public $age;
    public $salary;
    public function __construct($name,$age,$salary){
        $this->name=$name;
        $this->age=$age;
        $this->salary=$salary;
    }
    public function show(){
        echo "<h3>employee data</h3>";
        echo "emplyee name: ".$this->name."</br>";
        echo "emplyee age: ".$this->age."</br>";
        echo "emplyee salary: ".$this->salary."</br>";
    }
}
class manager extends employee{
    public $ta;
    public $phone;
    public $tot_salary;

    public function showdata(){
        $this->ta=1000;
         $this->phone=500;
        
        echo "<h3>manager data</h3>";
        echo "manage name: {$this->name}</br>";
        echo "manage age: {$this->age}</br>";
        echo "manage salary:".$this->tot_salary=($this->salary+$this->ta+$this->phone)."</br>";
    }
   
}
//$obj=new employee('yahoo',22,10000);
$obj1=new manager('baba',21,10000);
$obj1->show();
$obj1->showdata();

?>