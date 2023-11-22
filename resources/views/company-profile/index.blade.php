<!DOCTYPE html>

<html lang="en">
<head>
<!-- Meta Data -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digital Industry Agency</title>
<link rel="shortcut icon" href="{{asset('img/assets/hitam.png')}}" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Stlylesheet -->

<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('css/font-awesome/css/font-awesome.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('css/no-ui-slider/jquery.nouislider.css')}}" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<!-- Skin Color -->
<link rel="stylesheet" href="{{asset('css/colors/green.css')}}" id="color-skins"/>
</head>
<body>

<!-- Start Preloader -->
<div id="loader">
   <div class="spinner">
    <img class="loading-animation" src="{{asset('img/assets/hitam.png')}}" alt="">
   </div>
</div>
<!-- End Preloader -->

<!-- Start Header -->
<header>
   <nav class="navbar navbar-default navbar-alt" role="navigation">
      <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand to-top" style="margin-top: -1rem; margin-left: 1rem" rel="home" href="#">
               <img src="{{asset('img/assets/logo-putih.png')}}" alt="Visual" class="logo-big">
               <img src="{{asset('img/assets/logo-hitam.png')}}" alt="Visual" class="logo-small">
            </a>
         </div>

         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" style="padding-top: 1rem" id="main-nav">
            <ul class="nav navbar-nav  navbar-right">
               <li>
                  <a class="to-top">
                     Home
                  </a>
               </li>
               <li class="to-section">
                  <a href="#about">
                     About Us
                  </a>
               </li>
               <li class="to-section">
                  <a href="#team">
                     Team
                  </a>
               </li>
               <li class="to-section">
                  <a href="#portfolio">
                     Portfolio
                  </a>
               </li>
               <li class="to-section">
                  <a href="#contact">
                     Contact
                  </a>
               </li>
            </ul>
         </div>
         <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
   </nav>
</header>
<!-- End Header -->

<!-- Start Home Revolution Slider Parallax Section -->
<section id="home-revolution-slider">
   <div class="hero">
      <div class="tp-banner-container">
         <div class="tp-banner">
            <ul>
               <!-- SLIDE 1 -->
               <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="img/backgrounds/bg.jpg" data-delay="10000" data-saveperformance="on" data-title="We Are Visual">
                  <img src="{{asset('img/backgrounds/hero.jpg')}}" alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                  <!-- Home Heading -->
                  <div class="tp-caption sft"
                                        data-x="center"
                                        data-y="260"
                                        data-speed="1200"
                                        data-start="1100"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                     <h2 class="home-heading op-1">Digital Industry Agency</h2>
                  </div>
                  <!-- Home Subheading -->
                  <div class="tp-caption home-subheading sft "
                                        data-x="center"
                                        data-y="360"
                                        data-speed="1200"
                                        data-start="1350"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                     <div class="op-1">Jasa IT andal untuk mengoptimalkan bisnismu! Temukan solusi teknologi terbaik bersama kami.</div>
                  </div>
                  <!-- Home Button -->
                  <div class="tp-caption home-button sft fadeout"
                                        data-x="center"
                                        data-y="400"
                                        data-speed="1200"
                                        data-start="1550"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                     <div class="op-1">
                        <a href="#about" class="btn btn-primary btn-scroll">
                           SELENGKAPNYA
                        </a>
                     </div>
                  </div>
               </li>

               <!-- SLIDE 2 -->
               {{-- <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="img/backgrounds/bg-1.jpg" data-delay="10000"  data-saveperformance="on" data-title="Digital Agency">
                  <img src="{{asset('img/backgrounds/bg-1.jpg')}}" alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                  <!-- Home Heading -->
                  <div class="tp-caption sft"
                                        data-x="center"
                                        data-y="260"
                                        data-speed="1200"
                                        data-start="1100"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                     <h2 class="home-heading op-2">A Digital Design Agency</h2>
                  </div>
                  <!-- Home Subheading -->
                  <div class="tp-caption home-subheading sft fadeout"
                                        data-x="center"
                                        data-y="360"
                                        data-speed="1200"
                                        data-start="1350"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                     <div class="op-2">Beautiful & Elegant One page Parallax Template</div>
                  </div>
                  <!-- Home Button -->
                  <div class="tp-caption home-button sft fadeout"
                                        data-x="center"
                                        data-y="400"
                                        data-speed="1200"
                                        data-start="1550"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                     <div class="op-2">
                        <a href="#about" class="btn btn-primary btn-scroll">
                           WHAT WE DO
                        </a>
                     </div>
                  </div>
               </li> --}}

               <!-- SLIDE 3 -->
               {{-- <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="img/backgrounds/bg-2.jpg" data-delay="10000"  data-saveperformance="on" data-title="Creative Coders">
                  <img src="{{asset('img/backgrounds/bg-2.jpg')}}" alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                  <!-- Home Heading -->
                  <div class="tp-caption sft"
                                        data-x="center"
                                        data-y="260"
                                        data-speed="1200"
                                        data-start="1100"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                     <h2 class="home-heading op-3">Creative Coders</h2>
                  </div>
                  <!-- Home Subheading -->
                  <div class="tp-caption home-subheading sft fadeout"
                                        data-x="center"
                                        data-y="360"
                                        data-speed="1200"
                                        data-start="1350"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                     <div class="op-3">Beautiful & Elegant One page Parallax Template</div>
                  </div>
                  <!-- Home Button -->
                  <div class="tp-caption home-button sft fadeout"
                                        data-x="center"
                                        data-y="400"
                                        data-speed="1200"
                                        data-start="1550"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                     <div class="op-3">
                        <a href="#team" class="btn btn-primary btn-scroll">
                           MEET THE TEAM
                        </a>
                     </div>
                  </div>
               </li> --}}
            </ul>
            <div class="tp-bannertimer"></div>
         </div>
         <div class="home-bottom">
            <div class="container text-center">
               <div class="move bounce">
                  <a href="#about" class="ion-ios-arrow-down btn-scroll">
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End Home Revolution Slider Parallax Section -->

<div class="site-wrapper content">

   <!-- Start Features Section -->
   <section id="about">
      <div class="container">
         <div class="col-md-12 text-center wow fadeInUp">
            <h3 class="section-title">Tentang Perusahaan Kami</h3>
            <p class="subheading">"Kami merupakan<span class="highlight"> sebuah team</span>,  yang berupaya memperkaya kehidupan orang lain</p>
         </div>
         <div class="row features-row wow fadeInUp">
            <div class="col-md-4 col-sm-12 feature-column">
               <div class="feature-icon">
                  <i class="bi bi-pc-display size-2x highlight"></i>
                  <i class="bi bi-pc-display back-icon"></i>
               </div>
               <div class="feature-info">
                  <h4>Pengembangan Kustom</h4>
                  <p class="feature-description">Tingkatkan Produktivitas dan Efisiensi Bisnis Anda dengan Solusi Jasa IT Unggulan: Pembuatan Sistem Internal yang Didesain Khusus untuk Meningkatkan Kinerja Perusahaan!</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-12 feature-column">
               <div class="feature-icon">
                  <i class="bi bi-clipboard-data size-2x highlight"></i>
                  <i class="bi bi-clipboard-data back-icon"></i>
               </div>
               <div class="feature-info">
                  <h4>Analisis Kebutuhan</h4>
                  <p class="feature-description">Kami Menyempurnakan Kinerja Bisnis Anda dengan Solusi Jasa IT Khusus: Sistem Internal yang Didukung oleh Analisis Kebutuhan Mendalam.</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-12 feature-column">
                <div class="feature-icon">
                   <i class="bi bi-lightbulb size-2x highlight"></i>
                   <i class="bi bi-lightbulb back-icon"></i>
                </div>
                <div class="feature-info">
                   <h4>Inovasi Teknologi </h4>
                   <p class="feature-description">Kami Menghadirkan Solusi Inovatif dalam Teknologi, Mengubah Cara Perusahaan Anda Beroperasi dengan Terus Menerapkan Perkembangan Terbaru.</p>
                </div>
             </div>
         </div>
         <div class="row wow fadeInUp">
            <div class="col-md-4 col-sm-12 feature-column">
               <div class="feature-icon">
                  <i class="bi bi-shield-plus size-2x highlight"></i>
                  <i class="bi bi-shield-plus back-icon"></i>
               </div>
               <div class="feature-info">
                  <h4>Pemeliharaan & Pembaruan</h4>
                  <p class="feature-description">Kami Menyediakan Layanan Pemeliharaan Teknologi Terkini dan Pembaruan Berkala yang Membantu Menjaga Kinerja Sistem Anda Tetap Optimal.</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-12 feature-column">
                <div class="feature-icon">
                   <i class="bi bi-hourglass size-2x highlight"></i>
                   <i class="bi bi-hourglass back-icon"></i>
                </div>
                <div class="feature-info">
                   <h4>Kemitraan Jangka Panjang </h4>
                   <p class="feature-description">Kami Siap Membangun Kemitraan Jangka Panjang yang Berkelanjutan, Menghadirkan Solusi Teknologi yang Menyokong Pertumbuhan Bersama dengan Fokus pada Keberlanjutan Kesuksesan Bisnis Anda.</p>
                </div>
             </div>
            <div class="col-md-4 col-sm-12 feature-column">
               <div class="feature-icon">
                  <i class="bi bi-headset size-2x highlight"></i>
                  <i class="bi bi-headset back-icon"></i>
               </div>
               <div class="feature-info">
                  <h4>Free 24/7 Support</h4>
                  <p class="feature-description">Tim kami selalu siap memberikan dukungan teknis yang responsif dan ramah kepada setiap klien, memastikan pengalaman layanan yang mulus dan bantuan yang tepat waktu dalam mengatasi setiap kebutuhan teknis.</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--End Features Section -->

   <!-- Start About Section -->
   <section id="about">
      <div class="container">
         <div class="row">
            <div class="col-md-6 text-left about-text">
               <h3 class="wow fadeInUp">VISI </h3>
               <p class="wow fadeInUp">“One Stop Solution
                Menjadi perusahaan yang menyediakan solusi digital seiring dengan pesatnya perkembangan dan kemajuan teknologi di era disrupsi 4.0 dan 5.0 yang juga membantu parra pelakui usaha dalam mengembangkan bisnisnya di ranah teknologi digital”.
                </p>
                <h3 class="wow fadeInUp">MISI </h3>
               <ul>
                <li><p class="wow fadeInUp">Menyediakan solusi digital secara berkelanjutan untuk para pelaku usaha.</p>
                </li>
                <li><p class="wow fadeInUp">Meningkatkan kwalitas SDM serta sistem secara progresif.</p>
                </li>
                <li><p class="wow fadeInUp">Menigkatkan kesejahteraan dan pemahaman akan kemajuan teknologi.</p>
                </li>
               </ul>
               <div class="" style="margin-top: 10rem">
                <p class="wow fadeInUp">
                    <a href="https://api.whatsapp.com/send/?phone=6281564912512&text&type=phone_number&app_absent=0" target="_blank" class="btn btn-primary btn-md"> <i class="bi bi-whatsapp"></i> Whatsapp</a>
                 </p>
               </div>

            </div>
            <div class="col-md-6 team-member ">
                <div class="">
                   <div class="img">
                      <img src="{{asset('img/team/idham.png')}}" class="img-responsive" alt="" />
                   </div>
                </div>
                <div class="member-info wow fadeInUp">
                   <h4>Idham Fakhri Yasid</h4>
                   <h5 class="highlight">Founder</h5>
                   <p>"Tingkatkan kinerja teknologimu bersama kami."
                   </p>
                </div>
             </div>
         </div>
      </div>
   </section>
   <!-- End About Section -->


   <!-- Start Get Connected -->
   <section id="services" class="parallax-section-5">
    <div class="container">
       <div class="col-md-12 text-center">
          <h3 class="section-title wow fadeInUp">Apa Yang Kami Buat.</h3>
          <p class="subheading wow fadeInUp">Implementasi <span class="highlight">sistem</span> yang kami buat.</p>
       </div>
       <div class="row features-row wow fadeInUp">
          <div class="col-md-4 col-sm-12 feature-column">
             <div class="feature-icon">
                <i class="bi bi-buildings size-2x highlight"></i>
             </div>
             <div class="feature-info" style="margin-top:1rem">
                <h4>Company Profile</h4>
                <p class="feature-description" style="margin-top:2rem">Tingkatkan citra perusahaan Anda melalui layanan pembuatan company profile yang menarik, merefleksikan nilai, visi, dan prestasi perusahaan secara profesional.</p>
             </div>
          </div>
          <div class="col-md-4 col-sm-12 white feature-column">
             <div class="feature-icon">
                <i class="bi bi-gear size-2x highlight"></i>
             </div>
             <div class="feature-info">
                <h4>Enterprise Resource Planning</h4>
                <p class="feature-description">Optimalkan efisiensi bisnis Anda melalui layanan pembuatan ERP yang disesuaikan, menyelaraskan seluruh operasi perusahaan Anda dalam satu solusi terintegrasi yang handal.</p>
             </div>
          </div>
          <div class="col-md-4 col-sm-12 feature-column">
            <div class="feature-icon">
               <i class="bi bi-shop-window size-2x highlight"></i>
            </div>
            <div class="feature-info" style="margin-top:1rem">
               <h4>Point of Sales</h4>
               <p class="feature-description" style="margin-top:2rem">Tingkatkan citra perusahaan Anda melalui layanan pembuatan company profile yang menarik, merefleksikan nilai, visi, dan prestasi perusahaan secara profesional.</p>
            </div>
         </div>
          {{-- <div class="col-md-4 col-sm-12 white feature-column">
             <div class="feature-icon">
                <i class="bi bi-shop-window size-2x highlight"></i>
             </div>
             <div class="feature-info " style="margin-top: 1rem">
                <h4>Point of Sales</h4>
                <p class="feature-description" style="margin-top: 1rem">Kami menyediakan layanan pembuatan Point of Sales yang inovatif, memberikan solusi pintar untuk mengelola transaksi, persediaan, dan pengalaman pelanggan Anda secara efisien.</p>
             </div>
          </div> --}}
       </div>
    </div>
 </section>
 <!-- End Services Section -->


   <!-- Start Team Section -->
   <section id="team">
      <div class="container">
         <div class="col-md-12 text-center wow fadeInUp">
            <h3 class="section-title">Team Kami.</h3>
            <p class="subheading">Perpaduan yang menciptakan <span class="highlight">ide besar</span> dan cemerlang.</p>
         </div>
         <div class="row swiper">
            <div class="swiper-wrapper">
                <div class="col-md-4 col-sm-1 team-member swiper-slide">
                    <div class="effect effects wow fadeInUp">
                       <div class="img">
                          <img src="{{asset('img/team/firdi.png')}}" class="img-responsive" alt="" />
                          <div class="overlay">
                             <ul class="expand">
                                <li class="social-icon">
                                   <a href="https://www.instagram.com/botolmardjhan/" >
                                    <i class="bi bi-instagram"></i>
                                   </a>
                                </li>
                             </ul>
                             <a class="close-overlay hidden">
                                x
                             </a>
                          </div>
                       </div>
                    </div>
                    <div class="member-info wow fadeInUp">
                       <h4>Firdiansyah Adi A</h4>
                       <h5 class="highlight">CEO</h5>
                       <p>
                        "Terkadang, langkah kecil yang diambil hari ini dapat membawa perubahan besar di masa depan."</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-1 team-member swiper-slide">
                    <div class="effect effects wow fadeInUp">
                       <div class="img">
                          <img src="{{asset('img/team/anas.jpg')}}" class="img-responsive" alt="" />
                          <div class="overlay">
                             <ul class="expand">
                                <li class="social-icon">
                                   <a href="https://www.instagram.com/justcallmesyiha/">
                                    <i class="bi bi-instagram"></i>
                                   </a>
                                </li>
                             </ul>
                             <a class="close-overlay hidden">
                                x
                             </a>
                          </div>
                       </div>
                    </div>
                    <div class="member-info wow fadeInUp">
                       <h4>Anas Syihabuddin</h4>
                       <h5 class="highlight">Divisi Perencanaan</h5>
                       <p>"Kebahagiaan bukan tujuan akhir, tetapi proses bagaimana kita menjalani setiap momen dalam perjalanan kehidupan."</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-1 team-member swiper-slide">
                   <div class="effect effects wow fadeInUp">
                      <div class="img">
                         <img src="{{asset('img/team/hayyi.jpg')}}" class="img-responsive" alt="" />
                         <div class="overlay">
                            <ul class="expand">
                               <li class="social-icon">
                                  <a href="https://www.instagram.com/hayyimahesa/">
                                    <i class="bi bi-instagram"></i>
                                  </a>
                               </li>
                            </ul>
                            <a class="close-overlay hidden">
                               x
                            </a>
                         </div>
                      </div>
                   </div>
                   <div class="member-info wow fadeInUp">
                      <h4>Hayyi Shinshan Mahes</h4>
                      <h5 class="highlight">Divisi Programmer</h5>
                      <p>"Ketika kita menghargai apa yang kita miliki, kita mulai menyadari betapa berlimpahnya berkah dalam hidup ini."</p>
                   </div>
                </div>
                <div class="col-md-4 col-sm-1 team-member swiper-slide">
                    <div class="effect effects wow fadeInUp">
                       <div class="img">
                          <img src="{{asset('img/team/sinta.jpg')}}" class="img-responsive" alt="" />
                          <div class="overlay">
                             <ul class="expand">
                                <li class="social-icon">
                                   <a href="https://www.instagram.com/rsintaa_/">
                                     <i class="bi bi-instagram"></i>
                                   </a>
                                </li>
                             </ul>
                             <a class="close-overlay hidden">
                                x
                             </a>
                          </div>
                       </div>
                    </div>
                    <div class="member-info wow fadeInUp">
                       <h4>Roshinta Anggraini</h4>
                       <h5 class="highlight">Divisi Programmer</h5>
                       <p>"Ketika kita memberi tanpa mengharapkan imbalan, kita mengalami kekayaan sejati dari pemberian itu sendiri."
                       </p>
                    </div>
                 </div>
                <div class="col-md-4 col-sm-1 team-member swiper-slide">
                   <div class="effect effects wow fadeInUp">
                      <div class="img">
                         <img src="{{asset('img/team/isa.jpg')}}" class="img-responsive" alt="" />
                         <div class="overlay">
                            <ul class="expand">
                               <li class="social-icon">
                                  <a href="https://www.instagram.com/isa.lalu/">
                                    <i class="bi bi-instagram"></i>
                                  </a>
                               </li>
                            </ul>
                            <a class="close-overlay hidden">
                               x
                            </a>
                         </div>
                      </div>
                   </div>
                   <div class="member-info wow fadeInUp">
                      <h4>Lalu Isari At-Tamimi</h4>
                      <h5 class="highlight">Divisi Programmer</h5>
                      <p>"Ketika kita bersyukur atas apa yang kita miliki, kita mengubah perspektif dan membuka pintu bagi lebih banyak hal positif dalam hidup ini."</p>
                   </div>
                </div>
                <div class="col-md-4 col-sm-1 team-member swiper-slide">
                    <div class="effect effects wow fadeInUp">
                       <div class="img">
                          <img src="{{asset('img/team/safrudin.jpg')}}" class="img-responsive" alt="" />
                          <div class="overlay">
                             <ul class="expand">
                                <li class="social-icon">
                                   <a href="https://www.instagram.com/sffrudin_/">
                                     <i class="bi bi-instagram"></i>
                                   </a>
                                </li>
                             </ul>
                             <a class="close-overlay hidden">
                                x
                             </a>
                          </div>
                       </div>
                    </div>
                    <div class="member-info wow fadeInUp">
                       <h4>Safrudin</h4>
                       <h5 class="highlight">Divisi Programmer</h5>
                       <p>
                        "Keberanian adalah ketika kita memilih untuk tetap maju meski ketakutan hadir dalam diri kita."
                       </p>
                    </div>
                 </div>
                <div class="col-md-4 col-sm-1 team-member swiper-slide">
                    <div class="effect effects wow fadeInUp">
                       <div class="img">
                          <img src="{{asset('img/team/freddy.jpg')}}" class="img-responsive" alt="" />
                          <div class="overlay">
                             <ul class="expand">
                                <li class="social-icon">
                                   <a href="https://www.instagram.com/frdy_21st/">
                                     <i class="bi bi-instagram"></i>
                                   </a>
                                </li>
                             </ul>
                             <a class="close-overlay hidden">
                                x
                             </a>
                          </div>
                       </div>
                    </div>
                    <div class="member-info wow fadeInUp">
                       <h4>Freddy Aditia</h4>
                       <h5 class="highlight">Divisi Programmer</h5>
                       <p>"Setiap kesalahan adalah pelajaran berharga yang membawa kita lebih dekat menuju kedewasaan."</p>
                    </div>
                 </div>
                </div>
            <div class="swiper-pagination"></div>

         </div>
      </div>
   </section>
   <!-- End Team Section -->


   {{-- cerita --}}
   <section id="quote" class="parallax-section-6">
    <div class="container">
       <div class="row wow fadeInUp">
          <div class="col-lg-12 wow fadeInUp" style="z-index:3">
             <div id="quote-slider" class="owl-carousel">
                <div>
                   <blockquote>
                      <i class="icon-left ion-quote ion-2x highlight"></i>
                      <span> Kualitas adalah investasi terbaik untuk masa depan.
                      </span>
                      <i class="icon-right ion-quote ion-2x highlight"></i>
                   </blockquote>
                   <h4 class="quote-author highlight">DIA Team</h4>
                </div>
                <div>
                    <blockquote>
                       <i class="icon-left ion-quote ion-2x highlight"></i>
                       <span> Keterbukaan dan komunikasi yang efektif adalah pondasi keberhasilan. </span>
                       <i class="icon-right ion-quote ion-2x highlight"></i>
                    </blockquote>
                    <h4 class="quote-author highlight">DIA Team</h4>
                 </div>
                 <div>
                    <blockquote>
                       <i class="icon-left ion-quote ion-2x highlight"></i>
                       <span> Kolaborasi mempercepat kemajuan teknologi. </span>
                       <i class="icon-right ion-quote ion-2x highlight"></i>
                    </blockquote>
                    <h4 class="quote-author highlight">DIA Team</h4>
                 </div>
             </div>
          </div>
       </div>
    </div>
 </section>
   {{-- END cerita --}}

   <!-- Start Quote Section -->
   {{-- <section id="quote" class="parallax-section-6">
      <div class="container">
         <div class="row wow fadeInUp">
            <div class="col-lg-12 wow fadeInUp" style="z-index:3">
               <div id="quote-slider" class="owl-carousel">
                  <div>
                     <blockquote>
                        <i class="icon-left ion-quote ion-2x highlight"></i>
                        <span> Kualitas adalah investasi terbaik untuk masa depan. </span>
                        <i class="icon-right ion-quote ion-2x highlight"></i>
                     </blockquote>
                     <h4 class="quote-author highlight">DIA Team</h4>
                  </div>
                  <div>
                     <blockquote>
                        <i class="icon-left ion-quote ion-2x highlight"></i>
                        <span> Keterbukaan dan komunikasi yang efektif adalah pondasi keberhasilan. </span>
                        <i class="icon-right ion-quote ion-2x highlight"></i>
                     </blockquote>
                     <h4 class="quote-author highlight">DIA Team</h4>
                  </div>
                  <div>
                     <blockquote>
                        <i class="icon-left ion-quote ion-2x highlight"></i>
                        <span> Kolaborasi mempercepat kemajuan teknologi. </span>
                        <i class="icon-right ion-quote ion-2x highlight"></i>
                     </blockquote>
                     <h4 class="quote-author highlight">DIA Team</h4>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> --}}
   <!-- End Quote Section -->

   <!-- Start Portfolio Section -->
   <section id="portfolio" style="position: relative;">
      <div class="separator"></div>
      <div class="container-fluid">
         <div class="col-md-12 text-center">
            <h3 class="section-title wow fadeInUp">Portfolio.</h3>
            <p class="subheading wow fadeInUp">Implementasi inovasi <span class="highlight">menjadi sistem</span>.</p>
         </div>
         <div id="filters-container-fullwidth" class="cbp-l-filters-alignCenter wow fadeInUp">
            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All
               <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".identity" class="cbp-filter-item">ERP
               <div class="cbp-filter-counter"></div>
            </div>

         </div>
         <div id="grid-container-fullwidth" class="cbp-l-grid-fullScreen">
            <ul>
               <li class="cbp-item effect effects identity logo">
                  <div class="img">
                     <img src="{{asset('img/portfolio/cleopatra.jpg')}}" class="img-responsive" alt="" />
                     <div class="overlay">
                        <ul class="expand">
                           <li class="cbp-l-icon">
                              <a href="{{asset('img/portfolio/fullsize/cleopatra.jpg')}}" class="cbp-lightbox" data-title="Dashboard<br>by Visual">
                                 <i class="icon-magnifier"></i>
                              </a>
                           </li>
                           <li class="cbp-l-icon">
                              <a href="https://proyek.digitalindustryagency.com/dashboard/analytics" class="cbp-singlePage">
                                 <i class="icon-link"></i>
                              </a>
                           </li>
                           <li class="cbp-l-caption-title">ERP</li>
                           <li class="cbp-l-caption-desc">by DIA</li>
                        </ul>
                     </div>
                  </div>
               </li>
               <li class="cbp-item effect effects identity logo">
                  <div class="img">
                     <img src="{{asset('img/portfolio/erp.jpg')}}" class="img-responsive" alt="" />
                     <div class="overlay">
                        <ul class="expand">
                           <li class="cbp-l-icon">
                              <a href="{{asset('img/portfolio/fullsize/erp.jpg')}}" class="cbp-lightbox" data-title="Dashboard<br>by Visual">
                                 <i class="icon-magnifier"></i>
                              </a>
                           </li>
                           <li class="cbp-l-icon">
                              <a href="https://project-erp-main.netlify.app/dashboard/app" class="cbp-singlePage">
                                 <i class="icon-link"></i>
                              </a>
                           </li>
                           <li class="cbp-l-caption-title">ERP 2</li>
                           <li class="cbp-l-caption-desc">by DIA</li>
                        </ul>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </section>
   <!-- End Portfolio Section -->

   <!-- Start Contact Form Section -->
   <section id="contact">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h3 class="section-title wow fadeInUp">Contact us</h3>
               <p class="subheading wow fadeInUp"> Let's Work Together. </p>
            </div>
            <div class="col-md-7 wow fadeInUp">
               <div id="message"></div>
               <!-- Contact Form will be functional only on your server. Upload to your server when testing. -->
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.838603393533!2d110.38757297419946!3d-7.806904592213465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a576fd80903e3%3A0x4d58890d43266b88!2sOmah%20Mapan%20Coworking%20Space%20%26%20Cafe!5e0!3m2!1sid!2sid!4v1700574332625!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-5 wow fadeInLeft">
               <h4> Yogyakarta : </h4>
               <address>
                Jl. Prof. DR. Soepomo Sh No.55, Janturan<br>
                Warungboto, Kec. Umbulharjo<br>
                Kota Yogyakarta, Daerah Istimewa Yogyakarta<br>
               <abbr title="Kode Pos">Pos:</abbr> 55164
               </address>
               <h4> Contact Us : </h4>
               <address>
               <abbr title="Phone">
               <strong> Phone </strong>
               </abbr> : <a href="https://api.whatsapp.com/send/?phone=6281564912512&text&type=phone_number&app_absent=0" target="_blank">+62 815-6491-2512</a> <br>
               {{-- <abbr title="Fax">
               <strong>Fax </strong>
               </abbr> : (123) 456-7890 <br> --}}
               <abbr title="Email">
               <strong>Email </strong>
               </abbr> : <a href="https://mailto:digitalindustryagency@gmail.com/">digitalindustryagency@gmail.com</a>
               </address>
            </div>
         </div>
      </div>
   </section>
   <!-- End Contact Form Section -->

   <!-- Start Footer 1 -->
   <footer id="footer">
      <!-- End Footer Widgets -->

      <div class="footer-copyright">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h3 class="section-title wow fadeInUp">Digital Industry Agency</h3>
                  <p class="wow fadeInUp"> All Rights Reserved. Copyright © 2023
                  <a href="http://localhost:8000" target="_blank">Digital Industry Agency</a>
                  </p>
                  <ul class="social-icons subheading">
                     <li>
                        <a href="https://www.instagram.com/digitalindustryagency/" target="_blank">
                           <i class="icon ion-social-instagram-outline"></i>
                        </a>
                     </li>
                     <li>
                        <a href="https://www.linkedin.com/company/digital-industry-agency" target="_blank">
                           <i class="icon ion-social-linkedin"></i>
                        </a>
                     </li>
                     <li>
                        <a href="https://www.facebook.com/digitalindustryagency" target="_blank">
                            <i class="icon ion-social-facebook"></i>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- End Footer Copyright -->

   </footer>
   <!-- End Footer 1 -->

   <!-- Start Back To Top -->
   <a id="back-to-top">
      <i class="icon ion-chevron-up"></i>
   </a>
   <!-- End Back To Top -->

</div>
<!-- End Site Wrapper -->
<!-- jQuery -->
<script type="text/javascript" src="{{asset('js/plugins/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/moderniz.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/smoothscroll.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/no-ui-slider/jquery.nouislider.all.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/revslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/easign1.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/cubeportfolio.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/owlcarousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/tweetie.min.js')}}"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="{{asset('js/plugins/gmap3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/counterup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    slidesPerView: 1,
    loop: true,

    breakpoints: {
        // When window width is >= 768px
        768: {
          slidesPerView: 3,
        },
      },

    // Navigation arrows
    // navigation: {
    //   nextEl: '.swiper-button-next',
    //   prevEl: '.swiper-button-prev',
    // },

    pagination: {
    el: '.swiper-pagination',
    },

    grabCursor: true,

  })
</script>

</body>
</html>
