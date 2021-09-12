
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
    <link rel="stylesheet" href="<?php echo base_url('assets/css/berita.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/image/icon/fontawesome-free/css/all.min.css') ?>">

    <title><?php echo $title ?></title>
</head>

<body>

    <!-- MELOAD / MEMANGGIL NAVBAR -->
    <?php $this->load->view('partials/navbar') ?>

    <!-- container -->
    <div class="container">
        <!-- about -->
        <!-- baca selengkapnya -->
        <div class="row baca">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <img src="<?php echo base_url('assets/image/gambar.jpeg') ?>" width="300px" alt="news" class="img-tgh img-fluid">
            </div>
            <div class="col-sm-3"></div>
            <div class="col-lg-12">
                <h5>Monday, Sept of 28 2020</h5>
                <h2>Prestasi Santri Darul Hasan pada Olimpiade Bahasa Arab MGMP Bahasa Arab Tahun 2019</h2>
                <p>SELAMAT KEPADA SANTRI BERPRESTASI Alhamdulillahi rabbil aalaamiin.... "juara adalah tradisi". Slogan tersebut mungkin terdengar agak bombastis, mengapa? karena sebuah prestasi adalah hasil bonus dari sebuah proses yang sangat ketat lagi keras. Namun nampaknya slogan di atas juga 'pas' disematkan kepada para santri Darul Hasan yang telah dengan keras meningkatkan kemapuan bahasa Arab mereka dengan belajar, simulasi, mengafal, dan bimbingan dengan para asatidzah.</p>
                <p>Akhirnya dengan penuh jerih payah mereka berhasil sampai pada tingkat provinsi mewakili kota Tangerang dalam olimpiade bahasa Arab MGMP Bahasa Arab tahun 2019. Di bawah bimbingan Ustadzah Hj. Eva Dian Nurmala, M.Pd mereka terus meningkatkan potensi diri dalam penguasan bahasa Arab guna memperoleh prestasi yang maksimal.</p>
                <p>Dalam Olimpiade Bahasa Arab (OBA) tingkat provinsi tentu lebih kompetitif, karena mereka harus bersaing dengan para peserta terbaik dari berbagai kota di Provinsi Banten. Dengan berbekal semangat, ilmu, dan doa para dewan asatidzah Pondok Pesantren Darul Hasan dan akhirnya mereka memborong lima piala dan berhak mewakili Provinsi Banten pada OBA tingkat nasional di P4TK Jakarta tahun 2020.</p>
                <hr>
                <h5>Para Juara</h5>
                <h4>SMP</h4>
                <p>Mereka yang meraih juara pada OBA tingkat Provinsi Banten 2019 kategori SMP dan SMA Boading:</p>
                <p>Juara 1: Nayla Zakiatuzzahra dari SMP Islam Darul Hasan, Kota Tangerang</p>
                <p>Juara 2: Nida M. Syifa dari SMP Islam Darul Hasan, Kota Tangerang</p>
                <p>Juara 3: Nakhla Al-Idrus dari SMP Islam Darul Hasan, Kota Tangerang</p>
                <h4>SMA</h4>
                <p>Juara 1: Fadia Ramadhina dari SMA Islam Darul Hasan, Kota Tangerang</p>
                <p>Juara 3 Nugroho Krisna Murti, SMA Islam Darul Hasan</p>
            </div>
        </div>
</div>

<!-- memanggil footer -->
<?php $this->load->view('partials/footer'); ?>

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