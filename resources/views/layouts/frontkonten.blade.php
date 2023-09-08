<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $berita->judul_berita }} - Inspektorat Kab. Jombang</title>
    <meta name="description" content="Inspektorat Kabupaten Jombang Bersama Mewujudkan Jombang Yang Berkarakter Dan Berdaya Saing." />
    <meta name="robots" content="index, follow, noodp">
    <meta name="keywords" content="inspektorat kabupaten jombang, inspektur jombang, auditor jombang, wbs jombang, pengawasan jombang, pengaduan jombang" />
    <link rel="canonical" href="https://www.inspektorat.jombangkab.go.id/" />
    <link rel="preconnect" href="https://www.inspektorat.jombangkab.go.id/">
    <meta name="dcterms.subject" content="inspektorat kabupaten jombang, inspektur jombang, auditor jombang, wbs jombang, pengawasan jombang, pengaduan jombang" />
    <meta name="dcterms.type" content="Service"/>
    <meta name="dcterms.language" content="id"/>
    <meta property="og:url" content="https://www.inspektorat.jombangkab.go.id/"/>
    <meta property="og:title" content="{{ $berita->judul_berita }} - Inspektorat Kab. Jombang" />
    <meta property="og:description" content="{{ $berita->judul_berita }}" />
    <meta property="og:image" content="https://inspektorat.jombangkab.go.id/front/logo1.png" />
    <meta property="og:site_name" content="Inspektorat Kabupaten Jombang" />
    <meta property="og:type" content="website" />

    <link href="{{ asset('front/logo1.png') }}" rel="icon"/>
    <link href="{{ asset('front/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/css/argon.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/css/main.css') }}" rel="stylesheet" />

    <style type="text/css">
        .image-cropper {
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
            border-radius: 50%;
        }

    </style>
    @yield('styles')
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed pace-done sidebar-lg-show">
  <?php
    // echo print_r($prof);
    // echo count($profil);
    // die();
   ?>
  <!-- Preloader Cuy -->
  <div class="animationload">
  <div class="loader">Loading...</div>
  </div>

  <!-- Navbar Cuy -->
  <header class="header-global">
      <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
        <div class="container col-lg-12">
          <a class="navbar-brand mr-lg-8" href="/">
            <img alt="image" src="{{ asset('front/logo.png') }}">
            <span class="nav-link-inner--text"></span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse collapse" id="navbar_global">
            <div class="navbar-collapse-header">
              <div class="row">
                <div class="col-6 collapse-brand">
                  <a href="/">
                    <img alt="image" src="{{ asset('front/logo.png') }}">
                    <span class="nav-link-inner--text"></span>
                  </a>
                </div>
                <div class="col-6 collapse-close">
                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                  </button>
                </div>
              </div>
            </div>
            <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
              <li class="nav-item dropdown">
                <a href="/" class="nav-link" role="button">
                  <i class="ni ni-collection d-lg-none"></i>
                  <span class="nav-link-inner--text">Home</span>
                </a>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
              <li class="nav-item dropdown">
                <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                  <i class="ni ni-collection d-lg-none"></i>
                  <span class="nav-link-inner--text">Profil</span>
                </a>
                <div class="dropdown-menu">
                  @foreach ($profil as $key => $profil)
                    <a href="{{ route('konten.profil', $profil->slug_profil) }}" class="dropdown-item">{{ $profil->judul_profil }}</a>
                  @endforeach
                  <a href="{{ route('front.pegawai') }}" class="dropdown-item">Profil Pegawai</a>


                </div>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
              <li class="nav-item dropdown">
                <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                  <i class="ni ni-collection d-lg-none"></i>
                  <span class="nav-link-inner--text">Kegiatan</span>
                </a>
                <div class="dropdown-menu">
                  @foreach ($kegiatan as $key => $kegiatan)
                    <a href="{{ route('konten.kegiatan', $kegiatan->slug_kegiatan) }}" class="dropdown-item">{{ $kegiatan->judul_kegiatan }}</a>
                  @endforeach

                </div>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
              <li class="nav-item dropdown">
                <a href="{{ route('front.berita') }}" class="nav-link" role="button">
                  <i class="ni ni-collection d-lg-none"></i>
                  <span class="nav-link-inner--text">Berita</span>
                </a>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
              <li class="nav-item dropdown">
                <a href="{{ route('front.galeri') }}" class="nav-link" role="button">
                  <i class="ni ni-collection d-lg-none"></i>
                  <span class="nav-link-inner--text">Galeri</span>
                </a>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
              <li class="nav-item dropdown">
                <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                  <i class="ni ni-collection d-lg-none"></i>
                  <span class="nav-link-inner--text">Pengaduan</span>
                </a>
                <div class="dropdown-menu">
                  @foreach ($aduan as $key => $aduan)
                    <a href="{{ route('konten.profil', $aduan->slug_profil) }}" class="dropdown-item">{{ $aduan->judul_profil }}</a>
                  @endforeach
                  <a href="{{ route('front.pengaduan') }}" class="dropdown-item">Media Pengaduan</a>
                </div>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
              <li class="nav-item dropdown">
                <a href="{{ route('front.infopublik') }}" class="nav-link" role="button">
                  <i class="ni ni-collection d-lg-none"></i>
                  <span class="nav-link-inner--text">Informasi Publik</span>
                </a>
              </li>
            </ul>
            <ul class="navbar-nav align-items-lg-center ml-lg-auto">
              <li class="nav-item">
                <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="Facebook Inspektorat Jombang">
                  <i class="fa fa-facebook-square"></i>
                  <span class="nav-link-inner--text d-lg-none">Facebook</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="Instagram Inspektorat Jombang">
                  <i class="fa fa-instagram"></i>
                  <span class="nav-link-inner--text d-lg-none">Instagram</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="Whatshapp Inspektorat">
                  <i class="fa fa-whatsapp"></i>
                  <span class="nav-link-inner--text d-lg-none">Twitter</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="Telephone Kantor">
                  <i class="fa fa-phone"></i>
                  <span class="nav-link-inner--text d-lg-none">Telephone</span>
                </a>
              </li>
              <li class="nav-item d-none d-lg-block ml-lg-4">
                <a href="/admin" target="_blank" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon">
                    <i class="fa fa-sign-out mr-2"></i>
                  </span>
                  <span class="nav-link-inner--text">Login</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

