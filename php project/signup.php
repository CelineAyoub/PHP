<?php
    require_once 'includes/config_session.inc.php';
    require_once 'includes/signup_view.inc.php';
?>

<html>
    <head>
        <title> Register</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    
    <div class="hero">
        
    <div class="form-box">
    <div class="button-box">
    <div id="btn"></div>
        <button type="button" class="toggle-btn">Login</button>
       
        <button type="button" class="toggle-btn">SignUp</button>
</div>
<div class="img"><img src="images/WhatsApp Image 2023-12-22 at 22.20.16_53f4170d.jpg"/></div>

        
    
    <form action="includes/signup.inc.php" method="post" id="register" class="input-group">
    <input type="number" class="input-field" name="student_id" placeholder="ID" >
<input type="text" class="input-field" name="student_name" placeholder="name" >

<input type="emaile" class="input-field" name="email" placeholder="Emaile" >
<input type="number" class="input-field" name="Acadamic_Year" placeholder="Year">
<input type="text" class="input-field" name="Major" placeholder="Major">
<button type="submit" class="submit-btn" >Register </button>
<p>Already have an account? <a href="login.php">Login</a></p>
    </form>
  <?php
      check_signup_errors();
  ?>

</div>
</div>

    </body>
</html>