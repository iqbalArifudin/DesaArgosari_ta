<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-comments"></i>
    Kritik Dan Saran
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <?= $this->session->flashdata('message'); ?>
                    <p>
                        <a class='btn btn-primary' href="Kritik/tambahSaran">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <span>
                                Tambah Kritik Dan Saran
                            </span>
                        </a>
                        <?php
            foreach ($saran as $s) : ?>
                    <div class="card">
                        <div class="card-header">
                            <td><b>Nama : </b> <?= $s->nama ?></td>
                        </div>
                        <div class="card-body">
                            <td><b>Tanggal : </b><?= $s->tanggal ?></td>
                            <p>
                                <hr>
                                <td><b>Keterangan : </b><?= $s->keterangan ?></td>
                            <p>
                                <hr>
                                <a class='btn btn-danger' href="#modalDelete" data-toggle="modal"
                                    onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('user/Kritik/hapus/' . $s->id_saran) ?>')"
                                    class='btn btn-danger btn-circle'>
                                    <i class="fa fa-trash" aria-hidden="true">&nbsp;Hapus</i>
                                </a>
                                <!-- <a class='btn btn-warning'
                                        href="<?= base_url().'user/Kritik/edit/'.$s->id_saran ?>">
                                        <i class="fas fa-edit" aria-hidden="true"><span> Edit</span></i>
                                    </a> -->
                        </div>
                    </div>
                    <p>
                        <?php endforeach ?>
                </div>
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