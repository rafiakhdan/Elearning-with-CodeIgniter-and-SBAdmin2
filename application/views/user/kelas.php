<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Ruang Kelas</h1>
    <?php foreach ($kelas as $kls) : ?>
        <div class="card mb-3">
            <div class="card-header">
                <?= $kls->nama; ?>
            </div>
            <div class="card-body">
                <h4 class="card-title"><?= $kls->namaKelas; ?></h4>
                <p class="card-text">Kode Kelas : <?= $kls->kodeKelas; ?></p>
                <div class="text-right">
                    <a href="<?= $kls->linkMeet; ?>" class="btn btn-primary">Join Meet</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->