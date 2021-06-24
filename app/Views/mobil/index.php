<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Dataset</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Mobil</th>
                        <th scope="col">Tanggal Submit</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($mobil as $m) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $m['nama_mobil']; ?></td>
                        <td><?= $m['tanggal_submit']; ?></td>
                        <td>
                            <a href="/mobil/index" class="btn btn-lg btn-custom">Detail</a>
                        </td>


                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>