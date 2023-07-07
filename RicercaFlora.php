<?php

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


if (isset($_GET['search'])) {
  $s = $_GET['search'];
  $sql = "SELECT * FROM Piante WHERE nome LIKE :s";
  $stmt = $conn->prepare($sql);
  $stmt->execute(['s' => '%' . $s . '%']);
} else {
  $sql = "SELECT * FROM Piante";
  $stmt = $conn->query($sql);
}

$conn = null;
?>

<!DOCTYPE html>
<html>

<head>
  <title>Elenco Piante</title>
  <link rel="stylesheet" href="css/CssTabelle.css">
</head>

<body>
  <button onclick="location.href='SitoGuardia.php'">Torna</button>
  <form method="get">
    <input type="text" name="search">
    <button type="submit">Cerca</button>
    <h4>Cerca in base al nome della pianta</h4>
  </form>
  <table>
    <thead>
      <tr>
        <th>Codice</th>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Stagione di fioritura</th>
        <th>Codice Parco</th>
        <th>Codice Specie Pianta</th>
      </tr>
    </thead>
    <tbody>
      <?php

      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>" . $row["codice"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["categoria"] . "</td><td>" . $row["stagionefioritura"] . "</td><td>" . $row["codiceparco"] . "</td><td>" . $row["codicespeciepianta"] . "</td></tr>";
      }
      ?>
    </tbody>
  </table>

</body>

</html>