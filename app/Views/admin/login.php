<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; P2ACEH</title>
    <meta name="description"
        content="Bidang Penataan & Pemberdayaan Kanwil BPN Aceh. Temukan info terbaru seputar pertanahan di Aceh.">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?=base_url()?>/template/admin/assets/img/favicon.png" rel="icon">
    <link href="<?=base_url()?>/template/admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?=base_url()?>/template/admin/node_modules/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?=base_url()?>/template/admin/assets/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>/template/admin/assets/css/components.css">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="d-flex flex-wrap align-items-stretch">
                <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                    <div class="p-4 m-3">
                        <img src="<?=base_url()?>/template/admin/assets/img/logo1.png" alt="" width="180"
                            class="mb-5 mt-2">
                        <h4 class="text-dark font-weight-normal">Bidang P2<span class="font-weight-bold"> BPN
                                ACEH</span>
                        </h4>
                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <form action="<?= route_to('login') ?>" method="post" class="needs-validation" novalidate="">
                            <?= csrf_field() ?>

                            <div class="form-group">
                                <label for="email"><?=lang('Auth.email')?></label>
                                <input id="" type="" class="form-control" name="email" tabindex="">
                                <div class="invalid-feedback">
                                    Please fill in your email
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label"><?=lang('Auth.password')?></label>
                                </div>
                                <input id="password" type="password" class="form-control" name="password" tabindex="2">
                                <div class="invalid-feedback">
                                    please fill in your password
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                        id="remember-me">
                                    <label class="custom-control-label" for="remember-me">Ingatkan Saya</label>
                                </div>
                            </div>

                            <div class="form-group text-right">
                                <a href="auth-forgot-password.html" class="float-left mt-3">
                                    Lupa Kata Sandi?
                                </a>
                                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right"
                                    tabindex="4"><?=lang('Auth.loginAction')?>
                                </button>
                            </div>

                            <div class="mt-5 text-center">
                                Belum punya akun? <a href="auth-register.html">Daftar disini</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
                    data-background="<?=base_url()?>/template/admin/assets/img/unsplash/login-bg.jpg">
                    <div class="absolute-bottom-left index-2">
                        <div class="text-light p-5 pb-2">
                            <div class="mb-5 pb-3">
                                <h5 class="mb-2 display-4 font-weight-bold">Selamat datang!</h5>
                                <h5 class="font-weight-normal text-muted-transparent">Banda Aceh, Indonesia</h5>
                            </div>
                            Photo by <a class="text-light bb" target="_blank"
                                href="https://unsplash.com/photos/izpJfj3h4MA">Sangga Rima Roman Selia</a> on <a
                                class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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

    <!-- Template JS File -->
    <script src="<?=base_url()?>/template/admin/assets/js/scripts.js"></script>
    <script src="<?=base_url()?>/template/admin/assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
</body>

</html>