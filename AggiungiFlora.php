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
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) { // se la sessione e gia attiva
  header('Location: Accedi.php');
  exit;
}

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

if (isset($_POST['nome']) && isset($_POST['categoria']) && isset($_POST['stagionefioritura']) && isset($_POST['codiceparco']) && isset($_POST['codicespeciepianta'])) {
  $nome = $_POST['nome'];
  $categoria = $_POST['categoria'];
  $stagionefioritura = $_POST['stagionefioritura'];
  $codiceparco = $_POST['codiceparco'];
  $codicespeciepianta = $_POST['codicespeciepianta'];

  $sql = "INSERT INTO Piante (nome, categoria, stagionefioritura, codiceparco, codicespeciepianta) VALUES (:nome, :categoria, :stagionefioritura, :codiceparco, :codicespeciepianta)";
  $stmt = $conn->prepare($sql);
  $stmt->execute(['nome' => $nome, 'categoria' => $categoria, 'stagionefioritura' => $stagionefioritura, 'codiceparco' => $codiceparco, 'codicespeciepianta' => $codicespeciepianta]);

  // Redirect
  header("Location: VisuallizaFlora.php");
  exit;
}

$conn = null;
?>