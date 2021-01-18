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
                        <li class="breadcrumb-item"><a href="<?= base_url('/admin/penduduk') ?>">Penduduk</a></li>
                        <li class="breadcrumb-item" aria-current="page">Tambah Penduduk</li>
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
                        <h6 class="m-0 font-weight-bold text-primary text-uppercase">Tambah Penduduk</h6>

                    </div>

                    <div class="card-body">
                        <form action="/penduduk/save" method="POST">
                            <div class="form-group">
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
                                <label for="tempatlahir" class="mt-1">Tempat Lahir</label>
                                <input type="text" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : ''; ?>" name="tempat_lahir" placeholder="Masukan Tempat Lahir" value="<?= old('tempat_lahir') ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('tempat_lahir'); ?>
                                </div>
                                <label for="" class="mt-1">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" placeholder="silahkan pilih tanggal">
                                <label for="" class="mt-1">Jenis Kelamin</label>
                                <select class="form-control" name="jk" aria-placeholder="silahkan pilih">
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                                <label for="alamat" class="mt-1">Alamat</label>
                                <div class="form-row">
                                    <div class="col-7">
                                        <input type="text" class="form-control <?= ($validation->hasError('desa')) ? 'is-invalid' : ''; ?>" placeholder="Desa" name="desa" value="<?= old('desa') ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('desa'); ?>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control <?= ($validation->hasError('rt')) ? 'is-invalid' : ''; ?>" placeholder="RT" name="rt" value="<?= old('rt') ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('rt'); ?>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control <?= ($validation->hasError('rw')) ? 'is-invalid' : ''; ?>" placeholder="RW" name="rw" value="<?= old('rw') ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('rw'); ?>
                                        </div>
                                    </div>
                                </div>
                                <label for="agama" class="mt-1">Agama</label>
                                <input type="text" class="form-control <?= ($validation->hasError('agama')) ? 'is-invalid' : ''; ?>" name="agama" placeholder="masukan agama" value="<?= old('agama') ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('agama'); ?>
                                </div>
                                <label for="" class="mt-1">Status_menikah</label>
                                <select class="form-control" name="status_menikah">
                                    <option value="belum">Belum</option>
                                    <option value="menikah">Menikah</option>
                                    <option value="cerai hidup">Cerai Hidup</option>
                                    <option value="cerai mati">Cerai Mati</option>
                                </select>
                                <label for="pekerjaan" class="mt-1">Pekerjaan</label>
                                <input type="text" class="form-control <?= ($validation->hasError('pekerjaan')) ? 'is-invalid' : ''; ?>" name="pekerjaan" placeholder="masukan pekerjaan" value="<?= old('pekerjaan') ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('pekerjaan'); ?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary text-center">Simpan</button>
                            <button type="reset" class="btn btn-danger text-center">Reset</button>
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