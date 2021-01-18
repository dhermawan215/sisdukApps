<?php

use App\Controllers\Penduduk;
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
                        <li class="breadcrumb-item"><a href="<?= base_url('/admin/pindah') ?>">Pindah</a></li>
                        <li class="breadcrumb-item" aria-current="page">Tambah <?= $subtitle; ?></li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6">
                <nav class="navbar navbar-light bg-light float-right">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </nav>
            </div>
        </div>



        <!-- Content Row -->
        <div class="row">

            <!-- Content Column -->
            <div class="col-lg-10 mb-4">
                <!-- Illustrations -->

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary text-uppercase">Tambah <?= $subtitle ?></h6>

                    </div>

                    <div class="card-body">
                        <form action="/datang/save" method="POST">
                            <div>
                                <label for="nik" class="mt-1">NIK</label>
                                <input type="number" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" name="nik" placeholder="Masukan Nik" value="<?= old('nik') ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nik'); ?>
                                </div>
                                <label for="nama" class="mt-1">Nama</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" name="nama" placeholder="Masukan Nama" value="<?= old('nama') ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama'); ?>
                                </div>
                                <label for="" class="mt-1">Jenis Kelamin</label>
                                <select class="form-control" name="jk" aria-placeholder="silahkan pilih">
                                    <option value="" selected value="">Pilih Jenis Kelamin</option>
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                                <label for="tanggal_datang" class="mt-1">Tanggal Datang</label>
                                <input type="date" class="form-control" name="tanggal_datang" placeholder="silahkan pilih tanggal">
                            </div>
                            <button type="submit" class="btn btn-primary text-center mt-2">Simpan</button>
                            <button type="reset" class="btn btn-danger text-center mt-2">Reset</button>
                        </form>
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