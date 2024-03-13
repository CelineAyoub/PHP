<?php
    // Teacher.php

    // Include necessary configurations and database connections
    require_once 'includes/config_session.inc.php';
    require_once 'includes/db.inc.php';

    // Check if the user is logged in
    if (!isset($_SESSION['student_id'])) {
        // Redirect to the login page if not logged in
        header("Location: login.php");
        exit();
    }

    // Fetch teacher information based on the logged-in student's ID
    $studentId = $_SESSION['student_id'];

    // You should replace this with your actual database query to fetch teacher information
    // The query might involve joining the tables that store student and teacher information
    // For this example, I'm assuming there is a table named 'teachers' with relevant columns
    $query = "SELECT Techer_name, day_of_teaching, hours, course_id FROM teacher WHERE student_id = :studentId";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':studentId', $studentId, PDO::PARAM_INT);
    $statement->execute();
    $teachers = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Information</title>
    <!-- Add your CSS styles or include a separate stylesheet if needed -->
</head>
<body>
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
            width: 100%;}

        
    
    

    /* ... le reste de votre style ... */

    .header-row th {
        background: linear-gradient(to right, #ff105f, #ffad06);
        color: #fff;
    }

    th, td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: center;
    }

    .th {
        background: white;
        color: #000; /* Change text color if needed */
    }
</style>
    
   
    <header>
    <h2>Teacher Information</h2>
    </header>
    <nav>
        <a href="#">Dashboard</a> |
        <a href="#">Teacher</a>
    </nav>
    <?php if (count($teachers) > 0): ?>
        <table border="1">
            <thead>
            <tr class="header-row">
                    <th class="th">Teacher Name</th>
                    <th class="th">Day of Teaching</th>
                    <th class="th"> Hours</th>
                    <th class="th">Course ID</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($teachers as $teacher): ?>
                    <tr>
                        <td ><?php echo $teacher['Techer_name']; ?></td>
                        <td><?php echo $teacher['day_of_teaching']; ?></td>
                        <td style="background: white; background-clip: text; -webkit-background-clip: text; color: transparent; background-image: linear-gradient(to right, #ff105f, #ffad06);"><?php echo $teacher['hours']; ?></td>
                        <td><?php echo $teacher['course_id']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No teacher information found for the logged-in student.</p>
    <?php endif; ?>

    <!-- Add any additional content or styling as needed -->
    <footer>
        &copy; 2023 Student Management System
    </footer>
</body>
</html>
