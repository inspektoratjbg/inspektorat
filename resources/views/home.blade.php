@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <b>Fitur-Fitur</b>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled">
                <li class="media">
                    <img class="bd-placeholder-img mr-3" src="{{ url('/upload/icon/training.png') }}" width="64" height="64" alt="avatar">

                    <div class="media-body">
                    <h5 class="mt-0 mb-1">Fitur Admin Website</h5>
                    Sistem admin website digunakan untuk mengelola website inspektorat, fitur-fitur yang digunakan untuk mengelola profil website, mengelola akses user, mengelola file dan gambar, mengelola laporan pengaduan dan mengelola informasi termasuk berita yang terkait dengan Inspektorat Kabupaten Jombang.
                    </div>
                </li>
                <li class="media my-4">
                    <img class="bd-placeholder-img mr-3" src="{{ url('/upload/icon/books.png') }}" width="64" height="64" alt="avatar">
                    
                    <div class="media-body">
                    <h5 class="mt-0 mb-1">Fitur E-Arsip</h5>
                    Sistem E-Arsip atau tepatnya Fitur Surat berfungsi untuk mengelola surat dengan beberapa kelompok yaitu surat masuk, surat keluar, surat tugas, surat cuti, undangan arsip sk, arsip kepegawaiaan dan disposisi untuk surat masuk. dan beberapa fitur lainnya untuk mempermudah pengelolaan surat.
                    </div>
                </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul class="list-unstyled">
                <li class="media">
                    <img class="bd-placeholder-img mr-3" src="{{ url('/upload/icon/user.png') }}" width="64" height="64" alt="avatar">

                    <div class="media-body">
                    <h5 class="mt-0 mb-1">Fitur Pengelolaan Sakip</h5>
                    Aplikasi Sakip Digital yang terdapat di fitur Sakip digunakan untuk penunjang pelaksanaan Sistem Akuntabilitas Kinerja Instansi Pemerintahan (SAKIP) dimana sistem ini merupakan integrasi dari sistem perencanaan, sistem penganggaran dan sistem pelaporan kinerja, yang selaras dengan pelaksanaan sistem akuntabilitas keuangan.
                    </div>
                </li>
                <li class="media my-4">
                    <img class="bd-placeholder-img mr-3" src="{{ url('/upload/icon/task.png') }}" width="64" height="64" alt="avatar">

                    <div class="media-body">
                    <h5 class="mt-0 mb-1">Fitur Inventaris Kantor</h5>
                    Aplikasi Inventaris terdapat dalam Fitur Inventaris yang digunakan untuk mengelola inventaris meliputi data ketersediaan barang, log pembelian (barang masuk) ataupun barang keluar, berita acara pembelian, laporan bulanan dan laporan tahunan.
                    </div>
                </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <b>Galeri Inspektorat</b>
            </div>
            <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <?php $i=0; ?>
                        @foreach($gambar as $key => $gambar)
                            @if($i==0)
                                <div class="carousel-item active">
                                    <img width="100%" height="100%" src="{{ url('/upload/gambar/'.$gambar->nama_gambar) }}" alt="">
                                </div>
                            @else
                                <div class="carousel-item">
                                    <img width="100%" height="100%" src="{{ url('/upload/gambar/'.$gambar->nama_gambar) }}" alt="">
                                </div>
                            @endif
                            <?php $i++; ?>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
@section('scripts')

@parent

@endsection