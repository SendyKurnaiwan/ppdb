 <!-- Sidebar Start -->
 <div class="sidebar pr-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="#" class="navbar-brand mx-4 mb-3" style="margin-right: 100px;">
                <img src="assets/img/Logo-sekolah.png" height="100" width="100" style="margin-left: 50px;">
        </a>
        <div class="navbar-nav w-100">
            <a href="/dashboard" class="nav-item nav-link {{ Request::is('dashboard') ? ' active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::is('Jurusan') ? ' active' : '' }} dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Jurusan</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/pplg" class="dropdown-item">Pengembangan Perangkat <br> Lunak dan Gim</a>
                    <a href="#" class="dropdown-item">Desain Komunikasi Visual</a>
                    <a href="#" class="dropdown-item">Teknik Jaringan Komputer <br> Telekomunikasi</a>
                    <a href="#" class="dropdown-item">Akuntansi Keuangan <br> Lembaga</a>
                    <a href="#" class="dropdown-item">Perhotelan</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::is('siswa', 'ortu') ? ' active' : '' }} dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Formulir</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/siswa" class="dropdown-item">Siswa</a>
                    <a href="/ortu" class="dropdown-item">Orang tua</a>
                </div>
            </div>
            <a href="/transaksi" class="nav-item nav-link {{ Request::is('transaksi') ? ' active' : '' }}"><i class="fa fa-th me-2"></i>Transaksi</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::is('halaman') ? ' active' : '' }} dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Halaman</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="#" class="dropdown-item">Buttons</a>
                    <a href="#" class="dropdown-item">Typography</a>
                    <a href="#" class="dropdown-item">Other Elements</a>
                </div>
            </div>
            
            <a href="/logout" class="nav-item nav-link{{ Request::is('logout') ? ' active' : '' }}"><i class="fa fa-th me-2"></i>Log Out</a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->