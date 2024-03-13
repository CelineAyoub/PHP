<?php
declare(strict_types=1);
//this is for quring the database
function get_studentname( object $pdo,string $student_name){
    $query="Select student_name from students where student_name=:student_name";
    $stmt=$pdo->prepare($query);
    $stmt->bindParam(":student_name",$student_name);
    $stmt->execute();
    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    return $result;

}
function get_email( object $pdo,string $email){
    $query="Select email from students where email=:email";
    $stmt=$pdo->prepare($query);
    $stmt->bindParam(":email",$email);
    $stmt->execute();
    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    return $result;

}
function set_user(object $pdo, string $student_id, $student_name, string $email,$Acadamic_Year, string $Major){
    $query="Insert INTO students (student_id,student_name,email,Acadamic_Year,Major) Values(:student_id,:student_name,:email,:Acadamic_Year,:Major);";
    $stmt=$pdo->prepare($query);
   
  
    $stmt->bindParam(":student_id",$student_id);
    $stmt->bindParam(":student_name",$student_name);
    $stmt->bindParam(":email",$email);
    $stmt->bindParam(":Acadamic_Year",$Acadamic_Year);
    $stmt->bindParam(":Major",$Major);
    


    $stmt->execute();
}