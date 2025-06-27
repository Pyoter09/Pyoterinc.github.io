<?php
session_start();
$conn = mysqli_connect("localhost","root","","magazyn");
$id = $_SESSION['id'];
if (!empty($id)){
    $kw="SELECT * from uzytkownicy where id = $id;";
    $con1 = mysqli_query($conn,$kw);
    while($row = mysqli_fetch_row($con1)) {
    $login = $row[1];
    $typ = $row[3];
    $imie = $row[4];
  }
  if ($typ == 'prywatnie'){
    header('location: https://pyoterinc.glitch.me/app/app_p.php');
  }
}
else{
    header('location: https://pyoterinc.glitch.me/login1.php');
  }
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nope</title>
    <link rel="icon" type="image/x-icon" href="https://cdn.glitch.global/13781469-95d2-4a60-8f7f-5a9d063ac413/logo.png?v=1727452778264" />
    <link rel="stylesheet" href="app.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
  </head>
  <body>
    <header>
    <div class="action">
        <div class="profile" onclick="menuToggle();">
        <button class="profile" role="button"><span class="text"><?php echo $login;?></span></button>
        </div>

        <div class="menu">
            <h3>
            <?php echo $imie." ".$naz;?>
                <div>
                    typ konta:<?php echo " ".$typ;?>
                </div>
            </h3>
            <ul>
                <li>
                <span class="material-icons icons-size">home</span>
                    <a href="https://dziennikpinc.glitch.me/app/app.php">menu główne</a>
                </li>
                <li>
                    <span class="material-icons icons-size">manage_accounts</span>
                    <a href="acc_conf.php">ustawienia konta</a>
                </li>
                <li>
                    <span class="material-icons icons-size">logout</span>
                    <a href="https://dziennikpinc.glitch.me">wyloguj</a>
                    
                </li>
            </ul>
        </div>
    </div>

    <script>
        function menuToggle(){
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
    </script>
      
    </header>
    <div class="container mt-5">
        <h2 class="text-center">Ustawienia konta</h2>
        <form action="acc_conf.php" method="POST" class="mt-4">

            <div class="form-group">
                <label for="name">Imię:</label>
                <?php echo "<input type='text' class='form-control' id='name' name='imie' placeholder='".$imie."' required>"?>
            </div>
            <div class="form-group">
                <label for="name">Nazwisko:</label>
                <?php echo "<input type='text' class='form-control' id='name' name='naz'placeholder='".$naz."' required>"?>
            </div>
            <div class="form-group">
                <label for="password">email:</label>
                <?php echo "<input type='email' class='form-control' id='name' name='mail'placeholder='".$mail."' required>"?>
            </div>
            <div class="form-group">
                <label for="password">Login</label>
                <?php echo "<input type='text' class='form-control' id='name' name='tel' placeholder='".$tel."' limit = 9 required>"?>
            </div>
            <div class="form-group">
                <label for="password">Login</label>
                <?php echo "<input type='text' class='form-control' id='name' name='username'placeholder='".$login."' required>"?>
            </div>
            <div class="form-group">
                <label for="confirm_password">hasło:</label>
                <?php echo "<input type='password' class='form-control' id='name' name='password' required>"?>
            </div>
            <div class="form-group">
            <label for="confirm_password">powtóż hasło:</label>
                <?php echo "<input type='password' class='form-control' id='name' name='pass_check' required>"?>
            </div>
            <div class="form-group form-check">
            </div>
            <button type="submit">Zapisz zmiany</button><a id="input" style="background-color: red;float: right;" href="acc_del.php">usuń konto</a>
        </form>

    </div>
</body>
<footer>
    <a href="https://pyoterinc.glitch.me">2024 Pyoter inc.© Wszystkie prawa zastrzeżone.</a>
  </footer>
</html>