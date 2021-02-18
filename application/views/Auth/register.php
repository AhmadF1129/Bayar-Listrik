<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center my-5">

        <div class="col-lg-6">

            <div class="card o-hidden border-2 border-secondary shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><?= $tittle ?></h1>
                                </div>
                                <form class="user" method="POST" action="<?= base_url('AuthController/signup') ?>">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control form-control-user" id="name" placeholder="Full Name" value="<?= set_value('name') ?>">
                                        <?= form_error('name', '<small class="text-danger lb-3">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control form-control-user" id="email" placeholder="example@email.com" value="<?= set_value('email') ?>">
                                        <?= form_error('email', '<small class="text-danger lb-3">', '</small>') ?>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <input type="password" name="password1" class="form-control form-control-user" id="password1" placeholder="Password">
                                            <?= form_error('password1', '<small class="text-danger lb-3">', '</small>') ?>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="password" name="password2" class="form-control form-control-user" id="password2" placeholder="Ulangi Password">
                                            <?= form_error('password2', '<small class="text-danger lb-3">', '</small>') ?>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-warning btn-user btn-block mb-3">
                                        Daftar
                                    </button>
                                </form>
                                <div class="text-center">
                                    <p>
                                        Sudah Memiliki Akun? <a href="<?= base_url('AuthController') ?>">Masuk</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>