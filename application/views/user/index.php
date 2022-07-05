<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kelas</h1>
    <div class="row">
        <?php foreach ($kelas as $kls) : ?>
            <div class="col col-lg-4 mb-3">
                <div class="card h-100" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $kls->namaKelas; ?></h5>
                        <?php $kodeKelas = $kls->kodeKelas;
                        $guru = $this->kelas->viewKelas($kodeKelas)->row_array();
                        ?>
                        <h6 class="card-subtitle mb-5 text-muted"><?= $guru['nama'] ?></h6>
                        <div class="text-right">
                            <a href="<?= base_url('user/viewKelas/') . $kls->kodeKelas ?>" class="card-link">Akses Kelas
                                <i class="fas fa-door-open"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="col col-lg-4 mb-3">
            <div class="card h-100" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">Join Kelas</h5>
                    <h6 class="card-subtitle mb-4 text-muted"></h6>
                    <div class="d-flex justify-content-center">
                        <a class="card-link text-primary" href="#" data-toggle="modal" data-target="#joinKelas">
                            <i class="fas fa-plus fa-4x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<div class="modal fade" id="joinKelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Join Kelas</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form class="user" method="POST" action="<?= base_url('user/joinKelas'); ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="kodeKelas" name="kodeKelas" placeholder="Input Kode Kelas">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit">Join</button>
                    </div>
            </form>
        </div>
    </div>
</div>