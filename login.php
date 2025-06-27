
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
    <link rel="stylesheet" href="css/login.css">
  
</head>
<body>
  <?php
  session_start();
  $conn = mysqli_connect("localhost","root","","magazyn");
  $pass = $_POST['pass'];
  $email = $_POST['email'];
  $kw="SELECT id , haslo_hash from uzytkownicy where email like '$email' or nazwa_uzytkownika like '$email';";

  $con1 = mysqli_query($conn,$kw);
  while($row = mysqli_fetch_row($con1)) {
    $pass_check = $row[1];
    $id = $row[0];
  }
      if (password_verify($pass,$pass_check)){
        $_SESSION['id'] = $id;
        setcookie("error", "", time() + (86400 * 30), "/");
        header('location: app/connect.php');
        exit;
      }
      else{
        setcookie("error", 3, time() + (86400 * 30), "/");
        header('location: login1.php');
        exit;
      }

  ?>
<h1 class="heading" data-target-resolver></h1>

<script>
  const resolver = {
  resolve: function resolve(options, callback) {
    const resolveString = options.resolveString || options.element.getAttribute('data-target-resolver');
    const combinedOptions = Object.assign({}, options, {resolveString: resolveString});
    
    function getRandomInteger(min, max) {
      return Math.floor(Math.random() * (max - min + 1)) + min;
    };
    
    function randomCharacter(characters) {
      return characters[getRandomInteger(0, characters.length - 1)];
    };
    
    function doRandomiserEffect(options, callback) {
      const characters = options.characters;
      const timeout = options.timeout;
      const element = options.element;
      const partialString = options.partialString;

      let iterations = options.iterations;

      setTimeout(() => {
        if (iterations >= 0) {
          const nextOptions = Object.assign({}, options, {iterations: iterations - 1});

          // Ensures partialString without the random character as the final state.
          if (iterations === 0) {
            element.textContent = partialString;
          } else {
            // Replaces the last character of partialString with a random character
            element.textContent = partialString.substring(0, partialString.length - 1) + randomCharacter(characters);
          }

          doRandomiserEffect(nextOptions, callback)
        } else if (typeof callback === "function") {
          callback(); 
        }
      }, options.timeout);
    };
    
    function doResolverEffect(options, callback) {
      const resolveString = options.resolveString;
      const characters = options.characters;
      const offset = options.offset;
      const partialString = resolveString.substring(0, offset);
      const combinedOptions = Object.assign({}, options, {partialString: partialString});

      doRandomiserEffect(combinedOptions, () => {
        const nextOptions = Object.assign({}, options, {offset: offset + 1});

        if (offset <= resolveString.length) {
          doResolverEffect(nextOptions, callback);
        } else if (typeof callback === "function") {
          callback();
        }
      });
    };

    doResolverEffect(combinedOptions, callback);
  } 
}

const strings = [
  'Ładowanie.',
  'Ładowanie..',
  'Ładowanie...',
  'Ładowanie....',
  'Ładowanie.....'
];

let counter = 0;

const options = {
  // Initial position
  offset: 0,
  // Timeout between each random character
  timeout: 5,
  // Number of random characters to show
  iterations: 7,
  // Random characters to pick from
  characters: ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'x', 'y', 'x', '#', '%', '&', '-', '+', '_', '?', '/', '\\', '='],
  // String to resolve
  resolveString: strings[counter],
  // The element
  element: document.querySelector('[data-target-resolver]')
}

// Callback function when resolve completes
function callback() {
  setTimeout(() => {
    counter ++;
    
    if (counter >= strings.length) {
      counter = 0;
    }
    
    let nextOptions = Object.assign({}, options, {resolveString: strings[counter]});
    resolver.resolve(nextOptions, callback);
  }, 1300);
}

resolver.resolve(options, callback);
    </script>
    
    <script src="login.js"></script>

</body>
      <footer class="bg-dark text-white text-center py-3">
        <p>© 2025 Pyoter inc Wszystkie prawa zastrzeżone.</p>
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
?>