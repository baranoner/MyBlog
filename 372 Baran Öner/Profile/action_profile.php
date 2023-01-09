<?php
session_start();
include "../database.php";
$db = mysqli_connect($servername,$username,$password,$dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $sex = mysqli_real_escape_string($db, $_POST['sex']);




    $sql = "UPDATE user SET  Name= '$firstname', Surname = '$lastname', Sex='$sex'  WHERE ID='{$_SESSION['id']}'";
    $result = mysqli_query($db, $sql);
    header("location: ../Main_Page/mainpage.php");
    
}?>