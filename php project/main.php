
<?php

    require_once 'includes/config_session.inc.php';
  

// Add any other required includes here
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-XYZ">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }
        header {
            background: linear-gradient( to right,#ff105f,#ffad06);
            color: #fff;
            padding: 1em;
            text-align: center;
        }
     
        .vertical_nav {
            width: 200px;
            height: 100vh;
            background: linear-gradient(to right, #ff105f, #ffad06);
            color: #fff;
            padding: 20px;
            box-sizing: border-box;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    
        .vertical_nav a {
    display: flex;
    align-items: center;
    color: white;
    text-decoration: none;
    padding: 10px;
    border-radius: 4px;
    transition: background-color 0.3s ease;
    margin-bottom: 20px; /* Adjusted margin for smaller space */
    height: 50px; /* Set a fixed height for all buttons */
    width: 150px; /* Set a fixed width for all buttons */
    transition: background-color 0.3s ease, color 0.3s ease;
}

.vertical_nav a:hover {
    background-color: orange;
    color: black;
}


        .vertical_nav img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }

    

        .notification_list {
            display: none;
            flex-direction: column;
            align-items: center;
            margin-top: 10px;
        }

        .notification_list a {
            color: white;
            text-decoration: none;
            margin: 5px;
        }
        .download_list {
            display: none;
            flex-direction: column;
            align-items: center;
            margin-top: 10px;
        }

        .download_list a {
            color: white;
            text-decoration: none;
            margin: 5px;
        }

        .content {
            
            flex-direction:row;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        
        
        .featured_book_box {
            display: flex;
            
            overflow: auto;
 
        gap: 20px;
        overflow: auto;
        flex-direction: column;
        margin-bottom: 40px; 
        }
        
            .featured_book_card {
        background-color: #fff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        flex: 1;
        margin-right: 60px; /* Ajoutez cette ligne pour ajouter de la marge à droite de chaque boîte */
    }
        

        .featured_book_card:hover {
            transform: scale(1.05);
        }

        .featured_book_card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .featurde_book_tag {
            padding: 15px;
            text-align: center;
        }


        .course_box,
        .calendar_box,
        .marks_box {
            margin-bottom: 20px; /* Adjust the margin as needed */
        }
        section {
           
            padding: 20px; /* Adjust the padding as needed */
            text-align: center;
        }

        .card {
            
            padding: 20px; /* Adjust the padding as needed */
            border-radius: 10px; /* Add border-radius for rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
        }
        .logout {
    background: white;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    display:flex;
    text-decoration: none;
    margin-bottom: 20px;
}

.logout h3 {
    color: white; /* Set the text color to white for h3 inside .logout */
}
        .card1 {
            display: flex;
            padding: 10px; /* Adjust the padding as needed */
            border-radius: 10px; /* Add border-radius for rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
            background-color: #fff;
            align-items: center;
            margin: 5px;
            text-decoration: none;}
            .card1 img {
            max-width: 50px; /* Set your desired max width for the image */
            margin-right: 10px; /* Adjust margin as needed */
        }
        h2 {
    background: linear-gradient(to right, #ff105f, #ffad06);
    -webkit-background-clip: text; /* For Webkit browsers like Chrome and Safari */
    background-clip: text;
    color: transparent; /* Set text color to transparent to reveal the background gradient */
}
h3 {
    margin: 0;
    background: linear-gradient(to right, #ff105f, #ffad06);
    -webkit-background-clip: text; /* For Webkit browsers like Chrome and Safari */
    background-clip: text;
    color: transparent; /* Set text color to transparent to reveal the background gradient */
}

        p {
            background: linear-gradient(to right, #ff105f, #ffad06);
            padding: 10px; /* Adjust the padding as needed */
            border-radius: 5px; /* Add border-radius for rounded corners */
            color: #fff; /* Set text color to white or any other color that fits your design */
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

    <div class="vertical_nav">
    <section>
        <a href="mark.php">
        <div class="card1">
        <i class="fas fa-chart-bar"></i>
    <img src="images/pngtree-business-element-yellow-bar-chart-png-image_6323549.png.jpg" alt="Marks Image" alt="Calendar Image">
    <br>   <b><h3>Marks</h3></b></div>
        </a></section>
       
        <section>
        <a href="course.php">
    <div class="card1">
    
    <img src="images/istockphoto-157482029-170667a.webp.jpg" alt="Cours Image">
      <b><h3>Course</h3></b></div> 
        </a></section>
       
        <section>
        <a href="calander.php">
        <div class="card1">
    <img src="images/calendar-icon.png.jpg" alt="Calendar Image">
    <br>   <b><h3>Calendar</h3></b></div>
        </a></section>
        <section>
        <a href="Teacher.php">
        <div class="card1">
    <img src="images/teacher-portrait1.jpg" alt="Teacher Image">
    <br>   <b><h3>Teacher</h3></b></div>
        </a></section>
       
       <section>
        <a href="login.php">
    
            <div class="logout">
            <b><h3>Logout</h3></b></div>
        </a></section>
    </div>
    <section>
        <div class="card">
        <?php
        if (isset($_SESSION['student_name'])) {
            echo '<h2>Hello, ' . $_SESSION['student_name'] . '</h2>';
        } else {
            echo '<h2>Welcome</h2>';
        }
        ?>

            <p>Manage your students and courses efficiently.</p>
        </div>
    </section>
    <div class="content">
        <a href="profile.php" class="course_box">
            
                <div class="featured_book_card">
                    <div class="featurde_book_img">
                        <img src="images/user.jpg" >
                    </div>
                    <div class="featurde_book_tag">
                        <h2>My profile</h2>
                    </div>
                </div>
            
        </a>

        <a href="calander.php" class="calendar_box">
            
                <div class="featured_book_card">
                    <div class="featurde_book_img">
                        <img src="images/logo_6.jpg" >
                    </div>
                    <div class="featurde_book_tag">
                        <h2>About University</h2>
                    </div>
                </div>
            
        </a>

        
            </div>
    <footer>
        &copy; 2023 Student Management System
    </footer>
    <script>
        function logout() {
            // Add your logout logic here
            alert("Logout button clicked");
        }
      
        
        <!-- Your existing content here -->
       
        
    </script>
</body>
</html>



