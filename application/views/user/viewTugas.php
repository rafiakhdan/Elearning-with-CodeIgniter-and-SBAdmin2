<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tugas</h1>
    <div class="row">
        <?php foreach ($kelas as $kls) : ?>
            <div class="col col-lg-4 mb-3">
                <div class="card h-100" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $kls->namaKelas; ?></h5>
                        <h6 class="card-subtitle mb-5 text-muted"></h6>
                        <div class="text-right">
                            <a href="<?= base_url('user/viewTugas/') . $kls->kodeKelas ?>" class="card-link">Akses Tugas
                                <i class="fas fa-door-open"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- /.container-fluid -->
</div>

</div>
<!-- End of Main Content -->