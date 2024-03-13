
<?php
      require_once 'includes/config_session.inc.php';
      require_once 'includes/login_view.inc.php';
?>

<html>
    <head>
        <title> Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    
    <div class="hero">
        
    <div class="form-box">
    <div class="button-box">
        <div id="btn"></div>
        <button type="button" class="toggle-btn" >Login</button>
        <button type="button" class="toggle-btn"> SignUp</button>
    </div>
  
        <div class="img"><img src="images/WhatsApp Image 2023-12-22 at 22.20.16_53f4170d.jpg.jpg"/></div>
    
    <form  action="includes/login.inc.php" method="post"   id="login" class="input-group" >

<input type="number" name="student_id" class="input-field" placeholder="student ID">

<input type="text"  name="student_name" class="input-field" placeholder="student name">

<button type="submit" class="submit-btn" >Login </button>
<p>Don't have an account? <a href="signup.php">Sign Up</a></p>
    </form>
 
    </div>
    </div>
    <?php
        check_login_errors();
    ?>
    </body>
</html>