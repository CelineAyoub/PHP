<?php
    declare(strict_types=1);
    function get_studentname(object $pdo,string $student_name){
        
            $query="Select * from students where student_name=:student_name";
            $stmt=$pdo->prepare($query);
            $stmt->bindParam(":student_name",$student_name);
            $stmt->execute();
            $result=$stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        
        
    }