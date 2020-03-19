<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="image/user/<?php echo $this->session->userdata('foto'); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
        
        <li><a href="app"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        
        <li><a href="devisi"><i class="fa fa-keyboard-o"></i> <span>Master Upload Informasi</span></a></li>
        <li class="treeview">
          <a href="#">
              <i class="fa fa-list"></i>
              <span>Master Pelayanan</span>
              <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
              <li><a href="permohonan_informasi"><i class="fa fa-angle-double-right"></i> Permohonan Informasi</a></li>
              <li><a href="keberatan_informasi"><i class="fa fa-angle-double-right"></i> Pengajuan Keberatan Informasi</a></li>
              <li><a href="aduan_pelanggaran"><i class="fa fa-angle-double-right"></i> Aduan Pelanggaran</a></li>
              <!-- <li><a href="stok"><i class="fa fa-angle-double-right"></i> Stok</a></li> -->
          </ul>
        </li>
        
        
        <li><a href="a_user"><i class="fa fa-users"></i> <span>Manajemen User</span></a></li>

        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Faqs</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Tentang Aplikasi</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>