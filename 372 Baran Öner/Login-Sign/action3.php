<?php
   session_start();
   include "../database.php";
$db = mysqli_connect($servername,$username,$password,$dbname);

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

      $myemail = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      


      $sql = "SELECT ID FROM user WHERE Email = '$myemail' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $myid = $row["ID"];
   
      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         //session_register("myemail");
         $_SESSION['email'] = $myemail;
         $_SESSION['id'] = $myid;

         header("location: ../Main_Page/mainpage.php");
      }else {
        echo 
        "<SCRIPT> //not showing me this
        alert('INVALID EMAIL OR PASSWORD');
        window.location.replace('login.php');
    </SCRIPT>";

      
      }
      
   }
?>