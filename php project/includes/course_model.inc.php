<?php
declare(strict_types=1);

function getEnrolledCourses(object $pdo, int $student_id)
{
    $query = "SELECT * FROM enrollments e
              JOIN courses c ON e.course_id = c.course_id
              WHERE e.student_id = :student_id";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":student_id", $student_id);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
?>
