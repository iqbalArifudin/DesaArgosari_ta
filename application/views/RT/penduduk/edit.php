<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-fw fa-table"></i>
    Data Penduduk &nbsp; &nbsp; > &nbsp; &nbsp; <i class="fas fa-envelope"></i>&nbsp; &nbsp;Edit penduduk
</div>
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
                        <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>z
                        </div>
                        <?php endif; ?>

                        <?php foreach ($penduduk as $penduduk) : ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_penduduk" value="<?= $penduduk->id_penduduk; ?>">

                            <div class="form-group">
                                <label for="merk">NIK</label>
                                <input type="text" class="form-control" id="NIK" name="NIK"
                                    value="<?= $penduduk->NIK; ?>">
                            </div>

                            <div class="form-group">
                                <label for="merk">No KK</label>
                                <input type="text" class="form-control" id="no_KK" name="no_KK"
                                    value="<?= $penduduk->no_KK; ?>">
                            </div>

                            <div class="form-group">
                                <label for="merk">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="<?= $penduduk->nama; ?>">
                            </div>

                            <div class="form-group">
                                <label for="merk">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                    value="<?= $penduduk->tempat_lahir; ?>">
                            </div>

                            <div class="form-group">
                                <label for="merk">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                    value="<?= $penduduk->tanggal_lahir; ?>">
                            </div>

                            <div class="form-group">
                                <label for="nim">Agama</label>
                                <?php if ($penduduk->agama == "Islam") : ?>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Islam" checked>Islam
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Khonghucu"> Khonghucu
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Katolik"> Katolik
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Buddha"> Buddha
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Protestan"> Protestan
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Hindu"> Hindu
                                </div>

                                <?php elseif ($penduduk->agama == "Khonghucu") : ?>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Islam">Islam
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Khonghucu" checked> Khonghucu
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Katolik"> Katolik
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Buddha"> Buddha
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Protestan"> Protestan
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Hindu"> Hindu
                                </div>


                                <?php elseif ($penduduk->agama == "Katolik") : ?>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Islam">Islam
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Khonghucu"> Khonghucu
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Katolik" checked> Katolik
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Buddha"> Buddha
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Protestan"> Protestan
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Hindu"> Hindu
                                </div>

                                <?php elseif ($penduduk->agama == "Buddha") : ?>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Islam">Islam
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Khonghucu"> Khonghucu
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Katolik"> Katolik
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Buddha" checked> Buddha
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Protestan"> Protestan
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Hindu"> Hindu
                                </div>

                                <?php elseif ($penduduk->agama == "Protestan") : ?>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Islam">Islam
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Khonghucu"> Khonghucu
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Katolik"> Katolik
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Buddha"> Buddha
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Protestan" checked> Protestan
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Hindu"> Hindu
                                </div>

                                <?php else : ?>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Islam">Islam
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Khonghucu"> Khonghucu
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Katolik"> Katolik
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Buddha"> Buddha
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Protestan"> Protestan
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="agama" value="Hindu" checked> Hindu
                                </div>
                                <?php endif ?>
                            </div>

                            <div class="form-group">
                                <label for="nim">Status</label>
                                <?php if ($penduduk->status_perkawinan == "Belum Kawin") : ?>
                                <div class="form-check">
                                    <input type="radio" name="status_perkawinan" value="Belum Kawin" checked>Belum Kawin
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="status_perkawinan" value="Kawin"> Kawin
                                </div>

                                <?php else : ?>
                                <div class="form-check">
                                    <input type="radio" name="status_perkawinan" value="Belum Kawin">Belum Kawin
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="status_perkawinan" value="Kawin" checked> Kawin
                                </div>
                                <?php endif ?>
                            </div>

                            <div class="form-group">
                                <label for="merk">Pekerjaan</label>
                                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                                    value="<?= $penduduk->pekerjaan; ?>">
                            </div>

                            <div class="form-group">
                                <label for="nim">Gol Darah</label>
                                <?php if ($penduduk->gol_darah == "AB") : ?>
                                <div class="form-check">
                                    <input type="radio" name="gol_darah" value="AB" checked>AB
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gol_darah" value="O"> O
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gol_darah" value="A">A
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gol_darah" value="B"> B
                                </div>

                                <?php elseif ($penduduk->gol_darah == "O") : ?>
                                <div class="form-check">
                                    <input type="radio" name="gol_darah" value="AB">AB
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gol_darah" value="O" checked> O
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gol_darah" value="A">A
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gol_darah" value="B"> B
                                </div>

                                <?php elseif ($penduduk->gol_darah == "A") : ?>
                                <div class="form-check">
                                    <input type="radio" name="gol_darah" value="AB">AB
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gol_darah" value="O"> O
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gol_darah" value="A" checked>A
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gol_darah" value="B"> B
                                </div>

                                <?php else : ?>
                                <div class="form-check">
                                    <input type="radio" name="gol_darah" value="AB">AB
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gol_darah" value="O"> O
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gol_darah" value="A">A
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gol_darah" value="B" checked> B
                                </div>
                                <?php endif ?>
                            </div>

                            <div class="form-group">
                                <label for="nim">Jenis Kelamin</label>
                                <?php if ($penduduk->jenis_kelamin == "Laki - Laki") : ?>
                                <div class="form-check">
                                    <input type="radio" name="jenis_kelamin" value="Laki - Laki" checked>LAKI - LAKI
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jenis_kelamin" value="Perempuan"> PEREMPUAN
                                </div>

                                <?php else : ?>
                                <div class="form-check">
                                    <input type="radio" name="jenis_kelamin" value="Laki - Laki">LAKI - LAKI
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jenis_kelamin" value="Perempuan" checked> PEREMPUAN
                                </div>
                                <?php endif ?>
                            </div>

                            <div class="form-group">
                                <label for="merk">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    value="<?= $penduduk->alamat; ?>">
                            </div>

                            <div class="form-group">
                                <label for="merk">RT</label>
                                <input type="text" class="form-control" id="RT" name="RT" value="<?= $penduduk->RT; ?>">
                            </div>

                            <div class="form-group">
                                <label for="merk">RW</label>
                                <input type="text" class="form-control" id="RW" name="RW" value="<?= $penduduk->RW; ?>">
                            </div>

                            <div class="form-group">
                                <label for="merk">Desa</label>
                                <input type="text" class="form-control" id="desa" name="desa"
                                    value="<?= $penduduk->desa; ?>">
                            </div>

                            <div class="form-group">
                                <label for="merk">Kecamatan</label>
                                <input type="text" class="form-control" id="Kecamatan" name="Kecamatan"
                                    value="<?= $penduduk->Kecamatan; ?>">
                            </div>

                            <label for="file_penduduk">Foto</label>
                            <br>
                            <!-- <?= $penduduk->foto ?> -->
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto" name="foto">
                                <label class="custom-file-label" for="customFile"><?= $penduduk->foto ?></label>
                                <?= form_error('foto', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <br>
                            <p>

                            <div class="form-group">
                                <label for="nim">Hak Akses</label>
                                <?php if ($penduduk->hak_akses == "Admin") : ?>
                                <div class="form-check">
                                    <input type="radio" name="hak_akses" value="Admin" checked>ADMIN
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="hak_akses" value="Pegawai"> PEGAWAI
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="hak_akses" value="Penduduk"> PENDUDUK
                                </div>

                                <?php elseif ($penduduk->hak_akses == "Pegawai") : ?>
                                <div class="form-check">
                                    <input type="radio" name="hak_akses" value="Admin">ADMIN
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="hak_akses" value="Pegawai" checked> PEGAWAI
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="hak_akses" value="Penduduk"> PENDUDUK
                                </div>

                                <?php else : ?>
                                <div class="form-check">
                                    <input type="radio" name="hak_akses" value="Admin">ADMIN
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="hak_akses" value="Pegawai"> PEGAWAI
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="hak_akses" value="Penduduk" checked> PENDUDUK
                                </div>
                                <?php endif ?>
                            </div>

                            <br>
                            <br>
                            <?php endforeach ?>
                            <button type="submit" name="submit" class="btn btn-success "><i
                                    class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                            <a href="<?= base_url("RT/penduduk"); ?>" class="btn btn-info"><i
                                    class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
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
<!-- /.content-wrapper -->