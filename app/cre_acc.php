
          <?php
          session_start();
          $conn = mysqli_connect("localhost","root","","magazyn");
          $id = $_SESSION['id'];
          
          $imie = $_POST['imie'];
          
          $naz = $_POST['naz'];
          
          $tel = $_POST['nrtel'];
          
          $mail = $_POST['mail'];
          
          $type = $_POST['type'];
          $log_id = $_SESSION['id'];
          $kw="SELECT email from uzytkownicy where email = '$mail';";
          echo $kw;
          $con1 = mysqli_query($conn,$kw);
          while($row = mysqli_fetch_row($con1)) {
            $mail_check = $row[0];
            echo $mail_check;
          }

                if (!empty($mail_check)){
                  setcookie("error1", 1, time() + (86400 * 30), "/");
                  header('location: cre_acc_.php');
                }
                else{
                  $add = "UPDATE uzytkownicy SET rola = '$type', imie = '$imie',nazwisko = '$naz', email='$mail',telefon = '$tel' where id=$id;";
                  echo $add;
                  mysqli_query($conn,$add);
                  header('location: https://pyoterinc.glitch.me');
                }
          
          

?>
