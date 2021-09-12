<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo base_url('assets/image/icon/favicon.ico') ?>" type="image/x-icon" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- My Fonts -->
    <link href="https://www.dafont.com/chapaza.font" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/register.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/image/icon/fontawesome-free/css/all.min.css') ?>">

    <title>Login | DHIBS</title>
</head>

<body>

    <?php $this->load->view('partials/navbar') ?>

    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <?= $this->session->flashdata('pesan') ?>
            <h4 class="text-center">REGISTER</h4>
            <form action="<?= base_url('register') ?>" method="post" accept-charset="utf-8">
                <div class="form-group">
                    <label>Nama</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda">
                    </div>
                    <?php echo form_error('nama', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        <input type="text" name="email" class="form-control" placeholder="Masukkan Email Anda">
                    </div>
                    <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda">
                    </div>
                    <?php echo form_error('password', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <div class="col-6">
                        <input type="submit" value="Register" class="btn btn-primary btn-block">
                    </div>
                    <div class="col-6">
                        <a href="<?php echo base_url("login") ?>" class="btn btn-secondary btn-block">Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <div class="about">
        <div class="container footer">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h1><img src="<?php echo base_url('assets/image/icon/Group10.png') ?>" width="250px"></h1>
                <p>Jl. Sipon Irigasi, Cipondoh Makmur, Kec. Cipondoh <br />Kota Tangerang 15148</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xd-12">
                <a href="darulhasanibs@gmail.com">darulhasanibs@gmail.com</a>
                <p>021-5575-4003</p>
            </div>
        </div>
    </div>
    <!-- akhir about -->

    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <p class="text-center">Darul Hasan Islamic Boarding School © 2020</p>
        </div>
    </div>
    <!-- akhir copyright -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>