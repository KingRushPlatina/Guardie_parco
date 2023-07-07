<?php
error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 'on');
$servername = 'localhost';
$username = 'root';
$password = 'mysql';
$dbName = 'Parchi_elouahidi';


if (session_status() != PHP_SESSION_ACTIVE) {
  session_start();
}
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  header('Location: Accedi.php');
  exit;
}

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


$sql = "SELECT * FROM Animali";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/CssTabelle.css">
  <button onclick="location.href='SitoGuardia.php'">Torna</button>
  <title>Tabella Animali</title>
</head>

<body>
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
        <th>Codice Specie</th>
      </tr>
    </thead>
    <tbody>

      <?php
      if ($result->rowCount() > 0) {
        while ($row = $result->fetch()) {
          echo "<tr><td>" . $row["codice"] . "</td><td>" . $row["descrizione"] . "</td><td>" . $row["sesso"] . "</td><td>" . $row["salute"] . "</td><td>" . $row["anzianità"] . "</td><td>" . $row["annonascita"] . "</td><td>" . $row["codiceparco"] . "</td><td>" . $row["codicespecie"] . "</td></tr>";
        }
      } else {
        echo "<tr><td colspan='8'>Nessun risultato trovato.</td></tr>";
      }
      ?>

    </tbody>
  </table>




</body>

</html>

<?php

$conn = null;
?>