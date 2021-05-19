  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
          <a class="nav-link" href="<?php echo base_url('welcome/logout')?>">Logout <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('C_dashboard_admin')?>" class="brand-link">
      <img src="<?php echo base_url('assets/gambar/logo.png') ?>" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Bulusari</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Profil Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url('C_data_ktp') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Penduduk
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Surat Keterangan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('C_beda_nama') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Beda Nama</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('C_kelahiran') ?>" class="nav-link">
                  <!-- cukup diganti link pada file template saja, maka akan terganti disemua halaman, karena semua halaman memanggil atau load file template gitu. -->
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Kelahiran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('C_kematian') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Kematian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('C_penghasilan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Penghasilan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('C_pindah_penduduk') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Pindah Penduduk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('C_tidak_mampu') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Tidak Mampu</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Surat Kuasa
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('C_kuasa_lahan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Kuasa Lahan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('C_kuasa_akta') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Kuasa Akta</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url('C_galeri') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Kelola Galeri
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebr -->
  </aside>