<main class="profile-page">

  <!-- start banner Area -->
  <section class="about-banner">
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="about-content col-lg-12">
          <h1 class="text-white">
            @for($i = 2; $i <= 2; $i++)
                     {{ $ok=ucfirst(Request::segment($i))}}
            @endfor
          </h1>
          <p class="text-white link-nav"><a href="/">Home &nbsp;</a>  <span class="fa fa-space-shuttle"></span>  <a href="{{ route('front.'.strtolower($ok)) }}">&nbsp; {{ $ok }}</a></p>
        </div>
      </div>
    </div>
  </section>
  <!-- End banner Area -->

    @yield('content')
    @include('sweetalert::alert')

</main>

  <!-- Start brands Area -->
  <section class="brands-area">
      <div class="container">
          <div class="brand-wrap">
              <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                  @foreach ($gambar as $key => $gambar)
                    <div class="col single-brand" style="margin-left: 20px; margin-top: 10px;">
                        <a href="{{ $gambar->judul_gambar }}" target="_blank"><img class="mx-auto" height="100px" src="{{ asset('/upload/gambar/'.$gambar->nama_gambar) }}" alt=""></a>
                    </div>
                  @endforeach
              </div>
          </div>
      </div>
  </section>

  <!-- Footer Cuy -->
  <footer class="footer" style="background: #10867d;">
    <div class="container ">

      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <div class="copyright" style="font-weight: bold; color:white;">
            &copy; Inspektorat Kabupaten Jombang
            <p style="font-weight: bold;"> Jl. Gatot Subroto No.169, Kepanjen, Kec. Jombang, Kabupaten Jombang, Jawa Timur 61419, Indonesia</p>
          </div>
        </div>
        <div class="col-lg-6 text-lg-center btn-wrapper">
          <h3 style="font-weight: bold; color:white;">Kontak Kami</h3><br>
          <a target="_blank" href="#" class="btn btn-neutral btn-icon-only btn-slack btn-round btn-lg" data-toggle="tooltip" data-original-title="Whatshapp">
            <i class="fa fa-whatsapp"></i>
          </a>
          <a target="_blank" href="#" class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg" data-toggle="tooltip" data-original-title="Facebook">
            <i class="fa fa-facebook-square"></i>
          </a>
          <a target="_blank" href="#" class="btn btn-neutral btn-icon-only btn-github btn-lg btn-round" data-toggle="tooltip" data-original-title="No Telfon">
            <i class="fa fa-phone"></i>
          </a>
          <a target="_blank" href="#" class="btn btn-neutral btn-icon-only btn-instagram btn-round btn-lg" data-toggle="tooltip" data-original-title="instagram">
            <i class="fa fa-instagram"></i>
          </a>
        </div>
      </div>
    </div>
  </footer>


    <script src="{{ asset('front/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('front/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('front/vendor/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/vendor/headroom/headroom.min.js') }}"></script>
    <script src="{{ asset('front/vendor/onscreen/onscreen.min.js') }}"></script>
    <script src="{{ asset('front/vendor/nouislider/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('front/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('front/js/argon.js') }}"></script>
    <script src="{{ asset('front/js/js/main.js') }}"></script>
    <script src="{{ asset('front/js/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/js/owl.carousel.min.js') }}"></script>
    <!-- Maps -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <!-- Tambahan cuy -->
    <script type="text/javascript">
        $('.btn-refresh').click(function() {
          $.ajax({
            type: 'GET',
            url: '{{ url('/refresh_captcha') }}',
            success: function (data) {
              $('.captcha span').html(data);
            }
          });
        });
        $(document).ready(function () {
        $('.navbar-light .dmenu').hover(function () {
                $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
            }, function () {
                $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
            });
        });
    </script>

    <script type="text/javascript">
    //              menentukan koordinat titik tengah peta
          var myLatlng = new google.maps.LatLng(-7.544076,112.24692);
    //              pengaturan zoom dan titik tengah peta
          var myOptions = {
              zoom: 13,
              center: myLatlng
          };
    //              menampilkan output pada element
          var map = new google.maps.Map(document.getElementById("map"), myOptions);
    //              menambahkan marker
          var marker = new google.maps.Marker({
               position: myLatlng,
               map: map,
               title:"Monas"
          });
    </script>
    @yield('scripts')
</body>

</html>
