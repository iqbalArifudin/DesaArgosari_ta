<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-address-card"></i>
    Data Pegawai &nbsp; &nbsp; > &nbsp; &nbsp; <i class="fas fa-eye"></i>
    Detail
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <div class="card-header">
                            <center><strong>Detail Data Pegawai</strong></center>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <?php foreach ($pegawai as $pegawai) : ?>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <img src="<?= base_url('assets/foto_pegawai/') . $pegawai->foto ?>"
                                            class="card-img-top" style="height: 370px;">
                                    </div>
                                    <div class="form-group col-md-7">
                                        <label for="nama"><strong>Nama</strong></label>
                                        <input type="text" name="NIK" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $pegawai->nama; ?>" readonly>
                                        <br>
                                        <label for="nama"><strong>Jabatan</strong></label>
                                        <input type="text" name="nama" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $pegawai->jabatan; ?>" readonly>
                                        <br>
                                        <label for="nama"><strong>NIK</strong></label>
                                        <input type="text" name="NIK" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $pegawai->NIK; ?>" readonly>
                                        <br>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nama"><strong>Jenis Kelamin</strong></label>
                                                <input type="text" name="nama" placeholder="" autocomplete="off"
                                                    class="form-control" required
                                                    value="<?= $pegawai->jenis_kelamin; ?>" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="nama"><strong>NO HP</strong></label>
                                                <input type="text" name="NIK" placeholder="" autocomplete="off"
                                                    class="form-control" required value="<?= $pegawai->no_hp; ?>"
                                                    readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>
                                <p>
                                    <hr>
                                    <center>
                                        <div class="form-group">
                                            <a href="<?= base_url("admin/pegawai"); ?>" class="btn btn-info"><i
                                                    class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
                                    </center>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>