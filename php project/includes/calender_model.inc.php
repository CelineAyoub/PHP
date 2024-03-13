<?php
declare(strict_types=1);

function getCalender(object $pdo, int $student_id)
{
    $query = "SELECT * FROM student_calendar c
              WHERE c.student_id = :student_id";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":student_id", $student_id);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
?>
