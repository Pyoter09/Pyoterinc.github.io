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
    $naz = $row[5];
    $mail = $row[6]; 
    $tel = $row[7];
  }
  if ($typ == 'firma'){
    header('location: https://pyoterinc.glitch.me/app/app_f.php');
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
    <title>Document</title>
    <link rel="stylesheet" href="lock.css">
  
</head>
<body>
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
                    <h1>Zeskanuj jednorazowy kod QR</h1>
                    <p>Zeskanuj jednorazowy kod QR do odblokowania magazynu</p>
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
    function makeid(length) {
	let result = '';
	const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
	const charactersLength = characters.length;
	let counter = 0;
	while (counter < length) {
		result += characters.charAt(Math.floor(Math.random() * charactersLength));
		counter += 1;
	}
	return result;
}  
function kod(){
kod1 = makeid(6);
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
