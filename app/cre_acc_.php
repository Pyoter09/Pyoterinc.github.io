<?php
session_start();
$conn = mysqli_connect("localhost","root","","magazyn");
$log_id = $_SESSION['id'];
$kw="SELECT * from uzytkownicy where id = $log_id;";
$con1 = mysqli_query($conn,$kw);
while($row = mysqli_fetch_row($con1)) {
    $username = $row[1];
    $type = $row[3];


}

?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dokończ tworzenie konta
    </title>
    <link rel="icon" type="image/x-icon" href="https://cdn.glitch.global/13781469-95d2-4a60-8f7f-5a9d063ac413/logo.png?v=1727452778264" />

    <link rel="stylesheet" href="cre.css" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
  </head>
  <body>
    <header>
    <div class="action">
        <div class="profile" onclick="menuToggle();">
        <button class="profile" role="button"><span class="text"><?php echo " ".$username;?></span></button>
        </div>

        <div class="menu">
            <h3>
            <?php echo $imie." ".$naz;?>
                <div>
                    typ konta:<?php echo " ".$type;?>
                </div>
            </h3>
            <ul>
                <li>
                <span class="material-icons icons-size">home</span>
                    <a href="#">menu główne</a>
                </li>
                <li>
                    <span class="material-icons icons-size">manage_accounts</span>
                    <a href="cre_acc.html">utwóż konto</a>
                </li>
                                            <li>
                    <span class="material-icons icons-size">grade</span>
                    <a href="https://glitch.com/dashboard?group=owned&sortColumn=boost&sortDirection=DESC&page=1&showAll=false&filterDomain=">admin page</a>
                </li>
              <script>
        function menuToggle(){
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
    </script>
      
    </header>

    <div class="container">
        <h1>Dokończ tworzenie konta</h1>
        <form action="cre_acc.php" method="post">
            <input type="text" id="imie" name="imie" placeholder="imie lub nazwa firmy" required>
            <input type="text" id="naz" name="naz" placeholder="nazwisko">
            <input type="text" id="mail" name="mail" placeholder="example@gmail.com" required>
            <h3>Wybierz typ konta</h3>
            <input type="radio" name="type" value = "prywatnie" require>Prywatne<br>
            <input type="radio" name="type" value = "firma" require>Firmowe<br>
            <input type="text" id="mail" name="nrtel" placeholder="numer telefonu" required>
            <h6><input type="checkbox" required> Zgadzam się na warunki, jakie zawiera <a href="terms.html">Regulamin</a> (ostatnia aktualizacja: 14.10.2024)</h6> <br>
            <button class="button-82-pushable" role="button">
                <span class="button-82-shadow"></span>
                <span class="button-82-edge"></span>
                <span class="button-82-front text">
                  dokończ konfiguracje konta
                </span>

        </form>
    </div>

      <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Pyoter inc Wszystkie prawa zastrzeżone.</p>
        <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link text-white" href="#.html">Polityka prywatności</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#.html">Regulamin</a></li>
        </ul>
    </footer>
</body>
</html>
<?php 
$error == 0;
$error = $_COOKIE['error1'];
if ($error == 1){
  echo "<script>window.alert(taki email już istnieje');</script>";
  setcookie("error", "", time() - 3600);
}
elseif ($error == 2){
  echo "<script>window.alert('taki użytkownik już istnieje');</script>";
  setcookie("error", "", time() - 3600);
}

?>