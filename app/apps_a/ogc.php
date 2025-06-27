<?php
header('Content-Type: application/json');
$host = 'localhost';
$dbname = 'magazyn';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT * from logi_uzytkownikow;");
    $stmt->execute();

    $homework = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $homework[] = [
            'id' => $row['id'],
            'tytul' => $row['uzytkownik_id'],
            'opis' => $row['akcja'],
            'data_wpisu' => $row['data_czas'],
        ];
    }

    echo json_encode($homework);

} catch (PDOException $e) {
    echo json_encode(['error' => 'Błąd połączenia z bazą danych: ' . $e->getMessage()]);
}
?>
