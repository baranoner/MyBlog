
<html>
  <head>
    <title>Content Manager</title>
    <!--Link JS-->
    <script defer src="main.js"></script>
    <!--Link CSS-->
    <link rel="stylesheet" href="deneme.css" />
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
session_start();
include "../database.php";
  $db = mysqli_connect($servername,$username,$password,$dbname);

  

  $sql = "SELECT ID, Title, Content from posts where user_id='{$_SESSION['id']}'";
  $result =  mysqli_query($db, $sql);
?>

    <h1>Dashboard</h1>
	<a href="newpost.php">
    	<button class="button" id="cpost">Create a Post</button>
	</a>
    <section id="posts">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="card">
              <div class="card-header"></div>
              <table class="table table-striped">
                <thead class="thead-dark">
                  <tr>
                    <th>#</th>
                    <th>Title</th>
        
                    <th></th>
                  </tr>
                </thead>
                <tbody id="dashboardcontents">
				<?php
      while($row = mysqli_fetch_assoc($result)) {
        $id = $row["ID"];
        $title = $row["Title"];
    ?>
      <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $title; ?></td>
        <td>
          <a href="editpost.php">
            <button class="button" id="edit" value="<?php echo $id; ?>"  onclick="editPost(this)">Edit</button>
          </a>
          <button value="<?php echo $id; ?>" class="button" id="delete" onclick="deletePost(this)">Delete</button>
        </td>
      </tr>
    <?php
      }
    ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
	<script>
      function deletePost(element) {
		console.log(element);
		const id = element.getAttribute('value');
		document.cookie = `post_id=${id}`;
		
		
		<?php

		
		if (isset($_COOKIE['post_id'])) {
			$cookieValue = $_COOKIE['post_id'];
		  } else {
			$cookieValue = null;
		  }
		  include "../database.php";
		  $db = mysqli_connect($servername,$username,$password,$dbname);
		
		  
		
		  $sql = "DELETE from posts where id='$cookieValue'";
		  $result =  mysqli_query($db, $sql);
		?>
        location.reload();
		location.reload();
		location.reload();
		location.reload();
      }

	  function editPost(element) {
		console.log(element);
		const id = element.getAttribute('value');
		document.cookie = `edit_post_id=${id}`;
      }
    </script>
  </body>
</html>
<?php
  // Close connection
  mysqli_close($db);
?>