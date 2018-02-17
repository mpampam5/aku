<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <img class="img img-responsive img-thumbnail" src="<?=$this->config->item('admin_dir')?><?=$this->config->item('logo')?>" style="margin:0 0 0 50px;width:100px!important;height:100px" alt="logo">

    </div>

    <p class="text-center" style="color:#fff;"><?=date("d,M Y"); ?></p>
    <p class="text-center"><a href="<?=base_url()?>/cpanel/Managementuser/change_password/<?=$this->session->userdata("id_auth")?>" class="label label-warning" id="reset"><i class="fa fa-key" aria-hidden="true"></i> Ganti Password</a></p>


    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN MENU</li>
      <li <?=($layout_title=="home")?"class='active'":""?>><a href='<?=site_url($this->config->item("cpanel")."home")?>'><i class="fa fa-home"></i> <span>Home</span></a></li>
      <li <?=($layout_title=='profile')?"class='active'":""?>><a href='<?=site_url($this->config->item("cpanel")."profile")?>'><i class="fa fa-id-card-o"></i> <span> Profile Desa</span></a></li>
      <li <?=($layout_title=='profile')?"class='active'":""?>><a href='<?=site_url($this->config->item("cpanel")."profile")?>'><i class="fa fa-code"></i> <span> Portofolio</span></a></li>

      <?php if ($this->session->userdata("level")=="superadmin"): ?>
        <li <?=($layout_title=='user')?"class='active'":""?>><a href='<?=site_url($this->config->item("cpanel")."user")?>'><i class="fa fa-users"></i> <span>Admin Managament</span></a></li>
      <?php endif; ?>

<!--
      <li class="header">&nbsp;</li>
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Tentang</span></a></li> -->

      <li><a href='<?=site_url("auth/logout")?>'><i class="fa fa-sign-out"></i> Keluar</a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>



      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">


        <!-- Main content -->
        <section class="content">
