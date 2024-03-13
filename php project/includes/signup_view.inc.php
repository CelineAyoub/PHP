<?php
declare(strict_types=1);
//this for inputing info into the page*infront of it


 function check_signup_errors(){
    if(isset($_SESSION["errors_singup"])){
        $errors=$_SESSION["errors_singup"];
        echo "<br>";
        foreach($errors as $error){
            echo "<p>".$error."</p>";

        }


        unset($_SESSION["errors_singup"]);

}
else if(isset($_GET["singup"] ) &&  $_GET["singup"]==="success"){
    echo "<br>";
    echo '<p>Signup sucess u can log in now!</p>';

}
 }