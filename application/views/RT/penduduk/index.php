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
                    <p>
                    <table id="dataTable" class="table table-striped table-hover ">
                        <thead class="table-primary">
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
                                <td><?= $penduduk->jenis_kelamin ?></td>
                                <td><?= $penduduk->hak_akses ?></td>
                                <td>
                                    <a class='btn btn-info'
                                        href='<?= base_url() . 'RT/penduduk/detail/' . $penduduk->id_penduduk ?>'
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