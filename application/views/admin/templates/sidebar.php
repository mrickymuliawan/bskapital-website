
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('assets/adminlte/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->

        <li><a href="<?= base_url("admin/news") ?>"> <i class="fa fa-newspaper-o"></i> <span>News</span> </a></li>
        <li><a href="<?= base_url("admin/regulation") ?>"> <i class="fa fa-balance-scale"></i> <span>Regulation</span></a></li>
        <li><a href="<?= base_url("admin/user") ?>"> <i class="fa fa-user"></i> <span>User</span></a></li>
        <li><a href="<?= base_url("admin/career") ?>"> <i class="fa fa-user"></i> <span>Career</span></a></li>
        <li><a href="<?= base_url("admin/user/changepassword/").$this->session->userdata('user_id') ?>"> <i class="fa fa-lock"></i> <span>Change Password</span></a></li>

        <li><a href="<?= base_url("admin/subpage/services") ?>"> <i class="fa fa-user"></i> <span>Services</span></a></li>
        <li><a href="<?= base_url("admin/subpage/people") ?>"> <i class="fa fa-user"></i> <span>Our People</span></a></li>
        <li><a href="<?= base_url("admin/subpage/about") ?>"> <i class="fa fa-user"></i> <span>About Us</span></a></li>
        <li><a href="<?= base_url("admin/subpage/contact") ?>"> <i class="fa fa-user"></i> <span>Contact Us</span></a></li>
        <li><a href="<?= base_url("admin/slider") ?>"> <i class="fa fa-newspaper-o"></i> <span>Slider</span> </a></li>
        <!-- <li class="treeview">
          <a href="#"> <i class="fa fa-file"></i> <span>Page</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url("") ?>">Services</a></li>
            <li><a href="<?= base_url("") ?>">About</a></li>
            <li><a href="<?= base_url("") ?>">Contact</a></li>
          </ul>
        </li> -->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title ?>
        <!-- <small>Optional description</small> -->
      </h1>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
    <?php if ($this->session->flashdata('info')): ?>
      <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-check"></i> Info!</h4>
      <?= $this->session->flashdata('info') ?>
      </div>
    <?php elseif(validation_errors()): ?>
      <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-warning"></i> Error!</h4>
      <?= validation_errors() ?>
      </div>
    <?php elseif($this->session->flashdata('error')): ?>
      <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-warning"></i> Error!</h4>
      <?= $this->session->flashdata('error') ?>
      </div>
    
    <?php endif ?>
    