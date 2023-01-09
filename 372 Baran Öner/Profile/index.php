<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>
<link rel="stylesheet" href="style.css">
     
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Chivo+Mono&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
<head>
        
    

<body> 
<?php
include "../Navbar_logined.php";
?>

    
   
      




    
    
</body>

    
        
        
      
    
   
        <div class="info">
            
            <form action="action_profile.php" method="post">
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Your name..">
          
              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="lastname" placeholder="Your last name..">
<br><br><br><br>
          
              <label for="sex">Sex</label>
              <select id="sex" name="sex">
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            
              <input type="submit" value="Submit">
            </form>
          </div>
</p>


        
</body>


</html>