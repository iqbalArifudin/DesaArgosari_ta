<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-comments"></i>
    Kritik Dan Saran &nbsp; &nbsp; > &nbsp; &nbsp; <i class="fas fa-edit"></i>
    Edit
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <div class="card-header">
                            <center><strong>Masukkan Kritik atau Saran Anda</strong></center>
                        </div>
                        <div class="card-body">
                            <?php foreach($saran as $s):?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_pengaduan" value="<?= $s->id_saran;?>">
                                <?php endforeach ?>
                                <?php foreach($penduduk as $j):?>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>NAMA</strong></label>
                                        <input type="text" name="nama" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $j->nama; ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>NIK</strong></label>
                                        <input type="text" name="NIK" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $j->NIK; ?>" readonly>
                                    </div>
                                </div>
                                <?php endforeach ?>
                                <?php foreach($saran as $s):?>
                                <div class="form-row">
                                    <label for="nama_barang"><strong>Keterangan</strong></label>
                                    <input type="text" name="keterangan" autocomplete="off" class="form-control"
                                        value="<?=$s->keterangan;?>" required>
                                </div>
                                <?php endforeach ?>
                                <hr>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-success "><i
                                            class="fa fa-save"></i>&nbsp;&nbsp;Submit</button>
                                    <button type="reset" class="btn btn-danger"><i
                                            class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
                                    <a href="<?=base_url("user/Kritik");?>" class="btn btn-info"><i
                                            class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>