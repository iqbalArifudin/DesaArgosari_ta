<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">

                <div class="card">
                    <div class="card-header">
                        Edit Data Penduduk
                    </div>
                    <div class="card-body">
                        <?php if (validation_errors()): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>z
                        </div>
                        <?php endif; ?>

                        <?php foreach($pegawai as $pegawai):?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_pegawai" value="<?= $pegawai->id_pegawai;?>">

                            <div class=" form-group">
                                <label class="" for="penduduk">Nama</label>
                                <div class="input-group">
                                    <select name="id_penduduk" id="id_penduduk" class="custom-select">
                                        <option value="" selected disabled>Pilih Nama</option>
                                        <?php foreach ($penduduk1 as $j) : ?>
                                        <option value="<?= $j->id_penduduk ?>"
                                            <?= $j->id_penduduk == $pegawai->id_penduduk ? "selected" : null ?>>
                                            <?= $j->nama ?>
                                        </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <?= form_error('id_penduduk', '<small class="text-danger">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="nim">Jabatan</label>
                                <?php if($pegawai->jabatan == "Kepala Desa"): ?>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kepala Desa" checked>Kepala Desa
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

                                <?php elseif($pegawai->jabatan == "Sekretaris Desa"): ?>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kepala Desa">Kepala Desa
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Sekretaris Desa" checked> Sekretaris Desa
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

                                <?php elseif($pegawai->jabatan == "Kasi Pemerintahan"): ?>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kepala Desa">Kepala Desa
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Sekretaris Desa"> Sekretaris Desa
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kasi Pemerintahan" checked> Kasi
                                    Pemerintahan
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

                                <?php elseif($pegawai->jabatan == "Kasi Kesra"): ?>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kepala Desa">Kepala Desa
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Sekretaris Desa"> Sekretaris Desa
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kasi Pemerintahan"> Kasi
                                    Pemerintahan
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kasi Kesra" checked> Kasi Kesra
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

                                <?php elseif($pegawai->jabatan == "Kasi Pelayanan"): ?>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kepala Desa">Kepala Desa
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Sekretaris Desa"> Sekretaris Desa
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kasi Pemerintahan"> Kasi
                                    Pemerintahan
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kasi Kesra"> Kasi Kesra
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kasi Pelayanan" checked> Kasi Pelayanan
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

                                <?php elseif($pegawai->jabatan == "Kaur TU & Umum"): ?>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kepala Desa">Kepala Desa
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Sekretaris Desa"> Sekretaris Desa
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kasi Pemerintahan"> Kasi
                                    Pemerintahan
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kasi Kesra"> Kasi Kesra
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kasi Pelayanan"> Kasi Pelayanan
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kaur TU & Umum" checked> Kaur TU & Umum
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

                                <?php elseif($pegawai->jabatan == "Kaur Keuangan"): ?>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kepala Desa">Kepala Desa
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Sekretaris Desa"> Sekretaris Desa
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kasi Pemerintahan"> Kasi
                                    Pemerintahan
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
                                    <input type="radio" name="jabatan" value="Kaur Keuangan" checked> Kaur Keuangan
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

                                <?php elseif($pegawai->jabatan == "Kaur Perencanaan"): ?>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kepala Desa">Kepala Desa
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Sekretaris Desa"> Sekretaris Desa
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kasi Pemerintahan"> Kasi
                                    Pemerintahan
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
                                    <input type="radio" name="jabatan" value="Kaur Perencanaan" checked> Kaur
                                    Perencanaan
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

                                <?php elseif($pegawai->jabatan == "Kasun Pateguhan"): ?>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kepala Desa">Kepala Desa
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Sekretaris Desa"> Sekretaris Desa
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kasi Pemerintahan"> Kasi
                                    Pemerintahan
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
                                    <input type="radio" name="jabatan" value="Kaur Perencanaan"> Kaur
                                    Perencanaan
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kasun Pateguhan" checked> Kasun Pateguhan
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kasun Gentong"> Kasun Gentong
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kasun Bendrong"> Kasun Bendrong
                                </div>

                                <?php elseif($pegawai->jabatan == "Kasun Gentong"): ?>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kepala Desa">Kepala Desa
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Sekretaris Desa"> Sekretaris Desa
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kasi Pemerintahan"> Kasi
                                    Pemerintahan
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
                                    <input type="radio" name="jabatan" value="Kaur Perencanaan"> Kaur
                                    Perencanaan
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kasun Pateguhan"> Kasun Pateguhan
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kasun Gentong" checked> Kasun Gentong
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kasun Bendrong"> Kasun Bendrong
                                </div>


                                <?php else: ?>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kepala Desa">Kepala Desa
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Sekretaris Desa"> Sekretaris Desa
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kasi Pemerintahan"> Kasi
                                    Pemerintahan
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
                                    <input type="radio" name="jabatan" value="Kaur Perencanaan"> Kaur
                                    Perencanaan
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kasun Pateguhan"> Kasun Pateguhan
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kasun Gentong"> Kasun Gentong
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jabatan" value="Kasun Bendrong" checked> Kasun Bendrong
                                </div>
                                <?php endif ?>
                            </div>


                            <div class="form-group">
                                <label for="merk">No Hp</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp"
                                    value="<?=$pegawai->no_hp;?>">
                            </div>

                            <label for="file_penduduk">Foto</label>
                            <br>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto" name="foto">
                                <label class="custom-file-label" for="customFile"><?= $pegawai->foto ?></label>
                                <?= form_error('foto', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <br>
                            <br>
                            <?php endforeach ?>
                            <button type="submit" class=" btn btn-success"><i
                                    class="fas fa-save"></i>&nbsp;Simpan</button>
                            <a href="<?=base_url("pegawai/pegawai");?>" class="btn btn-info">Kembali</a>
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