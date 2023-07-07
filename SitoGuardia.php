<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if ($_SESSION['logged_in'] == false) {

    error_reporting(E_ALL ^ E_NOTICE);
    ini_set('display_errors', 'on');
    $servername = 'localhost';
    $username = 'root';
    $password = 'mysql';
    $dbName = 'Parchi_elouahidi';

    try {

    } catch (PDOException $e) {
        echo ("Connection failed: " . $e->getMessage());
    }

    if ($_POST["codiceParco"] == null) {
        //registrazione

        $email = $_POST['email'];
        $password = $_POST['password'];
        $servername = 'localhost';
        $username = 'root';
        $password_db = 'mysql';
        $dbName = 'Parchi_elouahidi';
        $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password_db);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM Guardie WHERE gmail=:email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $guardie = $stmt->fetch();
        if ($guardie && password_verify($password, $guardie['password'])) {
            $_SESSION['login_user'] = $user['gmail']; // Inizia la sessione e salva l'email utente
            $_SESSION['logged_in'] = true;


        } else {
            session_start();

            $_SESSION['message'] = "Email o password non validi"; //creo una sessione che mi trasporta un messaggio di errore login alla pagina accedi.php
            header("location: Accedi.php");
            $error = "Email o password non validi";
        }
    } else {
        $id = $_POST["id"];
        $gm = $_POST["email"];
        $pass = $_POST["password"];
        $codice = $_POST["codiceParco"];
        echo "Registrazione";
        $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO guardie(id,gmail,password,codiceparco) values(:id, :gmail,:password,:codiceparco)";
        $sth = $conn->prepare($sql);
        $hash = password_hash($pass, PASSWORD_BCRYPT);
        $sth->execute(array(':id' => $id, ':gmail' => $gm, ':password' => $hash, ':codiceparco' => $codice));
        session_start();
        $_SESSION['message'] = "Ti sei Registrato corettamente !! ora puoi Accedere"; //creo una sessione che mi trasporta un messaggio di errore login alla pagina accedi.php
        header("location: Accedi.php");
    }

} else {
    //SESSIONE GIA ESISTENTE 
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- inizio Navbar  -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="logout.php" class="navbar-brand ms-lg-5">
            <h2 class="m-0 text-uppercase text-dark"> <i class="bi bi-credit-card-2-back-fill"></i> guardia parco</h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="VisuallizaFlora.php" class="nav-item nav-link">-VisuallzaFlora</a>
                <a href="VisuallizaFauna.php" class="nav-item nav-link">-VisuallizaFauna</a>
                <a href="RicercaFlora.php" class="nav-item nav-link">-RicercaFlora</a>
                <a href="RicercaFauna.php" class="nav-item nav-link">-RicercaFauna</a>
                <a href="html/AggiungiFauna.html" class="nav-item nav-link">-AggiungiFauna</a>
                <a href="html/AggiungiFlora.html" class="nav-item nav-link">-AggiungiFlora</a>

                <a href="logout.php" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">esci <i
                        class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </nav>




    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>