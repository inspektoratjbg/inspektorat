<!DOCTYPE html>
<html lang="en">
  <head>
    <title>WBS (Whistleblowing System) Pemkab Jombang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link href="{{ asset('front/logo1.png') }}" rel="icon"/>
    <link rel="stylesheet" href="{{ asset('wbs/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('wbs/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('wbs/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('wbs/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('wbs/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('wbs/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('wbs/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('wbs/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('wbs/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('wbs/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('wbs/css/style.css') }}">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="#">WBS (Whistleblowing System)</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="#tentang-section" class="nav-link">Tentang</a></li>
                <li><a href="#unsur-section" class="nav-link">Unsur Pengaduan</a></li>
                <li><a href="#rahasia-section" class="nav-link">Kerahasiaan</a></li>
                <li><a href="#pengaduan-section" class="nav-link">Pengaduan</a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="https://inspektorat.jombangkab.go.id/" class="nav-link"><span>Kembali</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>

    </header>

    <div class="intro-section" id="tentang-section">

      <div class="slide-1" style="background-image: url('{{ asset('wbs/images/pns.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h3  data-aos="fade-up" data-aos-delay="100">Selamat Datang</h3>
                  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">Whistleblowing System (WBS) adalah sistem untuk memproses pengaduan/pemberian informasi yang disampaikan baik secara langsung maupun tidak langsung sehubungan dengan adanya perbuatan yang melanggar perundang-undangan, peraturan/standar, kode etik, dan kebijakan, serta tindakan lain yang sejenis berupa ancaman langsung atas kepentingan umum, serta Korupsi, Kolusi, dan Nepotisme (KKN). Silahkan laporkan pelanggaran yang Anda jumpai melalui form WBS berikut.</p>
                  <p data-aos="fade-up" data-aos-delay="300"><a href="/front/wbs" class="btn btn-primary py-3 px-5 btn-pill">Laporkan</a></p>

                </div>


              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="unsur-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 mb-5 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Feedback WBS</h2>
            <!-- <p class="mb-5">Jika Anda melihat atau mengetahui dugaan Tindak Pidana Korupsi atau bentuk pelanggaran lainnya yang dilakukan ASN Pemkab Jombang, silahkan melapor ke Inspektorat Kabupaten Jombang. Jika laporan anda memenuhi syarat/unsur, maka laporan Anda akan diproses lebih lanjut.</p> -->
          </div>
        </div>

        <div class="row">

          <div class="col-md-12 col-lg-12 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="teacher text-center">
              <div class="py-2">
                <h3 class="text-black">Identitas Pelapor</h3>
                <p>Nama Pelapor : {{ $feedback->nama_pelapor }}</p>
                <p>NIK Pelapor : {{ $feedback->nik_pelapor }}</p>
                <p>Kontak Pelapor : {{ $feedback->kontak_pelapor }}</p>
                <p>Alamat Pelapor : {{ $feedback->alamat_pelapor }}</p>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-lg-12 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="teacher text-center">
              <div class="py-2">
                <h3 class="text-black">Identitas Terlapor</h3>
                <p>Nama Terlapor : {{ $feedback->nama_terlapor }}</p>
                <p>Asal Instansi : {{ $feedback->nama_instansi }}</p>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-lg-12 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="teacher text-center">
              <div class="py-2">
                <h3 class="text-black">Feedback WBS</h3>
                <p>Catatan feedback : {{ $feedback->catatan_feedback }}</p>
                <p>Lampiran feedback : <a class="btn btn-xs btn-primary" href="{{ url('/upload/wbs/feedback/'.$feedback->lampiran_feedback) }}" target="_blank">Download Lampiran</a></p>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>

    @include('sweetalert::alert')

    <footer class="footer-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>WHISTLEBLOWER</h3>
            <p>Whistleblower atau peniup peluit adalah seseorang yang melaporkan pelanggaran/indikasi tindak pidana korupsi yang terjadi di dalam organisasi tempat dia bekerja, dan dia memiliki akses informasi yang memadai atas terjadinya indikasi pelanggaran/tindak pidana korupsi tersebut..</p>
          </div>

          <div class="col-md-3 ml-auto">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#">Pemkab Jombang</a></li>
              <li><a href="#">Inspektorat Kabupaten Jombang</a></li>
              <li><a href="#">Aplikasi Lapor</a></li>
              <li><a href="#">KPK</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <h3>Cek Pengaduan</h3>
            <p>Cek hasil pengaduan anda disini</p>
            <form action="{{ route("front.cariwbs") }}" method="post" class="footer-subscribe">
              {{ csrf_field() }}
              <div class="d-flex mb-5">
                <input type="text" name="token" class="form-control rounded-0" placeholder="Masukan token pengaduan anda">
                <input type="submit" class="btn btn-primary rounded-0" value="Proses">
              </div>
            </form>
          </div>

        </div>
        
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> | Inspektorat Kabupaten Jombang | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>



  </div> <!-- .site-wrap -->

  <script src="{{ asset('wbs/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('wbs/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('wbs/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('wbs/js/popper.min.js') }}"></script>
  <script src="{{ asset('wbs/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('wbs/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('wbs/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('wbs/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('wbs/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('wbs/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('wbs/js/aos.js') }}"></script>
  <script src="{{ asset('wbs/js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('wbs/js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('wbs/js/main.js') }}"></script>

  <script type="text/javascript">
      $('.btn-refresh').click(function() {
        $.ajax({
          type: 'GET',
          url: '/refresh_captcha',
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

  </body>
</html>
