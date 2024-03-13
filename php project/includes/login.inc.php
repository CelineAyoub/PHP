
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $student_id=$_POST["student_id"];
    $student_name=$_POST["student_name"];

try{
    require_once 'db.inc.php';
    require_once 'login_model.inc.php';
    require_once 'login_controler.inc.php';
    //Error handlers
    $errors=[];
    if(is_input_empty( $student_id, $student_name)){
        $errors["empty_input"]="Fill all fields";

    }
        $result=get_studentname($pdo,$student_name);
    if(is_studentname_wrong($result)){
        $errors["login_incorrect"]="Incorrect login info";
    }
    if(!is_studentname_wrong($result) && is_studentid_wrong($student_id,$result['student_id'])){
        
        $errors["login_incorrect"]="Incorrect login info";
    }

        require 'config_session.inc.php';
        var_dump($_SESSION);
    if($errors){
        $_SESSION["errors_login"]=$errors;
      
        header("Location:../login.php");
        die();
    }
    $newSessionId=session_create_id();
    $sessionId=$newSessionId."_".$result["student_id"];
    session_id($sessionId);
   
    $_SESSION["student_id"]=$result["student_id"];
    $_SESSION["student_name"]= htmlspecialchars($result["student_name"]);
    var_dump($_SESSION);
    $_SESSION['last_regeneration']=time();
    header("Location:../main.php?login=success");
    $pdo=null;
    $stmt=null;
    die();

    

}
catch(PDOException $e){
    die("Query Failed".$e->getMessage());
}





}
else{
    header("location:../login.php");
    die();
}