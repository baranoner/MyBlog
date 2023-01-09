<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MyBlog</title>
    <script defer src="main.js"></script>
    <link rel="stylesheet" href="newpost.css" />
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
    <div class="topnav">
      <a class="rest" href="index.html">Profile</a>
      <a class="rest" href="..\Content Manager\deneme.html">Content Manager</a>
      <a class="rest" href="..\Main Page\mainpage.html">Main Page</a>
      <a href="..\Main Page\mainpage.html " class="split"
        >My<span>Blog</span>
      </a>
    </div>

    <div class="box">
      <button class="button" id="cpost">Create Post</button>
      <h3 contenteditable="true" id="Title">Enter Title</h3>
      <p id="Date"></p>
      <p contenteditable="true">...
      </p>
    </div>
  </body>
</html>
