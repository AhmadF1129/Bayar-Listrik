<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Profile</h1>
    <div class="row mt-3 mb-3">
        <div class="col-lg-8">
            <table class="table">
                <tr class="row">
                    <th class="col-md-3">Nama Lengkap</th>
                    <td class="col-md-5"><?= $user['nama_lengkap'] ?></td>
                </tr>
                <tr class="row">
                    <th class="col-md-3">Email</th>
                    <td class="col-md-5"><?= $user['email'] ?></td>
                </tr>
                <tr class="row">
                    <th class="col-md-3">No Kwh</th>
                    <?php if ($user['no_kwh'] == null) : ?>
                    <td class="col-md-5">-</td>
                    <?php else : ?>
                    <td class="col-md-5"><?= $user['no_kwh'] ?></td>
                    <?php endif; ?>
                </tr>
                <tr class="row">
                    <th class="col-md-3">Alamat</th>
                    <?php if ($user['alamat'] == null) : ?>
                    <td class="col-md-5">-</td>
                    <?php else : ?>
                    <td class="col-md-5"><?= $user['alamat'] ?></td>
                    <?php endif; ?>
                </tr>
                <tr class="row">
                    <th class="col-md-3">Level</th>
                    <?php if ($user['level_id'] == null) : ?>
                    <td class="col-md-5">-</td>
                    <?php else : ?>
                    <td class="col-md-5"><?= $user['level'] ?></td>
                    <?php endif; ?>
                </tr>
                <tr class="row">
                    <th class="col-md-3">Metode Pembayaran</th>
                    <?php if ($user['bank_id'] == 0) : ?>
                    <td class="col-md-5">Belum Ditambahkan</td>
                    <?php else : ?>
                    <td class="col-md-5">Telah Ditambahkan</td>
                    <?php endif; ?>
                </tr>
            </table>
                <a href="#" class="btn btn-warning"><i class="fas fa-fw fa-user-edit"></i></a>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->