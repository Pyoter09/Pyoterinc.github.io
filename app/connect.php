<?php
session_start();
$conn = mysqli_connect("localhost","root","","magazyn");
$log_id = $_SESSION['id'];
$kw="SELECT * from uzytkownicy where id = $log_id;";
$kw1 = "INSERT into logi_uzytkownikow values(NULL,$log_id,'login',NULL)";
mysqli_query($conn,$kw1);
$con1 = mysqli_query($conn,$kw);
while($row = mysqli_fetch_row($con1)) {
    if ($row[4] == NULL && $row[5] == NULL && $row[6] == 'example@example.pl' && $row[7] == '+48000000000'){
    header('location: cre_acc_.php');
    }
    else{
        if ($row[3]=='admin'){
            header('location: app_a.php');
        }
        elseif ($row[3]=='prywatnie'){
            header('location: app_p.php');
        }
        elseif ($row[3]=='firma'){
            header('location: app_f.php');
        }
        else{
            header('location: https://pyoterinc.glitch.me/');
        }
    }
}

?>
""