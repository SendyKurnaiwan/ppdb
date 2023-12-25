
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>
</head>

<body id="page-top">

    <div class="wrapper">
        <!-- /.navbar -->
      
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="/admin/home" class="brand-link">
            <span class="brand-text font-weight-light ml-5">PPDB STIBAJRA</span>
          </a>
      
          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-header">HOME</li>
                <li class="nav-item">
                  <a href="/admin/home" class="nav-link {{ Request::is('admin/home') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>
                <li class="nav-header">DATA TABEL</li>
                <li class="nav-item has-treeview {{ Request::is('admin/data_*') ? 'menu-open' : '' }}">
                  <a href="#" class="nav-link {{ Request::is('admin/data_*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                      Data
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="/admin/data_user" class="nav-link {{ Request::is('admin/data_user') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Pengguna</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/admin/data_peserta" class="nav-link {{ Request::is('admin/data_peserta') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Peserta</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/admin/data_orangtua" class="nav-link {{ Request::is('admin/data_orangtua') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Orangtua</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/admin/data_lengkap" class="nav-link {{ Request::is('admin/data_lengkap') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Lengkap</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                    <a href="/admin/diskon" class="nav-link {{ Request::is('admin/diskon') ? 'active' : '' }}">
                      <i class="nav-icon fas fa-table"></i>
                      <p>
                        Diskon
                      </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/transaksi" class="nav-link {{ Request::is('admin/transaksi') ? 'active' : '' }}">
                      <i class="nav-icon fas fa-table"></i>
                      <p>
                        Transaksi
                      </p>
                    </a>
                </li>
                <li class="nav-header">AKUN</li>
                <li class="nav-item">
                  <a href="/logout" class="nav-link {{ Request::is('logout') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                      Logout
                    </p>
                  </a>
              </li>
              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>
      
        <!-- Content Wrapper. Contains page content -->
        
        @yield('content')  

        <!-- /.content-wrapper -->
      
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
      </div>