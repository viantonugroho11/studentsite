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
    <link rel="stylesheet" href="<?php echo base_url('assets/css/') ?>about.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>image/icon/fontawesome-free/css/all.min.css">

    <title><?php echo $title ?></title>
</head>

<body>
    <!-- MELOAD / MEMANGGIL NAVBAR -->
    <!-- Form Pendaftaran -->
    <div class="card-body">
        <!-- <form action="<?php echo base_url('proses_pendaftaran2') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8"> -->
        <?php echo form_open_multipart('proses_pendaftaran2'); ?>
        <div class="form-group">
            <label for="fotob">Foto</label>
            <input type="file" name="fotob" id="fotob" size="20" class="form-control" />
        </div>

        <div class="form-group">
            <label for="aktaKelb">Akta Kelahiran</label>
            <input type="file" name="aktaKelb" class="form-control" />
        </div>

        
        <div class="form-group">
            <label for="sertifSisb">Sertifikat</label>
            <input type="file" name="sertifSisb" class="form-control" />
        </div>

        <div class="form-group buttons d-flex justify-content-between">
            <button class="btn btn-sm btn-primary" type="submit">Submit</button>
        </div>
    </div>
    </form>
    </div>
    </div>

    <!-- memanggil footer -->
    <?php $this->load->view('partials/footer'); ?>
</body>
<!-- Optional JavaScript; choose one of the two! -->
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-9a5da101-f555-4ae9-a150-2f22475847cf"></div>
<!-- Optional JavaScript; choose one of the two! -->

</html>