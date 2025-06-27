<?php
session_start();
$conn = mysqli_connect("localhost","root","","magazyn");
$log_id = $_SESSION['id'];
$kw1 = "INSERT into logi_uzytkownikow values(NULL,$log_id,'logout',NULL)";
mysqli_query($conn,$kw1);
mysqli_close();
session_destroy();
setcookie("error", "", time() - 3600);
setcookie("error1", "", time() - 3600);
header('location: https://pyoterinc.glitch.me/login1.php');
?>