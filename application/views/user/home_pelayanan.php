<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp;
</div>
<?= $this->session->flashdata('message'); ?>

<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a class="nav-link" href="<?php echo base_url() . 'user/LayananKtp' ?>">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Kartu Tanda Penduduk</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">PELAYANAN KTP</div>
                        </div>
                        </a>
                        <div class="col-auto">
                            <i class="fas fa-address-card fa-3x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a class="nav-link" href="<?php echo base_url() . 'user/LayananKK' ?>">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Kartu keluarga</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">PELAYANAN KK</div>
                        </div>
                        </a>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-3x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a class="nav-link" href="<?php echo base_url() . 'user/akta_kelahiran' ?>">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Akta Kelahiran
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">PELAYANAN AKTA
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-id-badge fa-3x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a class="nav-link" href="<?php echo base_url() . 'user/Pengaduan' ?>">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Pengaduan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">PENGADUAN</div>
                            </a>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-3x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- Project Card Example -->
            <div class="card border-primary mb-3" style="max-width: 90rem;">
                <center>
                    <div class="card-header">Alur Pembuatan KTP (Kartu Tanda Penduduk)</div>
                </center>
                <div class="card-body text-primary">
                    <h5 class="card-title">1. Silahkan Pilih Fitur Pelayanan KTP</h5>
                    <h5 class="card-title">2. Kemudian download Surat Pengantar dari RT / RW Pada tombol donwload</h5>
                    <h5 class="card-title">3. Lakukan Tanda tangan Offline ke Ketua RT / RW</h5>
                    <h5 class="card-title">4. Kemudian Terdapat Button Tambah Data KTP, Silahkan Klik</h5>
                    <h5 class="card-title">5. Isi dan Lengkapi Form Pengajuan KTP, klik Submit</h5>
                    <h5 class="card-title">6. Pengajuan Anda Sedang Diproses</h5>
                    <h5 class="card-title">7. Untuk Mengetahui Proses Pengajuan Anda, Lihat Kolom Status Pada Tabel</h5>
                    <div class="form-group">
                    </div>
                </div>
            </div>

            <div class="card border-primary mb-3" style="max-width: 90rem;">
                <center>
                    <div class="card-header">Alur Pembuatan KK (Kartu Keluarga)</div>
                </center>
                <div class="card-body text-primary">
                    <h5 class="card-title">1. Silahkan Pilih Fitur Pelayanan KK</h5>
                    <h5 class="card-title">2. Kemudian Terdapat Button Tambah Data KK, Silahkan Klik</h5>
                    <h5 class="card-title">3. Isi dan Lengkapi Form Pengajuan Data Kartu Keluarga, klik Submit</h5>
                    <h5 class="card-title">4. Pastikan Upload Persyaratan Dengan Benar</h5>
                    <h5 class="card-title">5. Pengajuan Anda Sedang Diproses</h5>
                    <h5 class="card-title">6. Untuk Mengetahui Proses Pengajuan Anda, Lihat Kolom Status Pada Tabel</h5>
                </div>
            </div>

            <div class="card border-primary mb-3" style="max-width: 90rem;">
                <center>
                    <div class="card-header">Alur Pembuatan Akta Kelahiran</div>
                </center>
                <div class="card-body text-primary">
                    <h5 class="card-title">1. Silahkan Pilih Fitur Pelayanan Akta Kelahiran</h5>
                    <h5 class="card-title">2. Kemudian Terdapat Button Tambah Data Akta Kelahiran, Silahkan Klik</h5>
                    <h5 class="card-title">3. Isi dan Lengkapi Form Pengajuan Data Akta Kelahiran, klik Submit</h5>
                    <h5 class="card-title">4. Pastikan Upload Persyaratan Dengan Benar</h5>
                    <h5 class="card-title">5. Pengajuan Anda Sedang Diproses</h5>
                    <h5 class="card-title">6. Untuk Mengetahui Proses Pengajuan Anda, Lihat Kolom Status Pada Tabel</h5>

                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <center>
                        <h6 class="m-0 font-weight-bold text-primary">Pahami Alurnya </h6>
                    </center>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 26rem;"
                            src="<?php echo base_url('assets/img/pelayanan.png') ?>" alt="">
                    </div>
                    <p>Sebelum melakukan Pelayanan Pembuatan KTP (Kartu Tanda Penduduk), Kartu Keluarga (KK), Akta
                        Kelahiran dan Pengaduan. Pahami Dulu alur atau langkah-langkahnya, untuk menghindari kesalahan
                    </p>
                </div>
            </div>

            <div class="card border-primary mb-3" style="max-width: 90rem;">
                <center>
                    <div class="card-header">Alur Pengaduan</div>
                </center>
                <div class="card-body text-primary">
                    <h5 class="card-title">1. Silahkan Pilih Fitur Pengaduan</h5>
                    <h5 class="card-title">2. Kemudian Terdapat Button Tambah Pengaduan, Silahkan Klik</h5>
                    <h5 class="card-title">3. Isi dan Lengkapi Form Pengaduan, klik Submit</h5>
                    <h5 class="card-title">4. Tambahkan Bukti Pengaduan Dengan Benar</h5>
                    <h5 class="card-title">5. Pengajuan Anda Sedang Diproses</h5>
                    <h5 class="card-title">6. Untuk Mengetahui Proses Pengaduan Anda, Lihat Kolom Status Pada Tabel</h5>

                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>