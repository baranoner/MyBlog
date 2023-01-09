<?php

include 'login.php';



$email = $_POST["email"];
$new_password = $_POST["password"];

$sql = "SELECT Email, Password, ID FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $db_email = $row["Email"];
        $db_password = $row["Password"];
        $db_id = $row["ID"];

        if($email == $db_email && $new_password == $db_password){

          
          $_SESSION['logged_in'] = true;
          $_SESSION['email'] = $email;
          $_SESSION['id'] = $db_id;
            echo "<script>
            alert('Successfully entered');
            var login_status = true;


            var div = document.getElementById('login_nav');

            var a1 = document.createElement('a');
            a1.href = '../Profile/index.html';
            a1.textContent = 'Profile';
            a1.className = 'rest';
            div.appendChild(a1);
            
            var a2 = document.createElement('a');
            a2.href = '../Content Manager/deneme.html';
            a2.textContent = 'Content Manager';
            a2.className = 'rest';
            div.appendChild(a2);
            
            var a3 = document.createElement('a');
            a3.href = '../Main Page/mainpage.html';
            a3.textContent = 'Main Page';
            a3.className = 'rest';
            div.appendChild(a3);


            var login = document.getElementById('login');   

            div.removeChild(login);

            
            </script>";


      
            break 1;
        }

    }

    if($login_status == false){
      echo "<script>
      alert('Password is wrong')
      var login_status = false;
    </script>";
    }
  } else {
    echo "<script>
      alert('Database is empty')
    </script>";
  }
  $conn->close();

?>
