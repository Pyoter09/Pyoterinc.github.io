
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta name="google-signin-client_id" content="194359456742-i32eu4e5g6557jr95gbjtkq9a0tn08tm.apps.googleusercontent.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
      <link rel="icon" type="image/x-icon" href="https://cdn.glitch.global/13781469-95d2-4a60-8f7f-5a9d063ac413/logo.png?v=1727452778264" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>zaloguj się lub stwórz konto</title>
    <link rel="stylesheet" href="css/login.css">
  
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="cre_acc.php" method="post">
                                <h1>stwórz konto</h1>
                <div class="social-container">
                  <div class="g-signin2" data-onsuccess="onSignIn"></div>
                </div>
                <span>albo użyj swojego emaila żeby się zalogować</span>
                <input type="text" name="username" placeholder="nazwa urzytkownika"/>
                <input type="password" name="haslo" placeholder="hasło" />
                <input type="password" name="haslo1" placeholder="powtórz hasło" />
              <div class="i-captcha"></div><br>
                <button class="button-82-pushable" role="button" type="submit" name="">
                <span class="button-82-shadow"></span>
                <span class="button-82-edge"></span>
                <span class="button-82-front text">
                 zarejestruj się
                </span>
</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="login.php" method="post">
                <h1>zaloguj się</h1>
                <div class="social-container">
                    <div class="g-signin2" data-onsuccess="onSignIn"></div>
                </div>
                <span>albo użyj swojego konta</span>
                <input type="text" name="email" placeholder="Email lub nazwa użytkownika" />
                <input type="password" name="pass" placeholder="hasło" />
                <a href="#">Zapomniałeś hasła?</a>
              <div class="i-captcha"></div><br>
                <button class="button-82-pushable" role="button">
                <span class="button-82-shadow"></span>
                <span class="button-82-edge"></span>
                <span class="button-82-front text">
                  zaloguj się
                </span>
</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Masz już konto?</h1>
                    <p>zaloguj się i ciesz się z naszych produktów</p>
                    <button class="ghost" id="signIn">Logowanie</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Nie masz konta?</h1>
                    <p>zarejestruj się za darmo już dziś!</p>
                    <button class="ghost" id="signUp">Rejestracja</button>
                </div>
            </div>
        </div>
    </div>
    
    <script src="login.js"></script>
</body>
      <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Pyoter inc Wszystkie prawa zastrzeżone.</p>
        <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link text-white" href="#.html">Polityka prywatności</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#.html">Regulamin</a></li>
        </ul>
    </footer>
  <script>
  function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}</script>
  <script src="captcha.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</html>
<?php 
$error == 0;
$error = $_COOKIE['error'];
if ($error == 1){
  echo "<script>window.alert('hasła nie są takie same');</script>";
  setcookie("error", "", time() - 3600);
}
elseif ($error == 2){
  echo "<script>window.alert('taki użytkownik już istnieje');</script>";
  setcookie("error", "", time() - 3600);
}
elseif ($error == 3){
  echo "<script>window.alert('złe hasło bądź nazwa użytkownika');</script>";
  setcookie("error", "", time() - 3600);
}
?>