<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-fw fa-table"></i>
    Data Penduduk
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <a class='btn btn-primary' href="penduduk/tambahpenduduk">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        <span>
                            Tambah
                        </span>
                    </a>
                    <p>
                    <table id="dataTable" class="table table-bordered">
                        <thead class="table table-bordered">
                            <tr>
                                <th>NO</th>
                                <th>NIK</th>
                                <th>NAMA</th>
                                <th>NO KK</th>
                                <th>JENIS KELAMIN</th>
                                <th>AKSES</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($penduduk1 as $penduduk) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $penduduk->NIK ?></td>
                                <td><?= $penduduk->nama ?></td>
                                <td><?= $penduduk->no_KK ?></td>
                                <!-- <td><?= $penduduk->tempat_lahir ?></td>
                                <td><?= $penduduk->tanggal_lahir ?></td>
                                <td><?= $penduduk->agama ?></td>
                                <td><?= $penduduk->status_perkawinan ?></td>
                                <td><?= $penduduk->pekerjaan ?></td>
                                <td><?= $penduduk->gol_darah ?></td> -->
                                <td><?= $penduduk->jenis_kelamin ?></td>
                                <td><?= $penduduk->hak_akses ?></td>
                                <!-- <td><?= $penduduk->desa ?></td> -->
                                <!-- <td><img src="<?= base_url('assets/foto_penduduk/') . $penduduk->foto ?>"
                                        style="width:50px; height:50px;"></td>
                                <td><?= $penduduk->password ?></td> -->
                                <td>

                                    <?php if ($penduduk->hak_akses == "Admin") : ?>
                                    <a btn btn-info href="#modalDelete2" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('admin/penduduk/hapus/' . $penduduk->id_penduduk) ?>')"
                                        class='btn btn-danger'>
                                        <i class="fa fa-trash" aria-hidden="true">&nbsp;Hapus</i>
                                    </a>

                                    <?php else : ?>
                                    <a class='btn btn-danger' href="#modalDelete" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('admin/penduduk/hapus/' . $penduduk->id_penduduk) ?>')"
                                        class='btn btn-danger btn-circle'>
                                        <i class="fa fa-trash" aria-hidden="true">&nbsp;Hapus</i>
                                    </a>


                                    <?php endif ?>

                                    <a class='btn btn-warning'
                                        href="<?= base_url() . 'admin/penduduk/edit/' . $penduduk->id_penduduk ?>">
                                        <i class="fas fa-edit" aria-hidden="true"><span> Edit</span></i>
                                    </a>
                                    <a class='btn btn-info'
                                        href='<?= base_url() . 'admin/penduduk/detail/' . $penduduk->id_penduduk ?>'
                                        class='btn btn-biru'>
                                        <i class="fas fa-eye" aria-hidden="true"><span> Detail</span></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalDelete2">
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
                Mohon maaf data Admin tidak dapat dihapus.
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalDelete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Konfirmasi Hapus Data</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin akan menghapus data ini?
            </div>
            <div class="modal-footer">
                <form id="formDelete" action="" method="post">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>