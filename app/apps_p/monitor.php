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
                    <a href="https://pyoterinc.glitch.me/app/logout.php">menu główne</a>
                </li>
                <li>
                    <span class="material-icons icons-size">manage_accounts</span>
                    <a href="acc_conf.php">ustawienia konta</a>
                </li>
                                            <li>
                    <span class="material-icons icons-size">checklist</span>
                    <a href="monitor.php">stan magazynów</a>
                </li>
                              <li>
                    <span class="material-icons icons-size">today</span>
                    <a href="monitor.php">przyjęcia i wydania</a>
                </li>
                              <li>
                    <span class="material-icons icons-size">mail</span>
                    <a href="monitor.php">sprawdź koszty</a>
                </li>
                              <li>
                    <span class="material-icons icons-size">book</span>
                    <a href="monitor.php">zobacz zlecenia</a>
                </li>
                              <li>
                    <span class="material-icons icons-size">lock</span>
                    <a href="lock.php">odblokuj magazyn</a>
                <li>
                    <span class="material-icons icons-size">logout</span>
                    <a href="https://pyoterinc.glitch.me/app/logout.php" class="wyl">wyloguj sie</a>
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
<h1 class="heading" data-target-resolver></h1>
      </body>
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
'opcja w tym momencie nie dostępna'
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
