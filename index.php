<?php
session_start();
session_destroy();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <!-- Icone -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <!-- slider/carousel -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!--  Bootstrap  -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--  Css personalizzato -->
    <link href="css/style.css" rel="stylesheet">
</head>


<body>

    <div class="container-fluid border-bottom d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1"> CITES Milano</h6>
                        <span>Via Vincenzo Monti 58 20145 </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">email</h6>
                        <span>CITES@forestale.carabinieri.it </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">numero</h6>
                        <span>041.5416397</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="index.php" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-dark">Cites carabinieri milano</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link active">-home</a>
                <a href="Registrazione.php" class="nav-item nav-link">-Registrazione</a>
                <div class="nav-item dropdown">

                </div>
                <a href="accedi.php" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Accedi <i
                        class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </nav>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="img/iStock-1224081616.jpg"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="border-start border-5 border-primary ps-5 mb-5">
                        <h6 class="text-primary text-uppercase">Lavora con noi</h6>
                        <h1 class="display-5 text-uppercase mb-0">nostro dovere proteggere la vita selvatica</h1>
                    </div>

                    <div class="bg-light p-4">
                        <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100 active" id="pills-1-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab"
                                    aria-controls="pills-1" aria-selected="true">La nostra missione</button>
                            </li>
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100" id="pills-2-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                    aria-selected="false">Come lavorare con noi</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel"
                                aria-labelledby="pills-1-tab">
                                <p class="mb-0">La nostra organizzazione ha come missione la salvaguardia degli animali
                                    del bosco. Siamo impegnati nella loro protezione, nella prevenzione di atti di
                                    bracconaggio e nella creazione di nuovi spazi naturali in cui possano vivere in
                                    sicurezza. Ci adoperiamo inoltre per educare la comunità locale alla conservazione
                                    dell'ambiente e alla coesistenza pacifica con la fauna selvatica. Il nostro
                                    obiettivo è quello di preservare il delicato equilibrio degli ecosistemi forestali,
                                    affinché le generazioni future possano continuare ad ammirare la bellezza della
                                    natura e la ricchezza della biodiversità.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                <p class="mb-0">Lavorare come guardia forestale italiana significa svolgere un ruolo
                                    chiave nella protezione dell'ambiente e della natura all'interno della città. La
                                    guardia forestale è responsabile della gestione delle aree verdi e dei parchi,
                                    dell'educazione ambientale e della prevenzione e lotta agli incendi boschivi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>


    <script src="js/main.js"></script>
</body>

</html>