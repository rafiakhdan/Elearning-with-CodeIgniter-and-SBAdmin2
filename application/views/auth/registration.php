<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Registrasi Akun</h1>
                        </div>
                        <form class="user" method="POST" action="<?= base_url('auth/registration'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Panjang">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group control-radio">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="peran" id="peran" value="guru">
                                    <label class="form-check-label" for="guru">
                                        Guru
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="peran" id="peran" value="siswa">
                                    <label class="form-check-label" for="siswa">
                                        Siswa
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Buat Akun
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url(); ?>auth">Sudah punya akun? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>