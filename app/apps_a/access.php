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
  if ($typ != 'admin'){
    header('location: https://pyoterinc.glitch.me/');
  }
}
else{
    header('location: https://pyoterinc.glitch.me/login1.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta name="google-signin-client_id" content="194359456742-i32eu4e5g6557jr95gbjtkq9a0tn08tm.apps.googleusercontent.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
      <link rel="icon" type="image/x-icon" href="https://cdn.glitch.global/13781469-95d2-4a60-8f7f-5a9d063ac413/logo.png?v=1727452778264" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <title>odblokuj swój magazyn</title>
    <link rel="stylesheet" href="lock.css">
  
</head>
<body>
<header>
    <div class="action">
        <div class="profile" onclick="menuToggle();">
        <button class="profile" role="button"><span class="text"><?php echo $imie; ?></span></button>
        </div>

        <div class="menu">
            <h3>
            nazwa konta: <?php echo $login; ?>
                <div>
                    typ konta:<?php echo $typ; ?>
                </div>
            </h3>
            <ul>
                <li>
                <span class="material-icons icons-size">home</span>
                    <a href="https://pyoterinc.glitch.me/app/app_a.php'">menu główne</a>
                </li>
                <li>
                    <span class="material-icons icons-size">manage_accounts</span>
                    <a href="apps_a/acc_conf.php">ustawienia konta</a>
                </li>
                                            <li>
                    <span class="material-icons icons-size">checklist</span>
                    <a href="apps_a/oceny.php">stan magazynów</a>
                </li>
                              <li>
                    <span class="material-icons icons-size">today</span>
                    <a href="apps_a/plan.php">przyjęcia i wydania</a>
                </li>
                              <li>
                    <span class="material-icons icons-size">mail</span>
                    <a href="apps_a/w_o.php">sprawdź koszty</a>
                </li>
                              <li>
                    <span class="material-icons icons-size">book</span>
                    <a href="apps_a/p_d.php">zobacz zlecenia</a>
                </li>
                              <li>
                    <span class="material-icons icons-size">lock</span>
                    <a href="apps_a/lock.php">odblokuj magazyn</a>
                <li>
                    <span class="material-icons icons-size">logout</span>
                    <a href="logout.php'" class="wyl">wyloguj sie</a>
                </li>
            </ul>
        </div>
    </div>
    <script>
        function menuToggle(){
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
        setTimeout(function(){ window.location.href = window.location.href; }, 60000);
    </script>
      
    </header>
<div class="container" id="container">
        <div class="form-container sign-up-container">
        </div>
        <div class="form-container sign-in-container"><br><br>
                <h2>Twój kod i kod QR to:</h2>
                <p id = "kod"></p>
                <h1 id = "kod1"></h1>

        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Generator QR Debug ver</h1>
                    <p>stwóż kod QR do testów</p>
                    <input type="text" id="kod2">
                    <button class="button-82-pushable" role="button" onclick="kod()">
                <span class="button-82-shadow"></span>
                <span class="button-82-edge"></span>
                <span class="button-82-front text">
                  wygeneruj nowy kod
                </span>
</button>
                </div>
            </div>
        </div>
    </div>
    
<script>
    res= document.getElementById('kod');
    res1= document.getElementById('kod1');

function kod(){
kod1 = document.getElementById('kod2').value;
res.innerHTML = "<img src='https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=" + kod1 + "'><br>"
res1.innerHTML = kod1
}
kod();
    </script>
</body>
      <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Pyoter inc Wszystkie prawa zastrzeżone.</p>
        <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link text-white" href="#.html">Polityka prywatności</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#.html">Regulamin</a></li>
        </ul>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</html>
