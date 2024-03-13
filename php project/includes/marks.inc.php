<?php
session_start(); // Start the session
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST["student_id"];

    try {
        require_once 'db.inc.php'; // Include your database connection here
        require_once 'marks_model.inc.php';
        // Error handlers
        $marks = getMarks($pdo, $student_id);

        // Set the session data
        $_SESSION["student_id"] = $student_id;
       

      
        exit();
    } catch (PDOException $e) {
        die("Query Failed" . $e->getMessage());
    }
} else {
    header("location: ../main.php");
    exit();
}
?>
