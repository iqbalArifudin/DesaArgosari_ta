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
                                <th>NAMA</th>
                                <th>JABATAN</th>
                                <th>NIK / NO KTP</th>
                                <th>JENIS KELAMIN</th>
                                <th>NO HP</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($pegawai as $pegawai): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $pegawai->nama ?></td>
                                <td><?= $pegawai->jabatan ?></td>
                                <td><?= $pegawai->NIK ?></td>
                                <td><?= $pegawai->jenis_kelamin ?></td>
                                <td><?= $pegawai->no_hp ?></td>
                                <td>
                                    <!-- <a class='btn btn-danger'
                                        onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')"
                                        href="<?= base_url().'pegawai/pegawai/hapus/'.$pegawai->id_pegawai ?>">
                                        <i class="fa fa-trash" aria-hidden="true"><span> Hapus</span></i>
                                    </a>
                                    <a class='btn btn-warning'
                                        href="<?= base_url().'pegawai/pegawai/edit/'.$pegawai->id_pegawai ?>">
                                        <i class="fas fa-edit" aria-hidden="true"><span> Edit</span></i>
                                    </a> -->
                                    <a class='btn btn-info'
                                        href='<?= base_url().'pegawai/pegawai/detail/'.$pegawai->id_pegawai?>'
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