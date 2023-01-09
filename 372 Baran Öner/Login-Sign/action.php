<?php

include 'register.php';


if($_POST["password"] == $_POST["passwordagain"]){

  include "../database.php";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $new_email = $_POST["email"];
    $new_password = $_POST["password"];
    $new_name = $_POST["name"];
    $new_surname = $_POST["surname"];
    $sql = "INSERT INTO user (`Email`, `Password`, `Name`, `Surname`) VALUES ('$new_email', '$new_password', '$new_name', '$new_surname')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      mysqli_close($conn);

}
else{
    echo "<script>
    alert('ŞİFRENİZİ HATALI GİRDİNİZ')
  </script>";
    
}


?>
