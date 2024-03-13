<?php
declare(strict_types=1);
 function is_input_empty($student_id,string $student_name){
    if(empty($student_id) || empty($student_name)){
        return true;
    }
    else{
        return false;
    }
 }
function is_studentname_wrong(bool|array $result){
    if(!$result){
        return true;
    }
    else{
        return false;
    }

}
function is_studentid_wrong( int $entered_id, int $student_id) {
    return $entered_id !== $student_id;

    
}
