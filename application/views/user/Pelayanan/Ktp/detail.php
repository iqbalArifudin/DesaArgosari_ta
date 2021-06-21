<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-address-card"></i>
    Pelayanan KTP &nbsp; &nbsp; > &nbsp; &nbsp; <i class="fas fa-eye"></i>
    Detail
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <div class="card-header">
                            <center><strong>Detail</strong></center>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <?php foreach ($penduduk as $j) : ?>
                                <div class="form-row">
                                    <label for="nama"><strong>NO. Kartu Keluarga</strong></label>
                                    <input type="text" name="keterangan" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $j->no_KK; ?>" readonly>
                                </div>
                                <P>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>NAMA</strong></label>
                                        <input type="text" name="nama" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $j->nama; ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>NIK</strong></label>
                                        <input type="text" name="NIK" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $j->NIK; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Tempat</strong></label>
                                        <input type="text" name="nama" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $j->tempat_lahir; ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Tanggal Lahir</strong></label>
                                        <input type="text" name="NIK" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $j->tanggal_lahir; ?>" readonly>
                                    </div>
                                </div>
                                <?php endforeach ?>
                                <p>


                                    <?php foreach ($ktp as $k) : ?>
                                <div class="form-row">
                                    <label for="nama"><strong>Status</strong></label>
                                    <input type="text" name="keterangan" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $k->status; ?>" readonly>
                                </div>
                                <br>

                                <div class="form-row">
                                    <label for="nama"><strong>keterangan</strong></label>
                                    <input type="text" name="keterangan" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $k->keterangan; ?>" readonly>
                                </div>
                                <br>

                                <div class="form-row">
                                    <label for="nama"><strong>Alasan</strong></label>
                                    <input type="text" name="alasan" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $k->alasan; ?>" readonly>
                                </div>
                                <br>

                                <div class="form-row">
                                    <label for="nama"><strong>Surat Pengantar RT / RW</strong></label>
                                    <img src="<?= base_url('assets/foto_ktp/') . $k->surat_rt_rw ?>" class="card-img"
                                        alt="..." width="100px">
                                </div>

                                <br>
                                <div class="form-row">
                                    <label for="nama"><strong>Persyaratan KK</strong></label>
                                    <img src="<?= base_url('assets/foto_ktp/') . $k->fc_kk ?>" class="card-img"
                                        alt="..." width="100px">
                                </div>
                                <?php endforeach ?>

                                <hr>
                                <div class="form-group">
                                    <a href="<?= base_url("user/LayananKtp"); ?>" class="btn btn-info"><i
                                            class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});
</script>