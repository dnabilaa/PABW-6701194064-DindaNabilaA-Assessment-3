<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">List Paket</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">tanggal datang</th>
                        <th scope="col">Sasaran</th>
                        <th scope="col">Penerima</th>
                        <th scope="col">isi paket</th>
                        <th scope="col">tanggal ambil</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($paket as $p) : ?>
                    <tr>
                        <th scope="row">1</th>
                        <td><?= $p['id']; ?></td>
                        <td><?= $p['tanggal_datang']; ?></td>
                        <td><?= $p['sasaran']; ?></td>
                        <td><?= $p['penerima']; ?></td>
                        <td><?= $p['isi_paket']; ?></td>
                        <td><?= $p['tanggal_ambil']; ?></td>
                        <td>
                            <a href="" class="btn btn-success">Update</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>