<!--======================================= 
    Navbar 
========================================-->
<nav class="navbar navbar-expand-lg py-3 ">
    <div class="container-fluid justify-content-between px-0">
        <a class="navbar-brand logo" href="#">
            <img src="assets/img/icon/LOGO STIBAJRA NEW.png" height="60" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <div class="nav_right d-lg-flex align-items-center">
                <div>
                    <div class="nav d-block d-lg-flex nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link {{ Request::is('/') ? 'active' : '' }}" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><a href="/">Home</a></button>
                        <button class="nav-link {{ Request::is('profil') ? 'active' : '' }}" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false"><a href="/profil">Profil</a></button>
                        <button class="nav-link {{ Request::is('ppdb') ? 'active' : '' }}" id="timing-tab" data-bs-toggle="tab" data-bs-target="#timing" type="button" role="tab" aria-controls="timing" aria-selected="false"><a href="/ppdb">PPDB 2023/2024</a></button>
                        <div class="sec-center"> 	
                            <input class="dropdown" type="checkbox" id="dropdown" name="dropdown"/>
                            <label class="for-dropdown" for="dropdown"> Jurusan <i class="fa-solid fa-caret-down"></i></label>
                            <div class="section-dropdown"> 
                                <a href="/PPLG"> Pemrograman Perangkat Lunak dan Gim <i class="uil uil-arrow-right"></i></a>

                                {{-- <input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub"/>
                                <label class="for-dropdown-sub" for="dropdown-sub">Dropdown Sub <i class="uil uil-plus"></i></label>
                                <div class="section-dropdown-sub"> 
                                    <a href="#">Dropdown Link <i class="uil uil-arrow-right"></i></a>
                                    <a href="#">Dropdown Link <i class="uil uil-arrow-right"></i></a>
                                </div> --}}

                                <a href="/TJKT"> Teknik Jaringan Komputer dan Telekomunikasi <i class="uil uil-arrow-right"></i></a>
                                <a href="/DKV"> Desain Komunikasi Visual <i class="uil uil-arrow-right"></i></a>
                                <a href="/Akuntansi"> Akuntansi <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="position-relative d-inline-block me-lg-4">
                    <input class="search_input ms-5 mb-3 mb-lg-0 ms-lg-0 pe-5 ps-3" type="search" placeholder="Search" aria-label="Search">
                    <img class="position-absolute search_img" src="/static_files/svgs/search.svg" width="16" height="16" alt="twitter">
                </div> --}}
            </div>
        </div>
    </div>
</nav>