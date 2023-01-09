


<?php
   session_start();
   include "../database.php";
$db = mysqli_connect($servername,$username,$password,$dbname);

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

      $mytitle = mysqli_real_escape_string($db,$_POST['title']);
      $mycontent = mysqli_real_escape_string($db,$_POST['content']); 
      


      $sql = "INSERT INTO posts (title, content, user_id ) VALUES ('$mytitle', '$mycontent', '{$_SESSION['id']}')";
if(mysqli_query($db, $sql)){
        header("location: deneme.php");
} else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($db);
}

// Close connection
mysqli_close($db);
      

      
      
   }
?>


