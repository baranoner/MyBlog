
<?php
session_start();



   
   if(!isset($_SESSION['email'])){
    include "../Navbar.php";
      
   }
   else{
    include "../Navbar_logined.php";
   }


   ?>