<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-address-card"></i>
    Pelayanan KTP &nbsp; &nbsp; > &nbsp; &nbsp; <i class="fas fa-eye"></i>
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
                            <center><strong>Detail</strong></center>
                        </div>
                        <div class="card-body">
                            <?php foreach ($ktp as $penduduk) : ?>

                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_ktp" value="<?= $penduduk->id_ktp; ?>">

                                <div class="form-row">
                                    <label for="nama"><strong>Nama</strong></label>
                                    <input type="text" name="nama" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $penduduk->nama; ?>" readonly>
                                </div>
                                <br>
                                <div class="form-row">
                                    <label for="nama"><strong>NIK</strong></label>
                                    <input type="text" name="nama" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $penduduk->NIK; ?>" readonly>
                                </div>
                                <br>
                                <div class="form-row">
                                    <label for="nama"><strong>Tanggal Mengajukan</strong></label>
                                    <input type="text" name="nama" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $penduduk->tanggal_buat; ?>" readonly>
                                </div>
                                <br>
                                <div class="form-row">
                                    <label for="nama"><strong>Status</strong></label>
                                    <input type="text" name="status" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $penduduk->status; ?>" readonly>
                                </div>
                                <br>
                                <div class="form-row">
                                    <label for="nama"><strong>Keterangan</strong></label>
                                    <input type="text" name="nama" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $penduduk->keterangan; ?>" readonly>
                                </div>
                                <br>
                                <div class="form-row">
                                    <label for="nama"><strong>Surat Pengantar RT / RW</strong></label>
                                    <img src="<?= base_url('assets/foto_ktp/') . $penduduk->surat_rt_rw ?>"
                                        class="card-img" alt="..." width="100px">
                                </div>
                                <br>
                                <div class="form-row">
                                    <label for="nama"><strong>Persyaratan FC KK</strong></label>
                                    <img src="<?= base_url('assets/foto_ktp/') . $penduduk->fc_kk ?>" class="card-img"
                                        alt="..." width="100px">
                                </div>
                                <hr>

                                <div class="form-group">
                                    <label for="nim"><strong>Ajukan</strong></label>
                                    <?php if ($penduduk->status == "Diajukan Ke Pelayanan") : ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diajukan Ke Pelayanan" checked>Diajukan
                                        Ke Pelayanan
                                    </div>
                                    <br>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Ditolak">Ditolak
                                    </div>

                                    <?php elseif ($penduduk->status == "Ditolak") : ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diajukan Ke Pelayanan" checked>Diajukan
                                        Ke Pelayanan
                                    </div>
                                    <br>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Ditolak" checked>Ditolak
                                    </div>

                                    <?php else : ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diajukan Ke Pelayanan">Diajukan
                                        Ke Pelayanan
                                    </div>
                                    <br>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Ditolak">Ditolak
                                    </div>
                                    <?php endif ?>
                                </div>
                                <br>
                                <div class="form-row">
                                    <label for="alasan"><strong>Alasan</strong></label>
                                    <input type="text" name="alasan" placeholder="" autocomplete="off"
                                        class="form-control">
                                </div>

                                <?php endforeach ?>
                                <p>
                                    <hr>

                                    <button type=" submit" name="submit" class="btn btn-success "><i
                                            class="fa fa-save"></i>&nbsp;&nbsp;Ajukan</button>
                                    <a href="<?= base_url("RW/Pelayanan_ktp"); ?>" class="btn btn-info"><i
                                            class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>