<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <center>
                <table>
                    <tr>
                        <td>Nama Mobil</td>
                        <td><input type="text" name="nama mobil"></td>
                    </tr>
                    <tr>
                        <td>Tanggal submit</td>
                        <td><input type="text" name="tanggal submit"></td>
                </table>
                <p></p>
                <input type="submit" value="CREATE" />
            </center>
        </div>

        </body>
    </div>
</div>
</div>
<?= $this->endSection(); ?>