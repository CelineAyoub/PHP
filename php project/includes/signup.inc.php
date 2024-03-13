<?php
  if($_SERVER["REQUEST_METHOD"]=="POST"){
        $student_id=$_POST["student_id"];
        $student_name=$_POST["student_name"];
        
        $email=$_POST["email"];
        $Acadamic_Year=$_POST["Acadamic_Year"];
        $Major=$_POST["Major"];

        try{
            require_once'db.inc.php';
            require_once'signup_model.inc.php';
            require_once'signup_controler.inc.php';
            //Eror Handler
            $errors=[];
            if(is_input_empty( $student_id, $student_name, $email,$Acadamic_Year, $Major)){
                $errors["empty_input"]="Fill all fields";

            }
            if(is_emaile_valid($email)){
                $errors["invalid_emaile"]="Invalid user emaile";

            }
            if(is_username_taken($pdo,$student_name)){
                $errors["username_taken"]="User Already taken";

            }
            if(is_emaile_regestered($pdo,$email)){
                $errors["email_used"]="Email arleady registered";

            }
                require 'config_session.inc.php';
            if($errors){
                $_SESSION["errors_singup"]=$errors;
              
                header("Location:../signup.php");
                die();
            }
            //no errors now u can create the student acount
             create_user( $pdo,  $student_id, $student_name,  $email,$Acadamic_Year,  $Major);
             header("Location:../signup.php?singup=success");
             $pdo=null;
             $stmt=null;
             die();
        

        }
        catch(PDOException $e){
            die("Query Failed".$e->getMessage());
        }

    }
    else{
        header("location:../signup.php");
        die();
    }