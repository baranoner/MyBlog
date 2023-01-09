


<?php
   session_start();
   include "../database.php";
$db = mysqli_connect($servername,$username,$password,$dbname);

      // username and password sent from form 

      $mytitle = mysqli_real_escape_string($db,$_POST['title']);
      $mycontent = mysqli_real_escape_string($db,$_POST['content']); 
      
 
 $sql =  "UPDATE posts SET Title='$mytitle', Content='$mycontent' where ID='{$_COOKIE['edit_post_id']}'";
if(mysqli_query($db, $sql)){
        header("location: deneme.php");
} else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($db);
}

// // Close connection
mysqli_close($db);
      

      
      
?>


