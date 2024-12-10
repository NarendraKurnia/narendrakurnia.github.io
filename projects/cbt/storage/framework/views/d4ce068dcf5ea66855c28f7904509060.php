<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-user"></i>
          <?php echo Session()->get('nama') ?>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Menu User</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-sitemap mr-2"></i> <?php echo Session()->get('akses_level') ?>
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?php echo e(asset('admin/akun')); ?>" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> Update Profil
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?php echo e(asset('admin/akun/password')); ?>" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> Ganti Password
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?php echo e(asset('logout')); ?>" class="dropdown-item dropdown-footer text-danger"><i class="fa fa-sign-out-alt"></i>
          Logout</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-danger" href="<?php echo e(asset('logout')); ?>" >
          <i class="fa fa-sign-out-alt"></i>Logout
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar --><?php /**PATH C:\MAMP\htdocs\cbt\resources\views/admin/layout/header.blade.php ENDPATH**/ ?>