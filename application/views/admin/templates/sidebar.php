
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('assets/adminlte/dist/img/admin.png') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('first_name'); ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <!-- Optionally, you can add icons to the links -->
        
        <li>
          <a href="<?= base_url("admin/news") ?>" > <i class="fa fa-newspaper-o" style="color: #00c0ef"></i> <span>News</span></a>
        </li>
        <li>
          <a href="<?= base_url("admin/regulation") ?>" > <i class="fa fa-balance-scale" style="color: #3c8dbc"></i> <span>Regulation</span></a>
        </li>
        <li>
         <a href="<?= base_url("admin/career") ?>" > <i class="fa fa-briefcase" style="color: #00a65a"></i> <span>Career</span></a>
        </li>
        <li>
          <a href="<?= base_url("admin/slider") ?>" > <i class="fa fa-clone" style="color: #f39c12"></i> <span>Slider</span> </a>
        </li>
        <li class="treeview">
          <a href="#"> <i class="fa fa-file" style="color: #605ca8"></i> <span>Page</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url("admin/subpage/services") ?>"> <span>Services</span></a></li>
            <li><a href="<?= base_url("admin/subpage/people") ?>"> <span>Our People</span></a></li>
            <li><a href="<?= base_url("admin/subpage/about") ?>"> <span>About Us</span></a></li>
            <li><a href="<?= base_url("admin/subpage/contact") ?>"> <span>Contact Us</span></a></li>
          </ul>
        </li>
        <li>
         <a href="<?= base_url("admin/user") ?>"> <i class="fa fa-user-circle-o" style="color: #D81B60"></i> <span>User</span></a>
        </li>
        <li>
         <a href="<?= base_url("admin/user/changepassword/").$this->session->userdata('user_id') ?>"> <i class="fa fa-lock" style="color: #39CCCC"></i> <span>Change Password</span></a>
        </li>


        
        
      </ul>
      <!-- /.sidebar-menu -->
      <script>
        var siteurl = window.location.href;
        $('.sidebar-menu li').each (function(){
          var link=$(this).find('a').prop('href');
          if (siteurl == link) {
            $(this).addClass('active');
            $(this).parent('ul').parent('li').addClass('active');
          }
        })

      </script>
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
    