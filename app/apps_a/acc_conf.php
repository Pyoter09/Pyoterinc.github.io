
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>zarządzaj użytkownikami</title>
    <link rel="icon" type="image/x-icon" href="https://cdn.glitch.global/13781469-95d2-4a60-8f7f-5a9d063ac413/logo.png?v=1727452778264" />
    <link rel="stylesheet" href="acc_conf.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
  </head>
  <body>
    <header>
    <div class="action">
        <div class="profile" onclick="menuToggle();">
        <button class="profile" role="button"><span class="text"></span></button>
        </div>

        <div class="menu">
            <h3>
        
                <div>
                    typ konta:
                </div>
            </h3>
            <ul>
       <li>
                <span class="material-icons icons-size">home</span>
                    <a href="https://dziennikpinc.glitch.me/app/app_u.php">menu główne</a>
                </li>
                <li>
                    <span class="material-icons icons-size">manage_accounts</span>
                    <a href="acc_conf.php">ustawienia konta</a>
                </li>
                                            <li>
                    <span class="material-icons icons-size">grade</span>
                    <a href="oceny.php">oceny</a>
                </li>
                              <li>
                    <span class="material-icons icons-size">today</span>
                    <a href="plan.php">plan lekcji</a>
                </li>
                              <li>
                    <span class="material-icons icons-size">mail</span>
                    <a href="w_o.php">wiadomości</a>
                </li>
                              <li>
                    <span class="material-icons icons-size">book</span>
                    <a href="p_d.php">zadania domowe</a>
                </li>
                              <li>
                    <span class="material-icons icons-size">today</span>
                    <a href="#">frekfencja</a>
                </li>
                                                                                 <li>
                    <span class="material-icons icons-size">campaign</span>
                    <a href="og.php">ogloszenia</a>
                </li>
                <li>
                    <span class="material-icons icons-size">logout</span>
                    <a href="https://dziennikpinc.glitch.me" class="wyl">wyloguj sie</a>
                </li>
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
    <h2>Zarządzanie kontami</h2>
    <form action="acc_conf.php" method="POST">
        <div class="mb-3">
            <label for="receiver_id" class="form-label">konto:</label>
            <select class="form-control" id="r_id" name="r_id" required>
                <?php
                $conn = mysqli_connect("localhost","root","","magazyn");
                $kw="SELECT * from uzytkownicy";
                $con1 = $conn->query($kw);
                if ($con1->num_rows > 0) {
                    while($row = $con1->fetch_assoc()) {
                        echo "<option value='".$row['id']."'>".$row['nazwa_uzytkownika']."</option>";
                    }
                }
?>
</select>
<input type="submit" value="zmień dane">
            </form>
            <form action="change.php" method="POST">
<?php
            if (!empty($_POST['r_id'])){
                $id1 = $_POST['r_id'];
                $kw1="SELECT * from uzytkownicy where id = $id1";
                $con1 = $conn->query($kw1);
                if ($con1->num_rows > 0) {
                    while($row = $con1->fetch_assoc()) {
                        $imie = $row['imie'];
                        $naz = $row['nazwisko'];
                        $mail = $row['email'];
                        $tel = $row['telefon'];
                        $login = $row['nazwa_uzytkownika'];
                    }
                }
            }
        echo   " 
        </div>
        <h2 class='text-center'>Ustawienia konta</h2>
        <form action='set.php' method='POST' class='mt-4'>

            <div class='form-group'>
                <label for='name'>Imię lub nazwa firmy:</label>
                <input type='text' class='form-control' id='name' name='imie' placeholder='".$imie."' required>
            </div>
            <div class='form-group'>
                <label for='name'>Nazwisko:</label>
                <input type='text' class='form-control' id='name' name='naz'placeholder='".$naz."' required>
            </div>
            <div class='form-group'>
                <label for='password'>email:</label>
                <input type='email' class='form-control' id='name' name='mail'placeholder='".$mail."' required>
            </div>
            <div class='form-group'>
                <label for='password'>Login</label>
                <input type='text' class='form-control' id='name' name='tel' placeholder='".$tel."' limit = 9 required>
            </div>
            <div class='form-group'>
                <label for='password'>Login</label>
                <input type='text' class='form-control' id='name' name='username'placeholder='".$login."' required>
            </div>
            <div class='form-group'>
                <label for='confirm_password'>hasło:</label>
                <input type='password' class='form-control' id='name' name='password' required>
            </div>
            <div class='form-group'>
            <label for='confirm_password'>powtóż hasło:</label>
                <input type='password' class='form-control' id='name' name='pass_check' required>
            </div>
            <div class='form-group form-check'>
            </div>
            <button type='submit'>Zapisz zmiany</button><a id='input' style='background-color: red;float: right;' href='acc_del.php'>usuń konto</a>
        </form>
        ";?>

</body>
<footer>
    <a href="https://pyoterinc.glitch.me">2024 Pyoter inc.© Wszystkie prawa zastrzeżone.</a>
  </footer>
</html>