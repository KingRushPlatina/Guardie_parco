<?php
error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 'on');

$servername = 'localhost';
$username = 'root';
$password = 'mysql';
$dbName = 'Parchi_elouahidi';
// Controllo se la sessione è attiva
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: Accedi.php');
    exit;
}
// Connessione al database usando PDO
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Esecuzione della query per selezionare tutti i dati dalla tabella Piante
$sql = "SELECT * FROM Piante";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tabella Piante</title>
    <link rel="stylesheet" href="css/CssTabelle.css">
    <button onclick="location.href='SitoGuardia.php'">Torna</button>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Codice</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Stagione Fioritura</th>
                <th>Codice Parco</th>
                <th>Codice Specie Pianta</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Ciclo sui risultati della query e stampo i dati nella tabella HTML
            if ($result->rowCount() > 0) {
                foreach ($result as $row) {
                    echo "<tr><td>" . $row["codice"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["categoria"] . "</td><td>" . $row["stagionefioritura"] . "</td><td>" . $row["codiceparco"] . "</td><td>" . $row["codicespeciepianta"] . "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Nessun risultato trovato.</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <button onclick="location.href='SitoGuardia.php'">Torna</button>

</body>

</html>

<?php
// Chiusura della connessione
$conn = null;
?>