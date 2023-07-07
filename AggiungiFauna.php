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
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) { // se la sessione è gia attiva
  header('Location: Accedi.php');
  exit;
}

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


if (isset($_POST['descrizione']) && isset($_POST['sesso']) && isset($_POST['salute']) && isset($_POST['anzianita']) && isset($_POST['annonascita']) && isset($_POST['codiceparco']) && isset($_POST['codicespecie'])) {
  $descrizione = $_POST['descrizione'];
  $sesso = $_POST['sesso'];
  $salute = $_POST['salute'];
  $anzianita = $_POST['anzianita'];
  $annonascita = $_POST['annonascita'];
  $codiceparco = $_POST['codiceparco'];
  $codicespecie = $_POST['codicespecie'];

  $sql = "INSERT INTO Animali (descrizione, sesso, salute, anzianità, annonascita, codiceparco, codicespecie) VALUES (:descrizione, :sesso, :salute, :anzianita, :annonascita, :codiceparco, :codicespecie)";
  $stmt = $conn->prepare($sql);
  $stmt->execute(['descrizione' => $descrizione, 'sesso' => $sesso, 'salute' => $salute, 'anzianita' => $anzianita, 'annonascita' => $annonascita, 'codiceparco' => $codiceparco, 'codicespecie' => $codicespecie]);


  header("Location: VisuallizaFauna.php"); // rinderizzo alla pagina visualliza 
  exit;
}

$conn = null;
?>