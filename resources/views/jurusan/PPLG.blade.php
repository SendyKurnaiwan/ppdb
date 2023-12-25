@extends('layouts.main')
@include('layouts.navbar')

<section class="py-5">
  <!--======================================= 
    Start Content Blog 
  ========================================-->
    <div class="blog-page area-padding">
      <div class="container">
        <div class="row">
  
        <!--======================================= 
          Side Bar
        ========================================-->
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="page-head-blog">
  
              <div class="single-blog-page">
                {{-- <form action="#">
                  <div class="search-option">
                    <input type="text" placeholder="Search...">
                    <button class="button" type="submit">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </form> --}}
              </div>
  
              <div class="single-blog-page">
                <div class="left-blog">
                  <h4>Hasil karya Peserta Didik</h4>
                  <div class="recent-post">
  
                    <div class="recent-single-post">
                      <a href="#">
                        <div class="post-img">
                          <img src="../assets/img/karya siswa/WhatsApp-Image-2021-06-04-at-15.24.33.jpg" alt="">
                        </div>
                        <div class="pst-content">
                          <p> Redug Lerse dolor sit amet consect adipis elit. </p>
                        </div>
                      </a>
                    </div>
  
                    <div class="recent-single-post">
                      <a href="#">
                        <div class="post-img">
                          <img src="../assets/img/karya siswa/WhatsApp-Image-2021-06-04-at-15.24.33.jpg" alt="">
                        </div>
                        <div class="pst-content">
                          <p> Redug Lerse dolor sit amet consect adipis elit. </p>
                        </div>
                      </a>
                    </div>
  
                    <div class="recent-single-post">
                      <a href="#">
                        <div class="post-img">
                          <img src="../assets/img/karya siswa/WhatsApp-Image-2021-06-04-at-15.24.33.jpg" alt="">
                        </div>
                        <div class="pst-content">
                          <p> Redug Lerse dolor sit amet consect adipis elit. </p>
                        </div>
                      </a>
                    </div>
  
                    <div class="recent-single-post">
                      <a href="#">
                        <div class="post-img">
                          <img src="../assets/img/karya siswa/WhatsApp-Image-2021-06-04-at-15.24.33.jpg" alt="">
                        </div>
                        <div class="pst-content">
                          <p> Redug Lerse dolor sit amet consect adipis elit. </p>
                        </div>
                      </a>
                    </div>
  
                    <div class="recent-single-post">
                      <a href="#">
                        <div class="post-img">
                          <img src="../assets/img/karya siswa/WhatsApp-Image-2021-06-04-at-15.24.33.jpg" alt="">
                        </div>
                        <div class="pst-content">
                          <p> Redug Lerse dolor sit amet consect adipis elit. </p>
                        </div>
                      </a>
                    </div>
                    
                    
                  </div>
                </div>
              </div>
  
            </div>
          </div>
  
        <!--======================================= 
          Single Blog
        ========================================-->
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
  
                <article class="blog-post-wrapper">
                  <div class="post-thumbnail">
                    <img src="img/blog/6.jpg" alt="" />
                  </div>
                  <div class="post-information">
                    <h2> Pemrograman Perangkat Lunak dan Gim </h2>

                    {{-- <div class="entry-meta">
                      <span class="author-meta"><i class="fa fa-user"></i> <a href="#">admin</a></span>
                      <span><i class="fa fa-clock-o"></i> march 28, 2016</span>
                      <span class="tag-meta">
                          <i class="fa fa-folder-o"></i>
                          <a href="#">painting</a>,
                          <a href="#">work</a>
                      </span>
                      <span>
                          <i class="fa fa-tags"></i>
                          <a href="#">tools</a>,
                          <a href="#"> Humer</a>,
                          <a href="#">House</a>
                      </span>
                      <span><i class="fa fa-comments-o"></i> <a href="#">6 comments</a></span>
                    </div> --}}

                    <div class="entry-content">
                      <p>Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend. Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse
                        potenti. Proin consectetur aliquam odio nec fringilla. Sed interdum at justo in efficitur. Vivamus gravida volutpat sodales. Fusce ornare sit amet ligula condimentum sagittis.</p>
                      <blockquote>
                        <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum
                          tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                      </blockquote>
                      <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum.
                        Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae
                        lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                    </div>
                  </div>
                </article>
  
              </div>
            </div>
          </div>
  
        </div>
      </div>
    </div>
    
    <div class="clearfix"></div>

</section>


@include('layouts.footer')