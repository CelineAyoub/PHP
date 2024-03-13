
<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/marks_model.inc.php';
require_once 'includes/db.inc.php';


// Include your database connection and other necessary files here

if (!isset($_SESSION['student_id'])) {
    // Redirect to login page or handle not logged in case
    header("Location: login.php");
    exit();
}

$student_id = $_SESSION['student_id'];
$marks = getMarks($pdo, $student_id);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marks</title>
    <style>
          body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background: linear-gradient( to right,#ff105f,#ffad06);
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        nav {
            background-color:orange;
            color: to register_shutdown_function;
            padding: 1em;
            text-align: center;
        }

        section {
            padding: 20px;
            
            
        }

        .card {
            background:white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px;
            border-radius: 8px;
            text-align: center;
        }

        .card-heading {
            background: linear-gradient(to right, #ff105f, #ffad06);
            color: #fff;
            padding: 10px;
            text-align: center;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: gray;
            color: #fff;
        }

        .not-passed {
            background-color: #ffcccc; /* Light Red - Change as needed */
        }
       
        footer {
            background: linear-gradient( to right,#ff105f,#ffad06) ;
            color: #fff;
            padding: 1em;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;

        
        }
    </style>
</head>
<body>
    <header>
        <h1>Student Management System</h1>
    </header>

    <nav>
        <a href="#">Dashboard</a> |
        <a href="#">Marks</a>
    </nav>
     <div class="sections-container">
    <section>
    <?php
        // Check if $enrolledCourses is defined and not null before using foreach
        include 'includes/mark_view.inc.php';
        ?>
    </section>
     </div>
    <footer>
        &copy; 2023 Student Management System
    </footer>
</body>
</html>
