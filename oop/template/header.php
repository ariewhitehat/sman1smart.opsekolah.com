<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Panel - SMAN 1 Sumber Marga Telang</title>
    <!-- Bootstrap core CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../../assets/css/dasboard.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../assets/img/favicon.ico">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">SMAN 1 SMART</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="../logout.php">Sign out</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><span data-feather="home"></span>Dashboard Panel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span data-feather="file"></span>Data Sekolah</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-people"></i> Data PTK</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-people"></i> Data PD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span data-feather="bar-chart-2"></span>SPE-TU</a>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                                Pengumuman
                            </button>
                            <div class="collapse show" id="home-collapse">
                                <ul class="btn-toggle-nav">
                                    <li><a href="index.php" class="link-dark">Lihat Data PD</a></li>
                                    <li><a href="create.php" class="link-dark">Tambah Data PD</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>