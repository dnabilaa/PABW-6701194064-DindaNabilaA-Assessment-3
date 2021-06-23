<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <center>
                <table>
                    <tr>
                        <td>Isi Paket</td>
                        <td><input type="text" name="isipaket"></td>
                    </tr>
                    <tr>
                        <td>Tujuan Paket</td>
                        <td><select name="tujuan">
                                <option value="kosong">---select----</option>
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