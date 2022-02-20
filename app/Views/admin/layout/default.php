<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>P2ACEH - Dashboard</title>

    <!-- Favicons -->
    <link href="<?=base_url()?>/template/admin/img/favicon.png" rel="icon">
    <link href="<?=base_url()?>/template/admin/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Custom fonts for this template-->
    <link href="<?=base_url()?>/template/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url()?>/template/admin/css/sb-admin-2.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.3.15/proj4.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/maps/modules/map.js"></script>
    <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/maps/modules/offline-exporting.js"></script>
    <script src="https://code.highcharts.com/mapdata/countries/us/us-all.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url()?>/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-archway"></i>
                </div>
                <div class="sidebar-brand-text mx-3">P2ACEH<sup>.com</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Layanan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Dokumentasi</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                SIGATA
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Laman</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Masuk</a>
                        <a class="collapse-item" href="register.html">Daftar</a>
                        <a class="collapse-item" href="forgot-password.html">Lupa Sandi</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="<?=base_url()?>/template/admin/img/undraw_rocket.svg"
                    alt="...">
                <p class="text-center mb-2"><strong>P2 BPN ACEH</strong></p>
                <a class="btn btn-success btn-sm" href="#">JUARA</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Cari disini"
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle"
                                            src="<?=base_url()?>/template/admin/img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle"
                                            src="<?=base_url()?>/template/admin/img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle"
                                            src="<?=base_url()?>/template/admin/img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin #1</span>
                                <img class="img-profile rounded-circle"
                                    src="<?=base_url()?>/template/admin/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?=base_url()?>/logout/" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <div class="d-flex">
                        <div class="mr-auto p-2">
                            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        </div>
                        <div class="p-2">
                            <div class="dropdown mb-4">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tahun:
                                </button>
                                <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">2022</a>
                                    <a class="dropdown-item" href="#">2021</a>
                                    <a class="dropdown-item" href="#">2021</a>
                                </div>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="dropdown mb-4">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Laporan
                                </button>
                                <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Lihat tabel data</a>
                                    <a class="dropdown-item" href="#">Unduh gambar .jpeg</a>
                                    <a class="dropdown-item" href="#">Unduh dokumen .pdf</a>
                                    <a class="dropdown-item" href="#">Unduh dokumen .xlsx</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Realisasi (Bulanan)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 40,000.000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Realisasi (Tahunan)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 215.000.000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Agenda
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Helpdesk</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Target & Realisasi Penyerapan Anggaran
                                    </h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">View fullscreen</a>
                                            <a class="dropdown-item" href="#">Print chart</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Lihat tabel data</a>
                                            <a class="dropdown-item" href="#">Unduh gambar .jpeg</a>
                                            <a class="dropdown-item" href="#">Unduh dokumen .pdf</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Unduh dokumen .xlsx</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Realisasi Anggaran Bidang 3</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">View fullscreen</a>
                                            <a class="dropdown-item" href="#">Print chart</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Lihat tabel data</a>
                                            <a class="dropdown-item" href="#">Unduh gambar .jpeg</a>
                                            <a class="dropdown-item" href="#">Unduh dokumen .pdf</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Unduh dokumen .xlsx</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Direct
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Social
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Referral
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Realisasi Fisik Capaian Kegiatan
                                        Penataan Pertanahan</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Data GTRA Provinsi <span
                                            class="float-right">20%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Data Penerima Akses Reform Agraria Daerah <span
                                            class="float-right">40%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Neraca PGT Perkebunan Provinsi Aceh <span
                                            class="float-right">60%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Data Potensi Wilayah Perbatasan Katagori III
                                        <span class="float-right">80%</span>
                                    </h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">SK Redistribusi Tanah Katagori III <span
                                            class="float-right">Tercapai!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color System -->
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-primary text-white shadow">
                                        <div class="card-body">
                                            Primary
                                            <div class="text-white-50 small">#4e73df</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            Success
                                            <div class="text-white-50 small">#1cc88a</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-info text-white shadow">
                                        <div class="card-body">
                                            Info
                                            <div class="text-white-50 small">#36b9cc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-warning text-white shadow">
                                        <div class="card-body">
                                            Warning
                                            <div class="text-white-50 small">#f6c23e</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            Danger
                                            <div class="text-white-50 small">#e74a3b</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-secondary text-white shadow">
                                        <div class="card-body">
                                            Secondary
                                            <div class="text-white-50 small">#858796</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-light text-black shadow">
                                        <div class="card-body">
                                            Light
                                            <div class="text-black-50 small">#f8f9fc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-dark text-white shadow">
                                        <div class="card-body">
                                            Dark
                                            <div class="text-white-50 small">#5a5c69</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Redistribusi Tanah Obyek
                                        Landreform</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div id="container"></div>
                                        </div>
                                    </div>
                                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Selengkapnya &rarr;</a>
                                </div>
                            </div>

                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Agenda Kegiatan</h6>
                                </div>
                                <div class="card-body">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <iframe class="embed-responsive-item" src="https://p2aceh.com/sigata/"></iframe>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>
                            <script>
                            document.write(/\d{4}/.exec(Date())[0])
                            </script>
                            &copy; P2BPNACEH.com
                        </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?=base_url()?>/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url()?>/template/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>/template/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url()?>/template/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url()?>/template/admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?=base_url()?>/template/admin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url()?>/template/admin/js/demo/chart-area-demo.js"></script>
    <script src="<?=base_url()?>/template/admin/js/demo/chart-pie-demo.js"></script>

    <!-- Highcharts -->
    <script type="text/javascript">
    // New map-pie series type that also allows lat/lon as center option.
    // Also adds a sizeFormatter option to the series, to allow dynamic sizing
    // of the pies.
    Highcharts.seriesType('mappie', 'pie', {
        center: null, // Can't be array by default anymore
        states: {
            hover: {
                halo: {
                    size: 5
                }
            }
        },
        linkedMap: null, // id of linked map
        dataLabels: {
            enabled: false
        }
    }, {
        init: function() {
            Highcharts.Series.prototype.init.apply(this, arguments);
            // Respond to zooming and dragging the base map
            Highcharts.addEvent(this.chart.mapView, 'afterSetView', () => {
                this.isDirty = true;
            });
        },
        render: function() {
            const series = this,
                chart = series.chart,
                linkedSeries = chart.get(series.options.linkedMap);
            Highcharts.seriesTypes.pie.prototype.render.apply(series, arguments);
            if (series.group && linkedSeries.is('map')) {
                series.group.add(linkedSeries.group);
            }
        },
        getCenter: function() {
            const options = this.options,
                chart = this.chart,
                slicingRoom = 2 * (options.slicedOffset || 0);
            if (!options.center) {
                options.center = [null, null]; // Do the default here instead
            }
            // Handle lat/lon support
            if (options.center.lat !== undefined) {
                const projectedPos = chart.fromLatLonToPoint(options.center),
                    pixelPos = chart.mapView.projectedUnitsToPixels(projectedPos);

                options.center = [
                    pixelPos.x - chart.plotLeft,
                    pixelPos.y - chart.plotTop
                ];
            }
            // Handle dynamic size
            if (options.sizeFormatter) {
                options.size = options.sizeFormatter.call(this);
            }
            // Call parent function
            var result = Highcharts.seriesTypes.pie.prototype.getCenter.call(this);
            // Must correct for slicing room to get exact pixel pos
            result[0] -= slicingRoom;
            result[1] -= slicingRoom;
            return result;
        },
        translate: function(p) {
            this.options.center = this.userOptions.center;
            this.center = this.getCenter();
            return Highcharts.seriesTypes.pie.prototype.translate.call(this, p);
        }
    });


    const data = [
            // state, demVotes, repVotes, libVotes, grnVotes, sumVotes, winner, offset config for pies
            ['Alabama', 729547, 1318255, 44467, 9391, 2101660, -1],
            ['Alaska', 116454, 163387, 18725, 5735, 304301, -1],
            ['Arizona', 1161167, 1252401, 106327, 34345, 2554240, -1],
            ['Arkansas', 380494, 684782, 29829, 9473, 1104578, -1],
            ['California', 8577206, 4390272, 467370, 271047, 13705895, 1, {
                lon: -1,
                drawConnector: false
            }],
            ['Colorado', 1338870, 1202484, 144121, 38437, 2723912, 1],
            ['Connecticut', 897572, 673215, 48676, 22841, 1642304, 1, {
                lat: -1.5,
                lon: 1
            }],
            ['Delaware', 235603, 185127, 14757, 6103, 441590, 1, {
                lat: -1.3,
                lon: 2
            }],
            ['District of Columbia', 282830, 12723, 4906, 4258, 304717, 1, {
                lat: -2,
                lon: 2
            }],
            ['Florida', 4504975, 4617886, 207043, 64399, 9394303, -1],
            ['Georgia', 1877963, 2089104, 125306, 0, 4092373, -1],
            ['Hawaii', 266891, 128847, 15954, 12737, 424429, 1, {
                lat: -0.5,
                lon: 0.5,
                drawConnector: false
            }],
            ['Idaho', 189765, 409055, 28331, 8496, 635647, -1],
            ['Illinois', 2977498, 2118179, 208682, 74112, 5378471, 1],
            ['Indiana', 1039126, 1557286, 133993, 7841, 2738246, -1],
            ['Iowa', 653669, 800983, 59186, 11479, 1525317, -1],
            ['Kansas', 427005, 671018, 55406, 23506, 1176935, -1],
            ['Kentucky', 628854, 1202971, 53752, 13913, 1899490, -1],
            ['Louisiana', 780154, 1178638, 37978, 14031, 2010801, -1],
            ['Maine', 352156, 332418, 37578, 13995, 736147, 1],
            ['Maryland', 1502820, 878615, 78225, 33380, 2493040, 1, {
                lon: 0.6,
                drawConnector: false
            }],
            ['Massachusetts', 1995196, 1090893, 138018, 47661, 3271768, 1, {
                lon: 3
            }],
            ['Michigan', 2268839, 2279543, 172136, 51463, 4771981, -1],
            ['Minnesota', 1367716, 1322951, 112972, 36985, 2840624, 1, {
                lon: -1,
                drawConnector: false
            }],
            ['Mississippi', 462127, 678284, 14411, 3595, 1158417, -1],
            ['Missouri', 1054889, 1585753, 96404, 25086, 2762132, -1],
            ['Montana', 174281, 273879, 28036, 7868, 484064, -1],
            ['Nebraska', 273185, 485372, 38746, 8337, 805640, -1],
            ['Nevada', 539260, 512058, 37384, 0, 1088702, 1],
            ['New Hampshire', 348526, 345790, 30694, 6465, 731475, 1],
            ['New Jersey', 1967444, 1509688, 72143, 37131, 3586406, 1, {
                lat: -1,
                lon: 1.2
            }],
            ['New Mexico', 380923, 316134, 74544, 9797, 781398, 1],
            ['New York', 4145376, 2638135, 162273, 100110, 7045894, 1],
            ['North Carolina', 2169496, 2345235, 130021, 1038, 4645790, -1],
            ['North Dakota', 93758, 216794, 21434, 378, 332364, -1],
            ['Ohio', 2320596, 2776683, 174266, 44310, 5315855, -1],
            ['Oklahoma', 420375, 949136, 83481, 0, 1452992, -1],
            ['Oregon', 991580, 774080, 93875, 49247, 1908782, 1],
            ['Pennsylvania', 2874136, 2945302, 144826, 49334, 6013598, -1],
            ['Rhode Island', 227062, 166454, 14700, 6171, 414387, 1, {
                lat: -0.7,
                lon: 1.7
            }],
            ['South Carolina', 855373, 1155389, 49204, 13034, 2073000, -1],
            ['South Dakota', 117442, 227701, 20845, 0, 365988, -1],
            ['Tennessee', 868853, 1519926, 70286, 15952, 2475017, -1],
            ['Texas', 3877868, 4685047, 283492, 71558, 8917965, -1],
            ['Utah', 222858, 375006, 39608, 7695, 645167, -1],
            ['Vermont', 178573, 95369, 10078, 6758, 290778, 1, {
                lat: 2
            }],
            ['Virginia', 1981473, 1769443, 118274, 27638, 3896828, 1],
            ['Washington', 1727840, 1210370, 160356, 57571, 3156137, 1],
            ['West Virginia', 187519, 486304, 22958, 8016, 704797, -1],
            ['Wisconsin', 1382947, 1407028, 106470, 31016, 2927461, -1],
            ['Wyoming', 55973, 174419, 13287, 2515, 246194, -1]
        ],
        demColor = 'rgba(74,131,240,0.80)',
        repColor = 'rgba(220,71,71,0.80)',
        libColor = 'rgba(240,190,50,0.80)',
        grnColor = 'rgba(90,200,90,0.80)';


    // Compute max votes to find relative sizes of bubbles
    const maxVotes = data.reduce((max, row) => Math.max(max, row[5]), 0);

    // Build the chart
    const chart = Highcharts.mapChart('container', {
        title: {
            text: 'Penataan Pertanahan BPN Aceh 2022'
        },

        chart: {
            animation: false // Disable animation, especially for zooming
        },

        colorAxis: {
            dataClasses: [{
                from: -1,
                to: 0,
                color: 'rgba(244,91,91,0.5)',
                name: 'TORA'
            }, {
                from: 0,
                to: 1,
                color: 'rgba(124,181,236,0.5)',
                name: 'IP4T'
            }, {
                from: 2,
                to: 3,
                name: 'Kombatan',
                color: libColor
            }, {
                from: 3,
                to: 4,
                name: 'Reforma',
                color: grnColor
            }]
        },

        mapNavigation: {
            enabled: true
        },
        // Limit zoom range
        yAxis: {
            minRange: 2300
        },

        tooltip: {
            useHTML: true
        },

        // Default options for the pies
        plotOptions: {
            mappie: {
                borderColor: 'rgba(255,255,255,0.4)',
                borderWidth: 1,
                tooltip: {
                    headerFormat: ''
                }
            }
        },

        series: [{
            mapData: Highcharts.maps['countries/us/us-all'],
            data: data,
            name: 'States',
            borderColor: '#FFF',
            showInLegend: false,
            joinBy: ['name', 'id'],
            keys: ['id', 'demVotes', 'repVotes', 'libVotes', 'grnVotes',
                'sumVotes', 'value', 'pieOffset'
            ],
            tooltip: {
                headerFormat: '',
                pointFormatter: function() {
                    const hoverVotes = this.hoverVotes; // Used by pie only
                    return '<b>' + this.id + ' votes</b><br/>' + [
                            ['Democrats', this.demVotes, demColor],
                            ['Republicans', this.repVotes, repColor],
                            ['Libertarians', this.libVotes, libColor],
                            ['Green', this.grnVotes, grnColor]
                        ]
                        .sort(function(a, b) {
                            return b[1] - a[1]; // Sort tooltip by most votes
                        })
                        .map(function(line) {
                            return '<span style="color:' + line[2] +
                                // Colorized bullet
                                '">\u25CF</span> ' +
                                // Party and votes
                                (line[0] === hoverVotes ? '<b>' : '') +
                                line[0] + ': ' +
                                Highcharts.numberFormat(line[1], 0) +
                                (line[0] === hoverVotes ? '</b>' : '') +
                                '<br/>';
                        })
                        .join('') +
                        '<hr/>Total: ' + Highcharts.numberFormat(this.sumVotes, 0);
                }
            }
        }, {
            name: 'Separators',
            id: 'us-all',
            type: 'mapline',
            data: Highcharts.geojson(Highcharts.maps['countries/us/us-all'], 'mapline'),
            color: '#707070',
            showInLegend: false,
            enableMouseTracking: false
        }, {
            name: 'Connectors',
            type: 'mapline',
            color: 'rgba(130, 130, 130, 0.5)',
            zIndex: 5,
            showInLegend: false,
            enableMouseTracking: false
        }]
    });

    // When clicking legend items, also toggle connectors and pies
    chart.legend.allItems.forEach(function(item) {
        const setVisible = item.setVisible;
        item.setVisible = function() {
            const legendItem = this;
            setVisible.call(legendItem);
            chart.series[0].points.forEach(function(point) {
                if (
                    chart.colorAxis[0].dataClasses[point.dataClass].name ===
                    legendItem.name
                ) {
                    // Find this state's pie and set visibility
                    Highcharts.find(chart.series, function(item) {
                        return item.name === point.id;
                    }).setVisible(legendItem.visible, false);
                    // Do the same for the connector point if it exists
                    const connector = Highcharts.find(
                        chart.series[2].points,
                        item => item.name === point.id
                    );
                    if (connector) {
                        connector.setVisible(legendItem.visible, false);
                    }
                }
            });
            chart.redraw();
        };
    });

    // Add the pies after chart load, optionally with offset and connectors
    chart.series[0].points.forEach(function(state) {
        if (!state.id) {
            return; // Skip points with no data, if any
        }

        const pieOffset = state.pieOffset || {},
            centerLat = parseFloat(state.properties.latitude),
            centerLon = parseFloat(state.properties.longitude);

        // Add the pie for this state
        chart.addSeries({
            type: 'mappie',
            name: state.id,
            linkedMap: 'us-all',
            zIndex: 6, // Keep pies above connector lines
            sizeFormatter: function() {
                const zoomFactor = chart.mapView.zoom / chart.mapView.minZoom;

                return Math.max(
                    this.chart.chartWidth / 45 * zoomFactor, // Min size
                    this.chart.chartWidth /
                    11 * zoomFactor * state.sumVotes / maxVotes
                );
            },
            tooltip: {
                // Use the state tooltip for the pies as well
                pointFormatter: function() {
                    return state.series.tooltipOptions.pointFormatter.call({
                        id: state.id,
                        hoverVotes: this.name,
                        demVotes: state.demVotes,
                        repVotes: state.repVotes,
                        libVotes: state.libVotes,
                        grnVotes: state.grnVotes,
                        sumVotes: state.sumVotes
                    });
                }
            },
            data: [{
                name: 'Democrats',
                y: state.demVotes,
                color: demColor
            }, {
                name: 'Republicans',
                y: state.repVotes,
                color: repColor
            }, {
                name: 'Libertarians',
                y: state.libVotes,
                color: libColor
            }, {
                name: 'Green',
                y: state.grnVotes,
                color: grnColor
            }],
            center: {
                lat: centerLat + (pieOffset.lat || 0),
                lon: centerLon + (pieOffset.lon || 0)
            }
        }, false);

        // Draw connector to state center if the pie has been offset
        if (pieOffset.drawConnector !== false) {
            const centerPoint = chart.fromLatLonToPoint({
                    lat: centerLat,
                    lon: centerLon
                }),
                offsetPoint = chart.fromLatLonToPoint({
                    lat: centerLat + (pieOffset.lat || 0),
                    lon: centerLon + (pieOffset.lon || 0)
                });
            chart.series[2].addPoint({
                name: state.id,
                path: 'M' + offsetPoint.x + ' ' + offsetPoint.y +
                    'L' + centerPoint.x + ' ' + centerPoint.y
            }, false);
        }
    });
    // Only redraw once all pies and connectors have been added
    chart.redraw();
    </script>
    <!-- End Highcharts-->

</body>

</html>