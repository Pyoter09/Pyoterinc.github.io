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
  if ($typ == 'firma'){
    header('location: app_f.php');
  }
}
else{
    header('location: https://pyoterinc.glitch.me/login1.php');
  }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta http-equiv="refresh" content="120" >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Główny - Pyoterlock</title>
    <link rel="icon" type="image/x-icon" href="https://cdn.glitch.global/13781469-95d2-4a60-8f7f-5a9d063ac413/logo.png?v=1727452778264" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

</head>
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
                    <a href="#">menu główne</a>
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
                    <a href="logout.php" class="wyl">wyloguj sie</a>
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


<body>


    <div class="container mt-5">
    <div class="hero-section d-flex align-items-center">
        <div class="text-center">
            <h1 class="display-4">Witaj, <?php echo $imie;?>!</h1>
            <p class="lead">Co byś chciał/a dzisiaj zrobić?</p>

        <div class="row">
            <div class="col-md-4">
                <div class="card text-center p-3">
                    <img src="https://cdn.glitch.global/de09be93-5819-4b6e-bdb6-34ae9290f0fd/oferta-stan-magazynowy-duze.jpg?v=1742718167266" class="card-img-top" alt="Oceny">
                    <div class="card-body">
                        <h5 class="card-title">Zarządzanie stanem magazynowym</h5>
                        <p class="card-text">Przegląd ilości towarów w magazynie. Automatyczne aktualizowanie stanów magazynowych.</p>
                        <a href="apps_u/" class="btn btn-primary">Zobacz stan magazynów</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center p-3">
                    <img src="https://cdn.glitch.global/de09be93-5819-4b6e-bdb6-34ae9290f0fd/7_funkcji_systemu_WMS_kto%CC%81re_pomagaja%CC%A8_rozwia%CC%A8zac%CC%81_problemy_z_magazynem_w_branz%CC%87y_spoz%CC%87ywczej.jpg?v=1742718764507" class="card-img-top" alt="Plan Lekcji">
                    <div class="card-body">
                        <h5 class="card-title">Przyjęcia i wydania towarów</h5>
                        <p class="card-text">Rejestrowanie dostaw od dostawców.Wystawianie dokumentów PZ (przyjęcie zewnętrzne) i WZ (wydanie zewnętrzne)</p>
                        <a href="apps_u/" class="btn btn-primary">Zobacz przyjęcia i wydania</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center p-3">
                    <img src="https://cdn.glitch.global/6d057ed2-39d5-4f14-9294-514404f10aa3/frekwencja.png?v=1729581040548" class="card-img-top" alt="Wiadomości">
                    <div class="card-body">
                        <h5 class="card-title">Zerknij na stan wynajętych magazynów</h5>
                        <p class="card-text">sprawdź koszty wynajmu i zarządzaj wynajętymi magazynami.</p>
                        <a href="apps_u/" class="btn btn-primary">sprawdź koszty</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card text-center p-3">
                    <img src="https://cdn.glitch.global/de09be93-5819-4b6e-bdb6-34ae9290f0fd/63a99832ddf2277ef743f5e4_Last-Mile-Delivery.webp?v=1742753775790" class="card-img-top" alt="Zadania domowe">
                    <div class="card-body">
                        <h5 class="card-title">zobacz lub dodaj zlecenia</h5>
                        <p class="card-text">sprawdź dane dostaw lub wysyłek z lub do magazynu</p>
                        <a href="apps_u/" class="btn btn-primary">Zobacz zlecenia</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center p-3">
                    <img src="https://cdn.glitch.global/de09be93-5819-4b6e-bdb6-34ae9290f0fd/p099dmrp.png?v=1742753645092" class="card-img-top" alt="Frekwencja">
                    <div class="card-body">
                        <h5 class="card-title">Zmień ustawienia konta</h5>
                        <p class="card-text">Sprawdź swoją frekwencję na lekcjach.</p>
                        <a href="#" class="btn btn-primary">zmień ustawienia</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center p-3">
                    <img src="https://cdn.glitch.global/de09be93-5819-4b6e-bdb6-34ae9290f0fd/blog-qr-codes.png?v=1742719199576" class="card-img-top" alt="Wiadomości od szkoły">
                    <div class="card-body">
                        <h5 class="card-title">Odblokuj swój magazyn</h5>
                        <p class="card-text">Zeskanuj kod QR lub wpisz jednorazowy kod dostępu żeby odblokować magazyn</p>
                        <a href="apps_f/lock.php" class="btn btn-primary">odblokuj magazyn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
        console.log("Panel główny załadowany.");
        });
        </script>
         <footer>
        <a href="https://pyoterinc.glitch.me">2024 Pyoter inc.© Wszystkie prawa zastrzeżone.</a>
    </footer>
</body>
</html>