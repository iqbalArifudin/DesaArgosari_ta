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

                        </div>
                    </div>
                    <p>
                        <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>