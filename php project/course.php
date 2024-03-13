<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/enroll_view.inc.php';
require_once 'includes/course_model.inc.php';

require_once 'includes/db.inc.php'; 



// Include your database connection and other necessary files here

if (!isset($_SESSION['student_id'])) {
    // Redirect to login page or handle not logged in case
    header("Location: login.php");
    exit();
}

$student_id = $_SESSION['student_id'];
$enrolledCourses = getEnrolledCourses($pdo, $student_id);
$numCourses = count($enrolledCourses);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Courses</title>
    <style>
     body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        header {
            background: linear-gradient(to right, #ff105f, #ffad06);
            color: #fff;
            padding: 1em;
            text-align: center;
            width: 100%;
        }

        nav {
            background-color: orange;
            color: to register_shutdown_function;
            padding: 1em;
            text-align: center;
            width: 100%;
        }

        section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around; /* Adjust as needed */
            padding: 20px;
        }

        .course {
            display: flex;
            align-items: center;
        }

        .course-box {
            flex: 0 0 calc(30% - 20px); /* Adjust the width as needed */
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px 10px; /* Adjust the margin as needed */
            border-radius: 8px;
            text-align: center;
        }

        .course-info {
            display: flex;
            justify-content: space-between;
            margin: 0;
            padding: 8px;
            background: linear-gradient(to right, #ff105f, #ffad06);
            -webkit-background-clip: text;
            color: transparent;
        }

        .course img {
            max-width: 200px;
            max-height: 200px;
            border-radius: 8px;
        }

        .credits {
            font-weight: bold;
            color: #333;
        }

        .enroll-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            border:linear-gradient(to right, #ff105f, #ffad06) ;
        }

        .enroll-form input {
            width: 250px; /* Adjust the width as needed */
            padding: 10px;
            font-size: 16px;
            border: 2px solid linear-gradient(to right, #ff105f, #ffad06);
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .enroll-button {
            background: linear-gradient(to right, #ff105f, #ffad06);
            color: #fff;
            padding: 15px 30px;
            font-size: 18px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .enroll-button:hover {
            background-color: #ff105f; /* Change color on hover if needed */
        }

        footer {
            background: linear-gradient(to right, #ff105f, #ffad06);
            color: #fff;
            padding: 1em;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
          
        }
    </style>
</head>

<!-- Rest of your HTML code -->

<body>
    <header>
        <h1>Student Management System</h1>
        <img src="images\book-logo-png-13.png" alt="Navigation Photo" style="max-width: 100px; max-height: 100px; border-radius: 50%;">
        <div><?php echo "Number of Courses: " . $numCourses; ?></div>
    </header>

    <nav>
        <a href="#">Dashboard</a> |
        <a href="#">My Courses</a> |
    </nav>

    <section>
        <?php
        // Check if $enrolledCourses is defined and not null before using foreach
        include 'includes/course_view.inc.php';
        ?>
    </section>
    <form class="enroll-form" action="includes/enroll.inc.php" method="post">
        <input type="text" name="new_course" placeholder="course">
        <button class="enroll-button" type="submit">Enroll</button>

    </form>

   
</body>

<!-- Rest of your HTML code -->

</html>

