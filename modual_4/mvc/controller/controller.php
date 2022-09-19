<?php
require_once("../model/model.php");
class controller extends model{

    public function __construct(){
    if(isset($_POST['sub'])){

       $name= $_POST['nm'];
        $age=$_POST['age'];
        $phone=$_POST['ph'];
        $msg=$_POST['msg'];
        echo "
        <h3 align='center' style='color:orange'>hi we have are available with information $name</br>
        $age</br>
        $phone</br>
        $msg</h3>";
            }
            if(isset($_SERVER["PATH_INFO"])){
                switch($_SERVER["PATH_INFO"]){
                    case '/':
                        require_once('index.php');
                        // require_once('contact-us.php');
                        require_once("navbar.php");
                        require_once("view.php");
                        require_once("404.php");
                        break;
                        default:
                        require_once("404.php");
                }
            }
    }
    
}
$obj=new controller();
?>