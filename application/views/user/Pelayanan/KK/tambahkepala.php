<!DOCTYPE html>
<html lang="en">
<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-address-card"></i>
    Pelayanan KK &nbsp; &nbsp; > &nbsp; &nbsp; <i class="fas fa-plus-square"></i>
    Tambah Data KK
</div>

<body id="page-top">
    <div id="wrapper">

        <div id="content-wrapper" class="d-flex flex-column">
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
                                <?php foreach ($penduduk as $j) : ?>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <h4>Penanggung Jawab</h4>
                                    <hr>
                                    <div class="form-row">
                                        <label>No Kartu Keluarga</label>
                                        <input type="text" name="nama" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $j->no_KK; ?>" readonly>
                                    </div>
                                    <p>
                                    <div class="form-row">
                                        <div class="form-group col-6">
                                            <label>Nama</label>
                                            <input type="text" name="nama" placeholder="" autocomplete="off"
                                                class="form-control" required value="<?= $j->nama; ?>" readonly>
                                        </div>
                                        <div class="form-group col-6">
                                            <label>NIK</label>
                                            <input type="text" name="nama" placeholder="" autocomplete="off"
                                                class="form-control" required value="<?= $j->NIK; ?>" readonly>
                                        </div>
                                    </div>
                                    <?php endforeach ?>
                                    <p>
                                        <hr>
                                    <h4>Data Kepala Keluarga</h4>
                                    <hr>
                                    <div class="form-row">
                                        <div class="form-group col-6">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="nama_kpl" class="form-control" id="nama_kpl">
                                        </div>
                                        <div class="form-group col-6">
                                            <label>NIK</label>
                                            <input type="text" name="NIK_kpl" class="form-control" id="NIK_kpl">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-6">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat_kpl" class="form-control" id="alamat_kpl">
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Kode Pos</label>
                                            <input type="text" name="kode_pos_kpl" class="form-control"
                                                id="kode_pos_kpl">
                                        </div>
                                        <div class="form-group col-1">
                                            <label>RT</label>
                                            <input type="text" name="RT_kpl" class="form-control" id="RT_kpl">
                                        </div>
                                        <div class="form-group col-1">
                                            <label>RW</label>
                                            <input type="text" name="RW_kpl" class="form-control" id="RW_kpl">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-3">
                                            <label>Kelurahan</label>
                                            <input type="text" name="kelurahan_kpl" class="form-control"
                                                id="kelurahan_kpl">
                                        </div>
                                        <div class="form-group col-3">
                                            <label>Kecamatan</label>
                                            <input type="text" name="kecamatan_kpl" class="form-control"
                                                id="kecamatan_kpl">
                                        </div>
                                        <div class="form-group col-3">
                                            <label>Kabupaten / Kota</label>
                                            <input type="text" name="kabupaten_kpl" class="form-control"
                                                id="kabupaten_kpl">
                                        </div>
                                        <div class="form-group col-3">
                                            <label>Provinsi</label>
                                            <input type="text" name="provinsi_kpl" class="form-control"
                                                id="provinsi_kpl">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-6">
                                            <label for="satuan">Upload Foto Surat Nikah Laki-Laki</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="suratnikah_l"
                                                    name="suratnikah_l" required autofocus>
                                                <label class="custom-file-label" for="customFile">Choose
                                                    file</label>
                                                <!-- <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                            </div>
                                        </div>

                                        <div class="form-group col-6">
                                            <label for="satuan">Upload Foto Surat Nikah Perempuan</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="suratnikah_p"
                                                    name="suratnikah_p" required autofocus>
                                                <label class="custom-file-label" for="customFile">Choose
                                                    file</label>
                                                <!-- <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                            </div>
                                        </div>
                                    </div>
                                    <p>

                                    <div class="form-row">
                                        <div class="form-group col-6">
                                            <label for="satuan">Upload Foto Kartu Keluarga Suami</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kk1" name="kk1"
                                                    required autofocus>
                                                <label class="custom-file-label" for="customFile">Choose
                                                    file</label>
                                                <!-- <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                            </div>
                                        </div>

                                        <div class="form-group col-6">
                                            <label for="satuan">Upload Foto Kartu Keluarga Istri</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kk2" name="kk2"
                                                    required autofocus>
                                                <label class="custom-file-label" for="customFile">Choose
                                                    file</label>
                                                <!-- <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label for="satuan">Upload Surat Pengantar RT / RW</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="surat_rt_rw"
                                                name="surat_rt_rw" required autofocus>
                                            <label class="custom-file-label" for="customFile">Choose
                                                file</label>
                                            <!-- <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-success "><i
                                                class="fa fa-save"></i>&nbsp;&nbsp;Submit</button>
                                        <button type="reset" class="btn btn-danger"><i
                                                class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>