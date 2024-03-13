<?php
declare(strict_types=1);
//this file is used to take care of info
function is_input_empty( string $student_name, $student_id, string $email,$Acadamic_Year, string $Major){
if(empty($student_name) || empty( $student_id) || empty( $student_id) || empty($Acadamic_Year) || empty($Major)){

return true;


}
else{
    return false;
}
}
function is_emaile_valid(string $email){
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;
    }
    else{
        return false;
    }
}
function is_username_taken(object $pdo,string $student_name){
    if( get_studentname($pdo, $student_name)){
        return true;
    }
    else{
        return false;
    }
}

function is_emaile_regestered(object $pdo,string $email){
    if( get_email($pdo, $email)){
        return true;
    }
    else{
        return false;
    }
}
function create_user(object $pdo, string $student_id, $student_name, string $email,$Acadamic_Year, string $Major){
    set_user($pdo,  $student_id, $student_name,  $email,$Acadamic_Year,  $Major);
}