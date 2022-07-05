<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Ruang Tugas</h1>
    <?php foreach ($tugas as $t) : ?>
        <div class="card h-100 mb-2">
            <div class="card-body">
                <h5 class="card-title"><?= $t->namaTugas; ?></< /h5>
                    <h6 class="card-subtitle mb-5 text-muted"><?= $t->keteranganTugas; ?></h6>
                    <p class="card-text">Deadline : <?= $t->deadlineTugas; ?></< /p>
                    <div class="text-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#inputTugas">Input Tugas
                        </button>
                    </div>
            </div>
        </div>
    <?php endforeach; ?>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<div class="modal fade" id="inputTugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kumpulkan Tugas</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form class="user" method="POST">
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="fileTugas" name="fileTugas" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="fileTugas">Input file Tugas</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="pl-3" for="keteranganJawaban">Keterangan</label>
                        <textarea class="form-control" id="keteranganJawaban" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" href="<?= base_url(''); ?>">Kumpulkan</button>
                </div>
            </form>
        </div>
    </div>
</div>