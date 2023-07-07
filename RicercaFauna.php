<?php
// Configurazione della connessione al database
$servername = 'localhost';
$username = 'root';
$password = 'mysql';
$dbName = 'Parchi_elouahidi';

// attiva?
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


if (isset($_GET['search'])) {
  $s = $_GET['search'];
  $sql = "SELECT * FROM Animali WHERE codice = :s";
  $stmt = $conn->prepare($sql); //  query per selezionare l'animale 
  $stmt->execute(['s' => $s]);
} else {
  $sql = "SELECT * FROM Animali";
  $stmt = $conn->query($sql);
}


$conn = null;
?>

<!DOCTYPE html>
<html>

<head>
  <title>Elenco Animali</title>
  <link rel="stylesheet" href="css/CssTabelle.css">

</head>

<body>
  <button onclick="location.href='SitoGuardia.php'">Torna Indietro</button>
  <form method="get">
    <input type="text" name="search">
    <button type="submit">Cerca</button>
    <h4>Cerca in base al codice animale</h4>
  </form>
  <table>
    <thead>
      <tr>
        <th>Codice</th>
        <th>Descrizione</th>
        <th>Sesso</th>
        <th>Salute</th>
        <th>Anzianità</th>
        <th>Anno di nascita</th>
        <th>Codice Parco</th>
        <th>Codice Specie Animale</th>
      </tr>
    </thead>
    <tbody>
      <?php
      //ciclo sulla sulla tabella sql
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>" . $row["codice"] . "</td><td>" . $row["descrizione"] . "</td><td>" . $row["sesso"] . "</td><td>" . $row["salute"] . "</td><td>" . $row["anzianità"] . "</td><td>" . $row["annonascita"] . "</td><td>" . $row["codiceparco"] . "</td><td>" . $row["codicespecie"] . "</td></tr>";
      }
      ?>
    </tbody>
  </table>

</body>

</html>