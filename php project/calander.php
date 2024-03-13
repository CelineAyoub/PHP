<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/calender_model.inc.php';
require_once 'includes/db.inc.php';
require_once 'includes/calender_view.inc.php';


// Include your database connection and other necessary files here

if (!isset($_SESSION['student_id'])) {
    // Redirect to login page or handle not logged in case
    header("Location: login.php");
    exit();
}

$student_id = $_SESSION['student_id'];
$marks = getCalender($pdo, $student_id);

?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
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
            background:gray;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px;
            border-radius: 8px;
            text-align: center;
        }


        .calendar-header {
            background: linear-gradient(to right, #ff105f, #ffad06);
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .calendar {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
            margin-top: 20px;
            cursor: pointer;
        }

        .day {
            text-align: center;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #fff;
            transition: background-color 0.3s ease-in-out;
        }

        .weekend {
            background-color: #ffd700; /* Yellow */
            color: #555;
        }

        .exam-day {
            background-color: #ff8c00; /* Orange */
            color: #fff;
            font-weight: bold;
        }

        .course-day {
            background-color: #ff69b4; /* Pink */
            color: #fff;
        }

        .day:hover {
            background-color: #e0e0e0;
        }

        .day.clicked {
            background-color: #b3e0ff; /* Light Blue - Change as needed */
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
        <img src="images/pngtree-flat-calendar-png-image_4590004.jpg"style="max-width: 100px; max-height: 100px; border-radius: 50%;" >
    </header>

    <nav>
        <a href="#">Dashboard</a> |
        <a href="#">Calendar</a>
    </nav>
    <?php renderCalendar($marks); ?>



        <!-- Other content and cards can be added here -->
    

    <footer>
        &copy; 2023 Student Management System
    </footer>

    <script>
        // Add click event to calendar cells
        document.addEventListener('DOMContentLoaded', function () {
            var calendarDays = document.querySelectorAll('.day');
            
            calendarDays.forEach(function(day) {
                day.addEventListener('click', function() {
                    this.classList.toggle('clicked');
                    // Add logic for handling click event as needed
                });
            });
        });
    </script>
</body>
</html>


