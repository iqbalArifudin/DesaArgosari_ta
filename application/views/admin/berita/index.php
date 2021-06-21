<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i
        class="fas fa-fw fa-chart-area"></i>
    Berita
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <a class='btn btn-primary' href="berita/tambahberita">
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
                                <th>JUDUL</th>
                                <th>TANGGAL UPDATE</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($berita as $berita): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $berita->judul ?></td>
                                <td><?= $berita->tanggal ?></td>
                                <td>
                                    <a class='btn btn-danger'
                                        onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')"
                                        href="<?= base_url().'admin/berita/hapus/'.$berita->id_berita ?>">
                                        <i class="fa fa-trash" aria-hidden="true"><span> Hapus</span></i>
                                    </a>
                                    <a class='btn btn-warning'
                                        href="<?= base_url().'admin/berita/edit/'.$berita->id_berita ?>">
                                        <i class="fas fa-edit" aria-hidden="true"><span> Edit</span></i>
                                    </a>
                                    <a class='btn btn-info'
                                        href='<?= base_url().'admin/berita/detail/'.$berita->id_berita?>'
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