<!DOCTYPE html>
<html lang="en">
<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-address-card"></i>
    Pelayanan KK &nbsp; &nbsp; > &nbsp; &nbsp; <i class="fas fa-edit"></i>
    Edit Data Keluarga
</div>

<body id="page-top">
    <div id="wrapper">

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content" data-url="<?= base_url('penjualan') ?>">
                <div class="container-fluid">
                    <div class="clearfix">
                        <div class="float-right">
                            <a href="<?= base_url('user/LayananKK/') ?>" class="btn btn-primary btn-sm"><i
                                    class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <div class="card shadow">
                                <center>
                                    <div class="card-header"><strong>Isi Form Dibawah Ini!</strong></div>
                                </center>
                                <div class="card-body">
                                    <?php foreach ($keluarga as $j) : ?>
                                    <form action="<?= base_url('user/LayananKK/editKel/') . $this->uri->segment(4) ?>"
                                        method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="id_keluarga" value="<?= $j->id_keluarga; ?>">
                                        <?php endforeach ?>
                                        <p>
                                        <h5>Data Keluarga</h5>
                                        <hr>
                                        <div class="form-row">
                                            <div class="form-group col-6">
                                                <label>Nama Lengkap</label>
                                                <input type="text" name="nama_kel" id="nama_kel" autocomplete="off"
                                                    class="form-control" value="<?= $j->nama_kel; ?>" required>
                                            </div>
                                            <div class="form-group col-6">
                                                <label>NIK</label>
                                                <input type="text" name="NIK_kel" id="NIK_kel" autocomplete="off"
                                                    class="form-control" value="<?= $j->NIK_kel; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-6">
                                                <label>Tempat Lahir</label>
                                                <input type="text" name="tempat_lahir" id="tempat_lahir"
                                                    autocomplete="off" class="form-control"
                                                    value="<?= $j->tempat_lahir; ?>" required>
                                            </div>
                                            <div class="form-group col-6">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                                    autocomplete="off" class="form-control"
                                                    value="<?= $j->tanggal_lahir; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-6">
                                                <label for="agama">Agama</label>
                                                <select name="agama" id="agama" class="form-control" required>
                                                    <option value="" selected disabled>Pilih Agama</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Khonghucu">Khonghucu</option>
                                                    <option value="Katolik">Katolik</option>
                                                    <option value="Buddha">Buddha</option>
                                                    <option value="Protestan">Protestan</option>
                                                    <option value="Hindu">Hindu</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control"
                                                    required>
                                                    <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                                    <option value="Laki - Laki">Laki - Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-6">
                                                <label>Pendidikan</label>
                                                <input type="text" name="pendidikan" id="pendidikan" autocomplete="off"
                                                    class="form-control" value="<?= $j->pendidikan; ?>" required>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="status_perkawinan">Status</label>
                                                <select name="status_perkawinan" id="status_perkawinan"
                                                    class="form-control" required>
                                                    <option value="" selected disabled>Pilih Status Perkawinan</option>
                                                    <option value="Kawin">Kawin</option>
                                                    <option value="Belum Kawin">Belum Kawin</option>
                                                </select>
                                            </div>
                                        </div>



                                        <!-- <div class="form-group">
                                            <label for="nim">Status</label>
                                            <?php if ($penduduk->status_perkawinan == "Belum Kawin") : ?>
                                            <div class="form-check">
                                                <input type="radio" name="status_perkawinan" value="Belum Kawin"
                                                    checked>Belum Kawin
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" name="status_perkawinan" value="Kawin"> Kawin
                                            </div>

                                            <?php else : ?>
                                            <div class="form-check">
                                                <input type="radio" name="status_perkawinan" value="Belum Kawin">Belum
                                                Kawin
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" name="status_perkawinan" value="Kawin" checked>
                                                Kawin
                                            </div>
                                            <?php endif ?>
                                        </div> -->


                                        <div class="form-row">
                                            <div class="form-group col-12">
                                                <label>Pekerjaan</label>
                                                <input type="text" name="pekerjaan" id="pekerjaan" autocomplete="off"
                                                    class="form-control" value="<?= $j->pekerjaan; ?>" required>
                                            </div>
                                            <p>
                                            <div class="form-group">
                                                <button type="submit" name="submit"
                                                    class="btn btn-success ">Submit</button>
                                                <button type="reset" class="btn btn-danger"><i
                                                        class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
                                            </div>
                                        </div>
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