<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center my-5">

        <div class="col-lg-6">

            <div class="card o-hidden border-1 border-secondary shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><?= $tittle ?></h1>
                                </div>

                                <?= $this->session->flashdata('message') ?>

                                <form class="user" method="POST" action="<?= base_url('AuthController/signin') ?>">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control form-control-user" id="email" placeholder="Enter Email Address...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-warning btn-user btn-block mb-3">
                                        Login
                                    </button>
                                </form>
                                <div class="text-center">
                                    <p>
                                        Tidak Memiliki Akun? <a href="<?= base_url('AuthController/register') ?>">Buat Akun</a>
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