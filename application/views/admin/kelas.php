<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Ruang Kelas</h1>
    <div class="row">
        <?php foreach ($kelas as $kls) : ?>
            <div class="col-sm-6">
                <div class="card mb-3">
                    <div class="card-header">
                        <?= $kls->nama; ?>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><?= $kls->namaKelas; ?></h4>
                        <p class="card-text">Kode Kelas : <?= $kls->kodeKelas; ?></p>
                        <div class="text-right">
                            <a href="<?= $kls->linkMeet; ?>" class="btn btn-primary">Join Meet</a>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#gantiLink">Ganti Link Meet</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tugas</h5>
                    <p class="card-text"></p>
                    <div class="text-right">
                        <button class="btn btn-warning" data-toggle="modal" data-target="#buatTugas">Buat Tugas</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Daftar Tugas</th>
                    <th scope="col">Deadline</th>
            </thead>
            <tbody>
                <?php foreach ($tugas as $t) : ?>
                    <tr>
                        <td><?= $t->namaTugas; ?></td>
                        <td><?= $t->deadlineTugas; ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
            </tbody>
        </table>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<div class="modal fade" id="gantiLink" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ganti Link</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="user" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="linkMeet" name="linkMeet" placeholder="Input Link">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url(''); ?>">Ganti</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="buatTugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Buat Tugas</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form class="user" method="POST" action="<?= base_url('admin/buatTugas/') . $kls->kodeKelas; ?>">
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <input type="text" class="form-control form-control-user" id="namaTugas" name="namaTugas" placeholder="Judul Tugas">
                    </div>
                    <div class="form-group">
                        <label class="pl-3" for="keteranganTugas">Keterangan</label>
                        <textarea class="form-control" id="keteranganTugas" name="keteranganTugas" rows="3"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="filePendukung" name="filePendukung" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="filePendukung">Input file pendukung</label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label class="pl-3" for="deadlineTugas">Deadline Tugas</label>
                        <input type="date" class="form-control form-control-user" id="deadlineTugas" name="deadlineTugas">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Buat</button>
                </div>
            </form>
        </div>
    </div>
</div>