<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/x-icon" href="https://cdn.glitch.global/13781469-95d2-4a60-8f7f-5a9d063ac413/logo.png?v=1727452778264" />
    <title>Pyoterlock - Rozwiązania dla Twoich magazynów</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Własny styl CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Nagłówek -->
    <header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <img src="https://cdn.glitch.global/de09be93-5819-4b6e-bdb6-34ae9290f0fd/asdasd.png?v=1742720053426" style="height: 50px">
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link text-white" href="login1.php">zaloguj lub utwóż konto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Sekcja Hero -->
    <section id="hero" class="bg-primary text-white text-center py-5">
        <div class="container">
            <h2 class="display-4">Zarządzaj swoimi magazynami z łatwością</h2>
            <p class="lead">Nowoczesne rozwiązania w zakresie zarządzania magazynów – przechowyjemy i zabezpieczamy Twoje rzeczy.</p>
            <a href="services.html" class="btn btn-success btn-lg">Dowiedz się więcej</a>
        </div>
    </section>

    <!-- Sekcja O nas -->
    <section id="about" class="py-5 bg-light">
        <div class="container text-center">
            <h2>Kim jesteśmy?</h2>
            <p class="lead">PyoterLock to sieć samoobsługowych magazynów kontenerowych. Z powodu, że wynajem kontenerów magazynowych to tania i wygodna forma magazynowania, cieszy się ogromną popularnością. </p>
        </div>
    </section>

    <!-- Sekcja Usługi -->
    <section id="services" class="py-5">
        <div class="container text-center">
            <h2>Nasze Usługi</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ubezpieczenie Wynajmującego</h5>
                            <p class="card-text">Każdy z naszych kontenerów w ramach najmu jest objęty ubezpieczeniem OC.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Dostępność 24/7</h5>
                            <p class="card-text">Centra magazynowe Pyoterlock – Przechowalnia 24 oferują całodobowy dostęp do magazynów 7 dni w tygodniu, przez cały rok z dostępem do monitoringu i zarządzaniem wynajmu na odległość.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Elastyczne umowy najmu</h5>
                            <p class="card-text">Wychodząc na przeciw potrzebom naszych klientów przygotowaliśmy wygodne i elastyczne formy najmu naszych magazynów kontenerowych.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sekcja Formularza Kontaktowego -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Skontaktuj się z nami</h2>
            <form action="send.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Imię i nazwisko</label>
                            <input type="text" name="imie" class="form-control" id="name" placeholder="Wpisz swoje imię i nazwisko" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Wpisz swój email" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Wiadomość</label>
                    <textarea class="form-control" name="opis" id="message" rows="4" placeholder="Wpisz swoją wiadomość" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Wyślij wiadomość</button>
            </form>
        </div>
    </section>

    <!-- Stopka -->
    <footer class="bg-dark text-white text-center py-3">
        <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link text-white" href="#.html">Polityka prywatności</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#.html">Regulamin</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#.html">©2025 Pyoter inc Wszystkie prawa zastrzeżone.</a></li>

        </ul>
    </footer>

    <!-- Bootstrap JS, Popper.js, jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>

</html>
