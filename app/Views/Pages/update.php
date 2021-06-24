<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">

            <body>
                <center>
                    <h1>FORM UPDATE DATA PAKET</h1>
                    <form action="update.php" method="post" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td>Nama Mobil</td>
                                <td><input type="text" name="isipaket"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Submit</td>
                                <td><select name="tujuan">
                                        <option value="kosong">---select----</option>
                            </tr>
                            <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                            <link rel="stylesheet" href="/resources/demos/style.css">
                            <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

                            <script>
                            $(function() {
                                $("#date").datepicker({
                                    dateFormat: "yy-mm-dd"
                                });
                            });
                            </script>


                        </table>
                        <p></p>
                        <input type="submit" value="UPDATE" />
                    </form>
        </div>
        </center>
        </body>
    </div>
</div>
</div>
<?= $this->endSection(); ?>