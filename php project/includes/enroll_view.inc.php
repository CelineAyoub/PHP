<?php


declare(strict_types=1);
//this for inputing info into the page*infront of it


 function check_signup_errors(){
    if (isset($_SESSION["errors_enrolments"])) {
        $errors = $_SESSION["errors_enrolments"];
        echo "<br>";
        foreach ($errors as $error) {
            echo "<p>" . $error . "</p>";
        }
        // Unset only when there are errors
        unset($_SESSION["errors_enrolments"]);
    }
    
else if(isset($_GET["enroll"] ) &&  $_GET["enroll"]==="success"){
    echo "<br>";
    echo '<p>enroll sucseed!</p>';

}
 }