<?php

$menu = [
    'Home' => 'admin.php',
    'Customer' => 'list_pelanggan.php',
    'Daftar' => 'form_pelanggan.php',
    'About' => 'about.php',
    'Log out' => 'index.php'

];

$icons = [
    'Home' => 'home',
    'Customer' => 'list',
    'Daftar' => 'plus-circle',
    'About' => 'link',
    'Log out' => 'return'

];

?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-info elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/svt.jpg" alt="Logo" class="brand-image img-circle elevation-4" style="opacity: .8">
      <span class="brand-text font-weight-light">Una-SI03</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/Hoshi.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">una</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu-close">
                 <a href="#" class="nav-link active">
                   <i class="nav-icon fas fa-tachometer-alt"></i>
                   <p>
                     Dashboard
                     <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item active">
                    <?php foreach($menu as $key => $value): ?>
                     <a class="nav-link" href="<?= $value ?>">
                       <i class="fas fa-<?= $icons[$key] ?>"></i>
                       <?= $key ?>
                     </a>
                     <div class="sb-nav-link-icon">
                     <?php endforeach ?>
        <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
                
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    </div>
    <!-- /.sidebar -->
  </aside>
 
