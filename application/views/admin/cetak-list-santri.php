<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Amalia Ayu Wardhani" />
    <link rel="shortcut icon" href="<?php echo base_url('assets/image/icon/favicon.ico') ?>" type="image/x-icon" />

    <title><?php echo $title ?></title>

    <link href="<?php echo base_url('assets/sb/') ?>css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">


    <main>
        <div class="container mt-5">
            <div class="card mb-4">

                <?= $this->session->flashdata('pesan') ?>


                <div class="card-header row">
                    <div class="col">
                        <h4>List Santri Darul Hasan Islamic Boarding School <?php echo date('Y') ?></h4>
                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>NISN</th>
                                    <th>Class</th>
                                    <th>Gender</th>
                                    <th>Wali Santri</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($list_santri->result() as $dt) : ?>

                                    <tr>
                                        <td><?php echo $dt->nama_santri ?></td>

                                        <td><?php echo $dt->NISN ?></td>

                                        <td><?php echo $dt->kelas ?></td>

                                        <td><?php echo $dt->jk ?></td>

                                        <td><?php echo $dt->wali_santri ?></td>

                                        <td><?php echo $dt->alamat ?></td>

                                        <td><?php echo $dt->no_hp ?></td>
                                    </tr>
                                <?php endforeach ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </main>


    <?php $this->load->view('partials/backend/footer') ?>

    <!-- print pdf -->
    <script type="text/javascript">
        window.print();
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/sb/') ?>js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/sb/') ?>assets/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url('assets/sb/') ?>assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/sb/') ?>assets/demo/datatables-demo.js"></script>
</body>

</html>