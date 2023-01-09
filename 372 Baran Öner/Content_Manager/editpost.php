<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MyBlog</title>
    <script defer src="main.js"></script>
    <link rel="stylesheet" href="editpost.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Chivo+Mono&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
  <?php
include "../Navbar_logined.php";
?>
<form action="action_edit.php" method="post">
<div class="box">
      <button class="button" id="cpost">Create Post</button>
      
      <h3 id="Title">
      
      Enter Title
    
      <input type="text" name="title" id="title"></h3>
      <textarea id="content" name="content" rows="10" cols="100">

</textarea>
      
    </div>

  <button onclick="submit.php">Submit</button>
</form> 
    
  </body>
</html>
