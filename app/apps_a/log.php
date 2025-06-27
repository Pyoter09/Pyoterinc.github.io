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
}
  ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logi systemowe</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   <link rel="icon" type="image/x-icon" href="https://cdn.glitch.global/13781469-95d2-4a60-8f7f-5a9d063ac413/logo.png?v=1727452778264" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="og.css">

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
    <h2 class="text-center">Logi systemowe</h2>
    
    <table class="table table-bordered mt-4">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>ID użytkownika</th>
                <th>akcja</th>
                <th>Data i czas</th>
            </tr>
        </thead>
        <tbody id="homework-list">
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajax({
            url: 'ogc.php',
            method: 'GET',
            success: function(data) {
                let homeworkList = '';
                data.forEach(function(homework) {
                    homeworkList += `<tr>
                        <td>${homework.id}</td>
                        <td>${homework.tytul}</td>
                        <td>${homework.opis}</td>
                        <td>${homework.data_wpisu}</td>
                    </tr>`;
                });
                $('#homework-list').html(homeworkList);
            },
            error: function(error) {
                console.log('Błąd:', error);
            }
        });
    });
</script>

</body>
<footer>
    <a href="https://pyoterinc.glitch.me">2024 Pyoter inc.© Wszystkie prawa zastrzeżone.</a>
  </footer>
</html>