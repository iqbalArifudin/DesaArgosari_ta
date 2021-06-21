<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-address-card"></i>
    Pelayanan Kartu Keluarga &nbsp; &nbsp; > &nbsp; &nbsp; <i class="fas fa-eye"></i>
    Detail
</div>
<div class="row justify-content-center">
    <div class="col">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <div class="card-header">
                            <center><strong>Detail</strong></center>
                        </div>
                        <div class="card-body">
                            <?php foreach ($kepala as $k) : ?>

                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_kepala_kel" value="<?= $k->id_kepala_kel; ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Nama Yang Mengajukan</strong></label>
                                        <input type="text" name="nama" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $k->nama; ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="NIK"><strong>NIK</strong></label>
                                        <input type="text" name="NIK" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $k->NIK; ?>" readonly>
                                    </div>
                                </div>
                                <p>
                                <div class="card-header">
                                    <center><strong>Detail Kepala Keluarga</strong></center>
                                </div>
                                <p>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama_kpl"><strong>Nama Kepala Keluarga</strong></label>
                                        <input type="text" name="nama_kpl" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $k->nama_kpl; ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="NIK_kpl"><strong>NIK Kepala Keluarga</strong></label>
                                        <input type="text" name="NIK_kpl" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $k->NIK_kpl; ?>" readonly>
                                    </div>
                                </div>


                                <div class="form-row">
                                    <label for="alamat_kpl"><strong>Alamat</strong></label>
                                    <input type="text" name="alamat_kpl" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $k->alamat_kpl; ?>" readonly>
                                </div>
                                <p>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>RT</strong></label>
                                        <input type="text" name="RT_kpl" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $k->RT_kpl; ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>RW</strong></label>
                                        <input type="text" name="RW_kpl" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $k->RW_kpl; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Kelurahan</strong></label>
                                        <input type="text" name="kelurahan_kpl" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $k->kelurahan_kpl; ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Kecamatan</strong></label>
                                        <input type="text" name="kecamatan_kpl" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $k->kecamatan_kpl; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Kabupaten</strong></label>
                                        <input type="text" name="kabupaten_kpl" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $k->kabupaten_kpl; ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Provinsi</strong></label>
                                        <input type="text" name="provinsi_kpl" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $k->provinsi_kpl; ?>" readonly>
                                    </div>
                                </div>
                                <p>
                                <div class="card-header">
                                    <center><strong>Detail Anggota Keluarga</strong></center>
                                </div>
                                <p>
                                <table class="table table-bordered" id="keranjang">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>NIK</th>
                                            <th>Tempat / Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Agama</th>
                                            <th>Status</th>
                                            <th>Pendidikan</th>
                                            <th>Pekerjaan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                    <tfoot>
                                        <?php foreach ($kk as $kk) : ?>
                                        <tr>
                                            <td><?= $kk->nama_kel ?></td>
                                            <td><?= $kk->NIK_kel ?></td>
                                            <td><?= $kk->tempat_lahir ?> / <?= $kk->tanggal_lahir ?></td>
                                            <td><?= $kk->jenis_kelamin ?></td>
                                            <td><?= $kk->agama ?></td>
                                            <td><?= $kk->status_perkawinan ?></td>
                                            <td><?= $kk->pekerjaan ?></td>
                                            <td><?= $kk->pendidikan ?></td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tfoot>
                                </table>

                                <br>
                                <div class="form-row">
                                    <label for="nama"><strong>Tanggal Mengajukan</strong></label>
                                    <input type="text" name="nama" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $k->tgl_mengajukan; ?>" readonly>
                                </div>
                                <br>
                                <div class="form-row">
                                    <label for="nama"><strong>Status</strong></label>
                                    <input type="text" name="status" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $k->status; ?>" readonly>
                                </div>
                                <br>
                                <div class="form-row">
                                    <label for="nama"><strong>Alasan</strong></label>
                                    <input type="text" name="nama" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $k->alasan; ?>" readonly>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="nim"><strong>Ajukan</strong></label>
                                    <?php if ($k->status == "Diajukan Ke Ketua RW") : ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diajukan Ke Ketua RW" checked>Diajukan
                                        Ke Ketua RW
                                    </div>
                                    <br>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Ditolak">Ditolak
                                    </div>

                                    <?php elseif ($k->status == "Ditolak") : ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diajukan Ke Ketua RW">Diajukan
                                        Ke Ketua RW
                                    </div>
                                    <br>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Ditolak" checked>Ditolak
                                    </div>

                                    <?php else : ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diajukan Ke Ketua RW">Diajukan
                                        Ke Ketua RW
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
                                <br>
                                <div class="form-row">
                                    <label for="nama"><strong>Surat Nikah Laki - Laki</strong></label>
                                </div>
                                <img src="<?= base_url('assets/foto_kk/') . $k->suratnikah_l ?>" class="card-img"
                                    style="width: 50%;">
                                <br>
                                <hr>
                                <div class="form-row">
                                    <label for="nama"><strong>Surat Nikah Perempuan</strong></label>
                                </div>
                                <img src="<?= base_url('assets/foto_kk/') . $k->suratnikah_p ?>" class="card-img"
                                    style="width: 50%;">
                                <br>
                                <hr>
                                <div class="form-row">
                                    <label for="nama"><strong>Kartu Keluarga Suami</strong></label>
                                </div>
                                <img src="<?= base_url('assets/foto_kk/') . $k->kk1 ?>" class="card-img"
                                    style="width: 50%;">
                                <br>
                                <hr>
                                <div class="form-row">
                                    <label for="nama"><strong>Kartu Keluarga Istri</strong></label>
                                </div>
                                <img src="<?= base_url('assets/foto_kk/') . $k->kk2 ?>" class="card-img"
                                    style="width: 50%;">
                                <hr>
                                <div class="form-row">
                                    <label for="nama"><strong>Surat Pengantar RT / RW</strong></label>
                                </div>
                                <img src="<?= base_url('assets/foto_kk/') . $k->surat_rt_rw ?>" class="card-img"
                                    style="width: 50%;">
                                <br>
                                <?php endforeach ?>
                                <p>
                                    <hr>
                                    <button type=" submit" name="submit" class="btn btn-success "><i
                                            class="fa fa-save"></i>&nbsp;&nbsp;Ajukan</button>
                                    <a href="<?= base_url("RT/Pelayanan_KK/") ?>" class="btn btn-info"><i
                                            class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>