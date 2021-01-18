<?php

?>
<?= $this->extend('layouts/admin/template_layout') ?>

<?= $this->section('content') ?>



<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <?= $this->include('layouts/admin/v_navbar') ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent">
                        <li class="breadcrumb-item"><a href="<?= base_url('/dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('/admin/penduduk') ?>">Penduduk</a></li>
                        <li class="breadcrumb-item" aria-current="page">Details </li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6">

            </div>
        </div>



        <!-- Content Row -->
        <div class="row">

            <!-- Content Column -->
            <div class="col-lg-10 mb-4">
                <!-- Illustrations -->

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary text-uppercase">Details Penduduk</h6>

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">NIK: <?= $detail['nik'] ?></h5>
                        <p class="card-text"> Nama: <?= $detail['nama'] ?></p>
                        <p class="card-text">Jenis Kelamin: <?= $detail['jk'] ?></p>
                        <p class="card-text">Tanggal Lahir: <?= $detail['tanggal_lahir'] ?></p>
                        <p class="card-text">Desa: <?= $detail['desa'] ?></p>
                        <p class="card-text">RT: <?= $detail['rt'] ?></p>
                        <p class="card-text">RW: <?= $detail['rw'] ?></p>
                        <p class="card-text">Agama: <?= $detail['agama'] ?></p>
                        <p class="card-text">Status Menikah: <?= $detail['status_menikah'] ?></p>
                        <p class="card-text">Pekerjaan: <?= $detail['pekerjaan'] ?></p>
                        <a href="/admin/penduduk" class="btn btn-primary">&laquo Back</a>
                    </div>

                </div>






            </div>

            <div class="col-lg-2 mb-4">

                <!-- Illustrations -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                        </div>
                        <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a constantly updated collection of beautiful svg images that you can use completely free and without attribution!</p>
                        <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on unDraw &rarr;</a>
                    </div>
                </div>


            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<?= $this->endSection() ?>