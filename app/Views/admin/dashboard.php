<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Dashboard &mdash; P2ACEH</title>

    <!-- Favicons -->
    <link href="<?=base_url()?>/template/admin/assets/img/favicon.png" rel="icon">
    <link href="<?=base_url()?>/template/admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?=base_url()?>/template/admin/node_modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/template/admin/node_modules/weathericons/css/weather-icons.min.css">
    <link rel="stylesheet"
        href="<?=base_url()?>/template/admin/node_modules/weathericons/css/weather-icons-wind.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/template/admin/node_modules/summernote/dist/summernote-bs4.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?=base_url()?>/template/admin/assets/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>/template/admin/assets/css/components.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">

            <!-- Main Content -->
            <div class="">
                <section class="section">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Statistics</h4>
                                    <div class="card-header-action">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-primary">Week</a>
                                            <a href="#" class="btn">Month</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas id="myChart" height="182"></canvas>
                                    <div class="statistic-details mt-sm-4">
                                        <div class="statistic-details-item">
                                            <span class="text-muted"><span class="text-primary"><i
                                                        class="fas fa-caret-up"></i></span> 7%</span>
                                            <div class="detail-value">$243</div>
                                            <div class="detail-name">Today's Sales</div>
                                        </div>
                                        <div class="statistic-details-item">
                                            <span class="text-muted"><span class="text-danger"><i
                                                        class="fas fa-caret-down"></i></span> 23%</span>
                                            <div class="detail-value">$2,902</div>
                                            <div class="detail-name">This Week's Sales</div>
                                        </div>
                                        <div class="statistic-details-item">
                                            <span class="text-muted"><span class="text-primary"><i
                                                        class="fas fa-caret-up"></i></span>9%</span>
                                            <div class="detail-value">$12,821</div>
                                            <div class="detail-name">This Month's Sales</div>
                                        </div>
                                        <div class="statistic-details-item">
                                            <span class="text-muted"><span class="text-primary"><i
                                                        class="fas fa-caret-up"></i></span> 19%</span>
                                            <div class="detail-value">$92,142</div>
                                            <div class="detail-name">This Year's Sales</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Recent Activities</h4>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled list-unstyled-border">
                                        <li class="media">
                                            <img class="mr-3 rounded-circle" width="50"
                                                src="<?=base_url()?>/template/admin/assets/img/avatar/avatar-1.png"
                                                alt="avatar">
                                            <div class="media-body">
                                                <div class="float-right text-primary">Now</div>
                                                <div class="media-title">Farhan A Mujib</div>
                                                <span class="text-small text-muted">Cras sit amet nibh libero, in
                                                    gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="mr-3 rounded-circle" width="50"
                                                src="<?=base_url()?>/template/admin/assets/img/avatar/avatar-2.png"
                                                alt="avatar">
                                            <div class="media-body">
                                                <div class="float-right">12m</div>
                                                <div class="media-title">Ujang Maman</div>
                                                <span class="text-small text-muted">Cras sit amet nibh libero, in
                                                    gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="mr-3 rounded-circle" width="50"
                                                src="<?=base_url()?>/template/admin/assets/img/avatar/avatar-3.png"
                                                alt="avatar">
                                            <div class="media-body">
                                                <div class="float-right">17m</div>
                                                <div class="media-title">Rizal Fakhri</div>
                                                <span class="text-small text-muted">Cras sit amet nibh libero, in
                                                    gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="mr-3 rounded-circle" width="50"
                                                src="<?=base_url()?>/template/admin/assets/img/avatar/avatar-4.png"
                                                alt="avatar">
                                            <div class="media-body">
                                                <div class="float-right">21m</div>
                                                <div class="media-title">Alfa Zulkarnain</div>
                                                <span class="text-small text-muted">Cras sit amet nibh libero, in
                                                    gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="text-center pt-1 pb-1">
                                        <a href="#" class="btn btn-primary btn-lg btn-round">
                                            View All
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
            </section>
        </div>
    </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?=base_url()?>/template/admin/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?=base_url()?>/template/admin/node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
    <script src="<?=base_url()?>/template/admin/node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="<?=base_url()?>/template/admin/node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="<?=base_url()?>/template/admin/node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?=base_url()?>/template/admin/node_modules/summernote/dist/summernote-bs4.js"></script>
    <script src="<?=base_url()?>/template/admin/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Template JS File -->
    <script src="<?=base_url()?>/template/admin/assets/js/scripts.js"></script>
    <script src="<?=base_url()?>/template/admin/assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?=base_url()?>/template/admin/assets/js/page/index-0.js"></script>
</body>

</html>