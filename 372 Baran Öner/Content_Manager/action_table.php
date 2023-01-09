<?php
   session_start();
   include "../database.php";
$db = mysqli_connect($servername,$username,$password,$dbname);

   
      

      
      


      $sql = "SELECT ID, Title, Content from posts where user_id='{$_SESSION['id']}'";
      $result =  mysqli_query($db, $sql);

        while($row = mysqli_fetch_assoc($result)) {
     $id = $row["ID"];
     $title = $row["Title"];

    echo " <script>
    var tr = document.createElement('tr');

var idTd = document.createElement('td');
idTd.innerHTML = $id;
var titleTd = document.createElement('td');
titleTd.innerHTML = $title;

var editButton = document.createElement('button');
editButton.classList.add('button');
editButton.innerHTML = 'Edit';
editButton.addEventListener('click', function() {
  window.location.href = 'editpost.php';
});

var deleteButton = document.createElement('button');
deleteButton.classList.add('button');
deleteButton.innerHTML = 'Delete';
deleteButton.addEventListener('click', function() {
  deletePost(this);
});

tr.appendChild(idTd);
tr.appendChild(titleTd);
tr.appendChild(editButton);
tr.appendChild(deleteButton);


console.log(document.getElementById('dashboardcontents'));
</script>
    ";
    
    
          }
     
 


// Close connection
mysqli_close($db);
      

      
      
   
?>