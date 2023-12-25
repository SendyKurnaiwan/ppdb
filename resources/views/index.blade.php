@extends('layouts.main')
@include('layouts.navbar')

    
    <!--==============================
        Carousel Start 
    ===============================-->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                
                <div class="carousel-item active">
                    <img class="w-100" src="assets/img/background/hero-bg.png" alt="Image">
                    <div class="d-flex justify-items-center">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <h5 class="display-1 text-white mb-5 animated slideInDown"> Pendaftaran Peserta Didik Baru Tahun Pelajaran 2024/2025 Telah Dibuka </h5>
                                        <a href="" class="btn btn-primary py-sm-3 px-sm-4">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="w-100" src="assets/img/background/hero-bg-2.jpeg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                <h5 class="display-1 text-white mb-5 animated slideInDown"> Kenali STIBAJRA Lebih Dalam </h5>
                                    <a href="" class="btn btn-primary py-sm-3 px-sm-4">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!--==============================
        Top Feature Start
    ===============================-->
    <div class="container-fluid top-feature py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-times text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4>No Hidden Cost</h4>
                                <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-users text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Dedicated Team</h4>
                                <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-phone text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4>24/7 Available</h4>
                                <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
        Top Feature Start
    ===============================-->
    <section class="courses py-5">
        <div class="container">
            <p class="sub--header">EDUCATION</p>
                <h2 class="section__title">Fondasi Perubahan dan Kemajuan Masa Depan</h2>
            <p class="section__subtitle">Di tengah laju perkembangan teknologi, platform edukasi online RealEdu muncul sebagai agen utama yang membuka peluang baru dalam dunia pembelajaran.</p>
            <div class="grid grid-cols-3 gap-2 sm:grid-cols-1 md:grid-cols-2 md:gap-2 lg:gap-4 xl:grid-cols-6">
                
                <div class="box">
                    <div class="image-box shine">
                        <img src="../assets/img/news/HUT-7.jpg" alt="" />
                    </div>
                    <div class="content">
                        <h3>Peran Teknologi Virtual Reality dalam Pembelajaran</h3>
                        <p>
                            Teknologi Virtual Reality (VR) diperkenalkan ke segala bidang, termasuk pendidikan. Dalam edukasi, Virtual Reality nyatanya bisa diaplikasikan dalam proses pembelajaran. Bahkan, teknologi ini jadi salah satu solusi bagi guru
                            dan murid sebagai media pembelajaran.
                        </p>
                    </div>
                    <div class="icons">
                        <span>956 Dilihat</span>
                        <a href="education1.html" class="button"><span>Selengkapnya</span></a>
                    </div>
                </div>
                <div class="box">
                    <div class="image-box shine">
                        <img src="../assets/img/news/ppdb 23-24.jpg" alt="" />
                    </div>
                    <div class="content">
                        <h3>Pendidikan di Era Virtual Reality: Membentuk Generasi Pembelajar yang Siap Masa Depan</h3>
                        <p>Era digital telah membawa perubahan besar dalam berbagai aspek kehidupan, dan pendidikan tidak terkecuali. Salah satu transformasi terbesar yang kita saksikan adalah penggunaan Virtual Reality (VR) dalam pendidikan.</p>
                    </div>
                    <div class="icons">
                        <span>535 Dilihat</span>
                        <a href="education2.html" class="button"><span>Selengkapnya</span></a>
                    </div>
                </div>
                <div class="box">
                    <div class="image-box shine">
                        <img src="../assets/gallery/vr-7.jpg" alt="" />
                    </div>
                    <div class="content">
                        <h3>Menembus Batas: Pendidikan Virtual Reality dalam Dunia Pascapandemi</h3>
                        <p>
                            Sejak dimulainya pandemi global, dunia pendidikan telah mengalami perubahan radikal dalam cara pembelajaran dan pengajaran dilakukan. Salah satu perubahan paling mencolok adalah peningkatan penggunaan Virtual Reality (VR)
                            dalam pendidikan.
                        </p>
                    </div>
                    <div class="icons">
                        <span>1069 Dilihat</span>
                        <a href="education3.html" class="button"><span>Selengkapnya</span></a>
                    </div>
                </div>
                <div class="box">
                    <div class="image-box shine">
                        <img src="../assets/gallery/vr-2.jpg" alt="" />
                    </div>
                    <div class="content">
                        <h3>Teknologi: Pendorong Transformasi Bisnis dalam Era Digital</h3>
                        <p>
                            Era digital telah membawa perubahan mendasar dalam cara bisnis di seluruh dunia beroperasi. Teknologi telah menjadi kekuatan pendorong di balik transformasi bisnis, memungkinkan perusahaan untuk meningkatkan efisiensi,
                            menciptakan inovasi, dan beradaptasi dengan cepat terhadap perubahan pasar.
                        </p>
                    </div>
                    <div class="icons">
                        <span>1578 Dilihat</span>
                        <a href="education4.html" class="button"><span>Selengkapnya</span></a>
                    </div>
                </div>
                <div class="box">
                    <div class="image-box shine">
                        <img src="../assets/gallery/vr-9.jpg" alt="" />
                    </div>
                    <div class="content">
                        <h3>Virtual Reality Augmented Reality (AR): Menggabungkan Dunia Nyata dan Virtual untuk Transformasi Luar Biasa</h3>
                        <p>
                            Virtual Reality Augmented Reality (AR) adalah dua teknologi inovatif yang telah memasuki kehidupan kita dan mengubah cara kita berinteraksi dengan dunia di sekitar kita. Kedua teknologi ini, meskipun memiliki konsep yang
                            berbeda, berbagi tujuan umum: menggabungkan dunia nyata dengan elemen virtual untuk menciptakan pengalaman yang lebih imersif dan bermanfaat.
                        </p>
                    </div>
                    <div class="icons">
                        <span>3756 Dilihat</span>
                        <a href="education5.html" class="button"><span>Selengkapnya</span></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@include('layouts.footer')