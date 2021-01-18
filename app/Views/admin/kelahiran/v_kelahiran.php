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
                        <li class="breadcrumb-item" aria-current="page">kelahiran</li>
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
            <?php if (in_groups('admin')) : ?>
                <div class="col-lg-12 mb-4 mt-2">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="/admin/penduduk/pdf" class="btn btn-outline-success shadow float-right ml-2 mr-2">Print : <i class="fa fa-print"></i></a>
                            <a href="/admin/penduduk/excel" class="btn btn-outline-danger shadow float-right ml-2 mr-2">excel <span> : </span><i class="fas fa-file-excel"></i></a>
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
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success float-right"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tgl Lahir</th>
                                        <th>Gender</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>No</td>
                                        <td>NIK</td>
                                        <td>Nama</td>
                                        <td>Tempat Lahir</td>
                                        <td class="text-center">
                                            <a href="#" title="edit">
                                                <i class="fas fa-edit text-primary"></i>
                                            </a>
                                            <?php if (in_groups('admin')) : ?>
                                                <form action="#" method="POST" class="d-inline">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn" onclick="return confirm('Apakah anda yakin?')">
                                                        <i class="fas fa-ban text-danger"></i>
                                                    </button>
                                                </form>
                                            <?php endif ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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