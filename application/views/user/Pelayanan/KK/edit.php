<!DOCTYPE html>
<html lang="en">
<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-address-card"></i>
    Pelayanan KK &nbsp; &nbsp; > &nbsp; &nbsp; <i class="fas fa-edit"></i>
    Edit Data KK
</div>

<body id="page-top">
    <div id="wrapper">

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content" data-url="<?= base_url('penjualan') ?>">
                <div class="container-fluid">
                    <div class="clearfix">
                        <div class="float-left">
                            <h1 class="h3 m-0 text-gray-800">Tambah Data Kartu Keluarga</h1>
                        </div>
                        <div class="float-right">
                            <a href="<?= base_url('user/LayananKK') ?>" class="btn btn-primary btn-sm"><i
                                    class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <?= $this->session->flashdata('message'); ?>
                            <div class="card shadow">
                                <center>
                                    <div class="card-header"><strong>Isi Form Dibawah Ini!</strong></div>
                                </center>
                                <div class="card-body">
                                    <?php foreach ($kk1 as $k) : ?>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="id_kepala_kel" value="<?= $k->id_kepala_kel; ?>">
                                        <?php endforeach ?>
                                        <p>
                                        <h5>Data Kepala Keluarga</h5>
                                        <hr>
                                        <div class="form-row">
                                            <div class="form-group col-6">
                                                <label>Nama Lengkap</label>
                                                <input type="text" name="nama_kpl" id="nama_kpl" autocomplete="off"
                                                    class="form-control" value="<?= $k->nama_kpl; ?>" required>
                                            </div>
                                            <div class="form-group col-6">
                                                <label>NIK</label>
                                                <input type="text" name="NIK_kpl" id="NIK_kpl" autocomplete="off"
                                                    class="form-control" value="<?= $k->NIK_kpl; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-6">
                                                <label>Alamat</label>
                                                <input type="text" name="alamat_kpl" id="alamat_kpl" autocomplete="off"
                                                    class="form-control" value="<?= $k->alamat_kpl; ?>" required>
                                            </div>
                                            <div class="form-group col-4">
                                                <label>Kode Pos</label>
                                                <input type="text" name="kode_pos_kpl" id="kode_pos_kpl"
                                                    autocomplete="off" class="form-control"
                                                    value="<?= $k->kode_pos_kpl; ?>" required>
                                            </div>
                                            <div class="form-group col-1">
                                                <label>RT</label>
                                                <input type="text" name="RT_kpl" id="RT_kpl" autocomplete="off"
                                                    class="form-control" value="<?= $k->RT_kpl; ?>" required>
                                            </div>
                                            <div class="form-group col-1">
                                                <label>RW</label>
                                                <input type="text" name="RW_kpl" id="RW_kpl" autocomplete="off"
                                                    class="form-control" value="<?= $k->RW_kpl; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-3">
                                                <label>Kelurahan</label>
                                                <input type="text" name="kelurahan_kpl" id="kelurahan_kpl"
                                                    autocomplete="off" class="form-control"
                                                    value="<?= $k->kelurahan_kpl; ?>" required>
                                            </div>
                                            <div class="form-group col-3">
                                                <label>Kecamatan</label>
                                                <input type="text" name="kecamatan_kpl" id="kecamatan_kpl"
                                                    autocomplete="off" class="form-control"
                                                    value="<?= $k->kecamatan_kpl; ?>" required>
                                            </div>
                                            <div class="form-group col-3">
                                                <label>Kabupaten / Kota</label>
                                                <input type="text" name="kabupaten_kpl" id="kabupaten_kpl"
                                                    autocomplete="off" class="form-control"
                                                    value="<?= $k->kabupaten_kpl; ?>" required>
                                            </div>
                                            <div class="form-group col-3">
                                                <label>Provinsi</label>
                                                <input type="text" name="provinsi_kpl" id="provinsi_kpl"
                                                    autocomplete="off" class="form-control"
                                                    value="<?= $k->provinsi_kpl; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-6">
                                                <div class="form-row">
                                                    <label for="satuan">Foto Surat Nikah
                                                        Laki-Laki</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="suratnikah_l"
                                                            name="suratnikah_l">
                                                        <label class="custom-file-label"
                                                            for="customFile"><?= $k->suratnikah_l ?></label>
                                                        <?= form_error('suratnikah_l', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <p>
                                                <div class="form-row">
                                                    <img src="<?= base_url('assets/foto_kk/') . $k->suratnikah_l ?>"
                                                        style="width:400px;" height="500px">
                                                </div>
                                            </div>

                                            <div class="form-group col-6">
                                                <div class="form-row">
                                                    <label for="satuan">Foto Surat Nikah
                                                        Perempuan</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="suratnikah_p"
                                                            name="suratnikah_p">
                                                        <label class="custom-file-label"
                                                            for="customFile"><?= $k->suratnikah_p ?></label>
                                                        <?= form_error('suratnikah_p', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <p>
                                                <div class="form-row">
                                                    <img src="<?= base_url('assets/foto_kk/') . $k->suratnikah_p ?>"
                                                        style="width:400px;" height="500px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label for="satuan">Surat Pengantar RT /RW</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="surat_rt_rw"
                                                    name="surat_rt_rw">
                                                <label class="custom-file-label"
                                                    for="customFile"><?= $k->surat_rt_rw ?></label>
                                                <?= form_error('surat_rt_rw', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <br>
                                            <div class="form-row">
                                                <img src="<?= base_url('assets/foto_kk/') . $k->surat_rt_rw ?>"
                                                    style="width:400px;" height="500px">
                                            </div>
                                        </div>
                                        <p>
                                        <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-success ">Submit</button>
                                            <button type="reset" class="btn btn-danger"><i
                                                    class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
                                        </div>




                                        <p>
                                            <hr>
                                            <center>
                                                <h2>Data Keluarga</h2>
                                            </center>
                                            <hr>
                                        <table class="table table-bordered" id="keranjang">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>NIK</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Status</th>
                                                    <th>Agama</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                            <tfoot>
                                                <?php foreach ($keluarga as $kk) : ?>
                                                <tr>
                                                    <td><?= $kk->nama_kel ?></td>
                                                    <td><?= $kk->NIK_kel ?></td>
                                                    <td><?= $kk->tanggal_lahir ?></td>
                                                    <td><?= $kk->jenis_kelamin ?></td>
                                                    <td><?= $kk->status_perkawinan ?></td>
                                                    <td><?= $kk->agama ?></td>
                                                </tr>
                                                <?php endforeach ?>
                                            </tfoot>
                                        </table>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});
</script>