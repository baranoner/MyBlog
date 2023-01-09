<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyBlog</title>
  <!--Link to CSS-->
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Chivo+Mono&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
</head>
<body>
  <!--Header-->
  <header> 
  <?php
session_start();


   
   if(!isset($_SESSION['email'])){
    include "../Navbar.php";
      
   }
   else{
    include "../Navbar_logined.php";
   }

   include "../database.php";
   $db = mysqli_connect($servername,$username,$password,$dbname);
 
   
 
   $sql = "SELECT ID, Title, Content from posts";
   $result =  mysqli_query($db, $sql);

   ?>
  

  <!--Home-->
  <section class="home" id="home">
    <div class="home-text container">
       <h2 class="home-title">Welcome to MyBlog</h2>
       <span class="home-subtitle">Create your own content</span>
    </div>
  </section>



  </header>

  <div class="box-container">
  <?php
      while($row = mysqli_fetch_assoc($result)) {
        $id = $row["ID"];
        $title = $row["Title"];
        $content = $row["Content"];
    ?>
<div class="box"> 
<a class="post" value="<?php echo $id; ?>"  onclick="redirectPost(this)" href="">
    <h3 id="Title"><?php echo $title; ?></h3>
    
    <p><?php echo $content; ?></p>
  </a>
  </div>
    <?php
      }
    ?>

</div>



</body>
</html>