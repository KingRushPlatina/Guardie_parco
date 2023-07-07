<head>
    <meta charset="utf-8">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Barra informazioni "la piu alta" -->
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



    <!-- inizio Navbar  -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="index.php" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-dark">Nucleo CITES Milano</h1>
        </a>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link ">Home</a>
                <a href="Registrazione.php" class="nav-item nav-link active">-Registrati</a>
                <div class="nav-item dropdown">

                </div>
                <a href="accedi.php" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Accedi <i
                        class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </nav>




    <!-- Registrazione form -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Registrati</h6>

            </div>
            <div class="row g-5">
                <div class="col-lg-7">
                    <form method="post" action="SitoGuardia.php">
                        <div class="row g-3">

                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0 px-4" placeholder=" id"
                                    style="height: 55px;" name="id" required>
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control bg-light border-0 px-4" placeholder="gmail"
                                    style="height: 55px;" name="email" required>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0 px-4"
                                    placeholder="Codice_parco" style="height: 55px;" name="codiceParco" required>
                            </div>
                            <div class="col-12">
                                <input type="password" class="form-control bg-light border-0 px-4"
                                    placeholder="password" style="height: 55px;" name="password" required>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Accedi</button>
                            </div>
                        </div>
                    </form>
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