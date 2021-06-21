       <!-- Sidebar -->
       <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

           <!-- Sidebar - Brand -->
           <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
               <div class="sidebar-brand-icon">
                   <img src="<?php echo base_url('assets/img/logo kab.png') ?>" width="60%">
               </div>
               <div class="sidebar-brand-text mx-3">DESA ARGOSARI</div>
           </a>

           <!-- Divider -->
           <hr class="sidebar-divider my-0">

           <!-- Nav Item - Dashboard -->
           <li class="nav-item active">
               <a class="nav-link" href="<?php echo base_url() . 'RT/home' ?>">
                   <i class="fas fa-fw fa-tachometer-alt"></i>
                   <span>Beranda</span></a>
           </li>

           <!-- Divider -->
           <hr class="sidebar-divider">

           <li class="nav-item">
               <a href="<?php echo base_url() . 'RT/Pelayanan_ktp' ?>" class="nav-link">
                   <i class="fas fa-address-card"></i>
                   <span>Pelayanan KTP</span></a>
           </li>
           <hr class="sidebar-divider">
           <li class="nav-item">
               <a href="<?php echo base_url() . 'RT/Pelayanan_kk' ?>" class="nav-link">
                   <i class="fas fa-newspaper"></i>
                   <span>Pelayanan KK</span></a>
           </li>
           <hr class="sidebar-divider">
           <li class="nav-item">
               <a href="<?php echo base_url() . 'RT/akta_kelahiran' ?>" class="nav-link">
                   <i class="fas fa-id-badge"></i>
                   <span>Pelayanan Akta Kelahiran</span></a>
           </li>
           <hr class="sidebar-divider">
           <li class="nav-item">
               <a href="<?php echo base_url() . 'RT/pegawai' ?>" class="nav-link">
                   <i class="fas fa-fw fa-table"></i>
                   <span>Data Pegawai</span></a>
           </li>
           <hr class="sidebar-divider">
           <li class="nav-item">
               <a href="<?php echo base_url() . 'RT/penduduk' ?>" class="nav-link">
                   <i class="fas fa-fw fa-table"></i>
                   <span>Data Penduduk</span></a>
           </li>

           <!-- Divider -->
           <hr class="sidebar-divider d-none d-md-block">

           <!-- Sidebar Toggler (Sidebar) -->
           <div class="text-center d-none d-md-inline">
               <button class="rounded-circle border-0" id="sidebarToggle"></button>
           </div>
       </ul>
       <!-- End of Sidebar -->