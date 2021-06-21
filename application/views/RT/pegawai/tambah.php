<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            Form Tambah Data Pegawai
                        </div>
                        <div class="card-body">
                            <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                            <?php endif; ?>
                            <form action="" method="post" enctype="multipart/form-data">

                                <div class=" form-group">
                                    <label class="" for="penduduk">Nama</label>
                                    <div class="input-group">
                                        <select name="id_penduduk" id="id_penduduk" class="custom-select">
                                            <option value="" selected disabled>Pilih Nama</option>
                                            <?php foreach ($penduduk1 as $j) : ?>
                                            <option value="<?= $j->id_penduduk ?>"><?= $j->nama ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <?= form_error('id_penduduk', '<small class="text-danger">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="nim">Jabatan</label>
                                    <div class="form-check">
                                        <input type="radio" name="jabatan" value="Kepala Desa"> Kepala Desa
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="jabatan" value="Sekretaris Desa"> Sekretaris Desa
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="jabatan" value="Kasi Pemerintahan"> Kasi Pemerintahan
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="jabatan" value="Kasi Kesra"> Kasi Kesra
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="jabatan" value="Kasi Pelayanan"> Kasi Pelayanan
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="jabatan" value="Kaur TU & Umum"> Kaur TU & Umum
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="jabatan" value="Kaur Keuangan"> Kaur Keuangan
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="jabatan" value="Kaur Perencanaan"> Kaur Perencanaan
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="jabatan" value="Kasun Pateguhan"> Kasun Pateguhan
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="jabatan" value="Kasun Gentong"> Kasun Gentong
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="jabatan" value="Kasun Bendrong"> Kasun Bendrong
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nim">No Hp</label>
                                    <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                                </div>

                                <label for="">Foto</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto" name="foto" required
                                        autofocus>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                    <!-- <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                </div>
                                <br>

                                <button type="submit" name="submit" class="btn btn-success ">Submit</button>
                                <a href="<?= base_url("RT/pegawai"); ?>" class="btn btn-info">Cancel</a>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->