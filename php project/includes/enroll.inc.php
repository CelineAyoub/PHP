<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enrolledcourse = $_POST["new_course"];

    try {
        require_once 'db.inc.php';
        require_once 'enroll_model.inc.php';
        require_once 'enroll_controler.inc.php';

        $errors = [];
        if (is_input_empty($enrolledcourse)) {
            $errors["empty_input"] = "Fill all fields";
        }

     
        // Move enroll function call outside of the if ($errors) block
        if (!$errors) {
            $student_id = $_SESSION['student_id'];
            enroll($pdo, $enrolledcourse, $student_id);
        }

        if ($errors) {
            $_SESSION["errors_enrolments"] = $errors;
            header("Location:../course.php");
            die();
        } else {
            // Redirect to the course page after successful enrollment
            header("Location:../course.php?enroll=success");
            die();
        }

    } catch (PDOException $e) {
        die("Query Failed" . $e->getMessage());
    }
}
?>
