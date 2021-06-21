<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-user"></i>
    Profil
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <?= $this->session->flashdata('message'); ?>
                        <div class="card-header">
                            <center><strong>Profil Penduduk</strong></center>
                        </div>
                        <div class="card-body">
                            <?php foreach ($penduduk as $penduduk) : ?>
                            <form action="" method="post" enctype="multipart/form-data">

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <img src="<?= base_url('assets/foto_penduduk/') . $penduduk->foto ?>"
                                            class="card-img-top" style="height: 370px;">
                                        <p>
                                        <div class="">
                                            <center>
                                                <a class='btn btn-outline-secondary'
                                                    href="<?= base_url() . 'RW/Profil/edit/' . $penduduk->id_penduduk ?>">
                                                    <i class="fas fa-edit" aria-hidden="true"><span> Edit Foto
                                                            Profil</span></i>
                                                </a>
                                            </center>
                                        </div>
                                        <hr>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Nama</strong></label>
                                        <input type="text" name="NIK" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $penduduk->nama; ?>" readonly>
                                        <br>
                                        <label for="nama"><strong>NO KK</strong></label>
                                        <input type="text" name="nama" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $penduduk->no_KK; ?>" readonly>
                                        <br>
                                        <label for="nama"><strong>NIK</strong></label>
                                        <input type="text" name="NIK" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $penduduk->NIK; ?>" readonly>
                                        <br>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nama"><strong>Tempat</strong></label>
                                                <input type="text" name="nama" placeholder="" autocomplete="off"
                                                    class="form-control" required
                                                    value="<?= $penduduk->tempat_lahir; ?>" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="nama"><strong>Tanggal Lahir</strong></label>
                                                <input type="text" name="NIK" placeholder="" autocomplete="off"
                                                    class="form-control" required
                                                    value="<?= $penduduk->tanggal_lahir; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Agama</strong></label>
                                        <input type="text" name="nama" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $penduduk->agama; ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Status</strong></label>
                                        <input type="text" name="NIK" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $penduduk->status_perkawinan; ?>"
                                            readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Pekerjaan</strong></label>
                                        <input type="text" name="nama" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $penduduk->pekerjaan; ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Gol Darah</strong></label>
                                        <input type="text" name="NIK" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $penduduk->gol_darah; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Jenis Kelamin</strong></label>
                                        <input type="text" name="nama" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $penduduk->jenis_kelamin; ?>"
                                            readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Alamat</strong></label>
                                        <input type="text" name="NIK" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $penduduk->alamat; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>RT</strong></label>
                                        <input type="text" name="nama" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $penduduk->RT; ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>RW</strong></label>
                                        <input type="text" name="NIK" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $penduduk->RW; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Desa</strong></label>
                                        <input type="text" name="nama" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $penduduk->desa; ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Kecamatan</strong></label>
                                        <input type="text" name="NIK" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $penduduk->Kecamatan; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Kabupaten / Kota</strong></label>
                                        <input type="text" name="nama" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $penduduk->kabupaten; ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Kode Pos</strong></label>
                                        <input type="text" name="NIK" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $penduduk->kode_pos; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Provinsi</strong></label>
                                        <input type="text" name="nama" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $penduduk->provinsi; ?>" readonly>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Hak Akses</strong></label>
                                        <input type="text" name="nama" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $penduduk->hak_akses; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-row ">
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Password</strong></label>
                                        <input type="password" name="NIK" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $penduduk->password; ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Edit Password</strong></label>
                                        <br>
                                        <a class='btn btn-outline-secondary'
                                            href="<?= base_url() . 'RW/Profil/changePassword/' . $penduduk->id_penduduk ?>">
                                            <i class="fas fa-edit" aria-hidden="true"><span> Edit
                                                    Password</span></i>
                                        </a>
                                    </div>

                                </div>
                                <p>
                            </form>

                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>