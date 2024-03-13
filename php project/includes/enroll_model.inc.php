<?php
declare(strict_types=1);

session_start(); // Start the session

function get_course(object $pdo, string $enrolledcourse)
{
    $query = "SELECT course_id FROM courses WHERE course_id = :course_id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":course_id", $enrolledcourse);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_course(object $pdo, string $enrolledcourse, int $student_id)
{
    $course = get_course($pdo, $enrolledcourse);
    if ($course === null) {
        return "Error: Course not found";
    }

    $query = "INSERT INTO enrollments(course_id, student_id) VALUES (:course_id, :student_id);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":course_id", $course['course_id']);
    $stmt->bindParam(":student_id", $student_id);
    $stmt->execute();
}
?>

