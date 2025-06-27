<?php
          $conn = mysqli_connect("localhost","root","","magazyn");
          $login = $_POST['imie'];
          $pass = $_POST['email'];
          $pass_check = $_POST['opis']; 
          $kw = "insert into wiadomosci values(NULL,'$login','$pass','$pass_check');";
          mysqli_query($conn,$kw);
          header('location: index.php');
?>