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
                        <li class="breadcrumb-item"><a href="<?= base_url('/admin/kk') ?>">Kartu Keluarga</a></li>
                        <li class="breadcrumb-item" aria-current="page">Tambah KK</li>
                    </ol>
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
                        <h4 class="m-0 font-weight-bold text-primary text-uppercase">Tambah Data <?= $subtitle ?></h4>

                    </div>

                    <div class="card-body">
                        <form action="/kk/save" method="POST">
                            <div class="form-group">
                                <label for="nik" class="mt-1">No Kartu Keluarga</label>
                                <input type="number" class="form-control <?= ($validation->hasError('no_kk')) ? 'is-invalid' : ''; ?>" name="no_kk" placeholder="Masukan No KK" value="<?= old('no_kk') ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('no_kk'); ?>
                                </div>
                                <label for="kepala" class="mt-1">Nama Kepala Keluarga</label>
                                <input type="text" class="form-control <?= ($validation->hasError('kepala')) ? 'is-invalid' : ''; ?>" name="kepala" placeholder="Masukan Nama kepala Keluarga" value="<?= old('kepala') ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kepala'); ?>
                                </div>
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

                                <label for="alamat" class="mt-1"></label>
                                <div class="form-row">
                                    <div class="col-7">
                                        <input type="text" class="form-control <?= ($validation->hasError('kecamatan')) ? 'is-invalid' : ''; ?>" placeholder="Kecamatan" name="kecamatan" value="<?= old('kecamatan') ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('kecamatan'); ?>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control <?= ($validation->hasError('kabupaten')) ? 'is-invalid' : ''; ?>" placeholder="kabupaten" name="kabupaten" value="<?= old('kabupaten') ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('kabupaten'); ?>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control <?= ($validation->hasError('provinsi')) ? 'is-invalid' : ''; ?>" placeholder="provinsi" name="provinsi" value="<?= old('provinsi') ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('provinsi'); ?>
                                        </div>
                                    </div>
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