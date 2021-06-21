<link rel="icon" href="<?php echo base_url() . 'assets/images/logo.png' ?>">

<body>
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray">SILAHKAN LOGIN</h1>
                            </div>
                            <div class="nav-link">
                                <?= $this->session->flashdata('message'); ?>
                                <center><img src="<?= base_url(); ?>assets/img/logo kab.png" alt="" width="30%">
                                </center>
                                <br>
                                <form class="user" method="post" action="<?= base_url('Login'); ?>">
                                    <div class="form-group">
                                        <input type="number" class="form-control form-control-user border-left-primary "
                                            id="NIK" name="NIK" placeholder="NIK(Nomor Induk Kependudukan)"
                                            value="<?= set_value('NIK') ?>">
                                        <?= form_error('NIK', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class=" form-group">
                                        <input type="password"
                                            class="form-control form-control-user  border-left-primary" id="password"
                                            name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <center>
                                        <button type="submit" class="btn btn-primary rounded-pill">
                                            Login
                                        </button>
                                    </center>
                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

<style>
.bg-login-image {
    background-image: url("<?= base_url('assets/images/gambar2.png'); ?>");
    /* background-repeat: no-repeat; */
    /* background-size: 90%; */
}
</style>