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
                        <li class="breadcrumb-item" aria-current="page">Pindah</li>
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
        <?php if (session()->getFlashdata('berhasil')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('berhasil') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        <?php endif ?>


        <!-- Content Row -->
        <div class="row">
            <?php if (in_groups('admin')) : ?>
                <div class="col-lg-12 mb-4 mt-2">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="/admin/pindah/pdf" class="btn btn-outline-success shadow float-right ml-2 mr-2">Print : <i class="fa fa-print"></i></a>
                            <a href="/admin/pindah/excel" class="btn btn-outline-danger shadow float-right ml-2 mr-2">excel <span> : </span><i class="fas fa-file-excel"></i></a>
                        </div>

                    </div>
                </div>
            <?php endif ?>

            <!-- Content Column -->
            <div class="col-lg-10 mb-4">
                <!-- Illustrations -->

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary text-uppercase">Data <?= $subtitle ?></h6>
                        <a href="<?= base_url('admin/pindah/create') ?>" class="d-none d-sm-inline-block btn btn-sm btn-success float-right"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead class="bg-primary text-white">


                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Tgl pindah</th>
                                        <th>Sebab</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($pindah as $key => $row) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $row['nik'] ?></td>
                                            <td><?= $row['nama'] ?></td>
                                            <td><?= $row['tanggal_pindah'] ?></td>
                                            <td><?= $row['alasan'] ?></td>
                                            <td class="text-center">
                                                <a href="/admin/pindah/edit/<?= $row['id_pindah'] ?>" title="edit">
                                                    <i class="fas fa-edit text-primary"></i>
                                                </a>
                                                <?php if (in_groups('admin')) : ?>
                                                    <form action="/admin/pindah/<?= $row['id_pindah'] ?>" method="POST" class="d-inline">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn" onclick="return confirm('Apakah anda yakin?')">
                                                            <i class="fas fa-ban text-danger"></i>
                                                        </button>
                                                    </form>
                                                <?php endif ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>






            </div>

            <div class="col-lg-2 mb-4">

                <!-- Illustrations -->
                <div class="card shadow mb-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">% Perpindahan</h6>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Statistik persentase Perpindahan Penduduk Terhadap Total Penduduk</p>

                            <div class="progress mb-4">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="mb-1 small">15% dari total penduduk</div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<?= $this->endSection() ?>