@extends('dashboard.halaman.main')
 <!-- Content Start -->
 <div class="content">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                <img src="assets/img/Logo-sekolah.png" height="50" width="50">
        </a>
        <a href="#" class="sidebar-toggler d-flex ">
            <i class="fa fa-bars"></i>
        </a>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center p-4 pt-3 pb-2 mb-3 border-bottom">
        <h4>Selamat Datang, {{ auth()->user()->nama_lengkap }}</h4>
      </div>
        </div>
        

        
    