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
                                    <label for="nama"><strong>NO KK</strong></label>
                                    <input type="text" name="no_KK" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $penduduk->no_KK; ?>" readonly>
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
                                    <?php if ($penduduk->status == "Diajukan Ke Kepala Desa") : ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diajukan Ke Kepala Desa"
                                            checked>Diajukan Ke Kepala Desa
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Ditolak">Ditolak
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diproses">Diproses
                                    </div>

                                    <?php elseif ($penduduk->status == "Ditolak") : ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diajukan Ke Kepala Desa">Diajukan Ke
                                        Kepala Desa
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Ditolak" checked>Ditolak
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diproses">Diproses
                                    </div>

                                    <?php elseif ($penduduk->status == "Diproses") : ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diproses" checked>Diproses
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Selesai">Selesai
                                    </div>

                                    <?php elseif ($penduduk->status == "Disetujui") : ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diproses">Diproses
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Selesai">Selesai
                                    </div>


                                    <?php else : ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diajukan Ke Kepala Desa">Diajukan Ke
                                        Kepala Desa
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Ditolak">Ditolak
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diproses">Diproses
                                    </div>
                                    <?php endif ?>
                                </div>

                                <div class="form-row">
                                    <label for="alasan"><strong>Alasan</strong></label>
                                    <input type="text" name="alasan" placeholder="" autocomplete="off"
                                        class="form-control">
                                </div>

                                <?php endforeach ?>
                                <p>
                                    <hr>
                                    <?php if ($penduduk->status == "Diajukan Ke Kepala Desa") : ?>
                                    <a btn btn-info href="#modalDelete3" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('admin/Pelayanan_ktp/pdf/' .  $penduduk->id_ktp) ?>')"
                                        class='btn btn-warning'>
                                        <i class="fa fa-print" aria-hidden="true">&nbsp;Cetak</i>
                                    </a>

                                    <?php elseif ($penduduk->status == "Ditolak") : ?>
                                    <a btn btn-info href="#modalDelete3" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('admin/Pelayanan_ktp/pdf/' .  $penduduk->id_ktp) ?>')"
                                        class='btn btn-warning'>
                                        <i class="fa fa-print" aria-hidden="true">&nbsp;Cetak</i>
                                    </a>

                                    <?php elseif ($penduduk->status == "Diajukan Ke Pelayanan") : ?>
                                    <a btn btn-info href="#modalDelete3" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('admin/Pelayanan_ktp/pdf/' .  $penduduk->id_ktp) ?>')"
                                        class='btn btn-warning'>
                                        <i class="fa fa-print" aria-hidden="true">&nbsp;Cetak</i>
                                    </a>

                                    <?php else : ?>
                                    <a href="<?= base_url("admin/Pelayanan_ktp/pdf/") . $penduduk->id_ktp; ?>"
                                        class="btn btn-warning"><i class="fa fa-print"></i>&nbsp;&nbsp;Cetak</a>

                                    <?php endif ?>
                                    <button type="submit" name="submit" class="btn btn-success "><i
                                            class="fa fa-save"></i>&nbsp;&nbsp;Ajukan</button>
                                    <a href="<?= base_url("admin/Pelayanan_ktp"); ?>" class="btn btn-info"><i
                                            class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalDelete3">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <div class="text-danger"><b>Peringatan !</b></div>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Mohon maaf data tidak dapat Dicetak, Karena Belum Disetujui oleh Kepala Desa.
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>