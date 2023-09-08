@extends('layouts.front')
@section('content')
  <!--

=========================================================
* Argon Design System - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->



  <section class="section section-shaped">
    <div class="container col-lg-8">
        <div class="row justify-content-center">



            <div class="col-sm-8">
              <div class="row row-grid">
                  @foreach($galeri as $key => $galeri)
                  <div class="col-lg-6 mb-30 border-0">
                    <div class="categories_post">
                      <img class="img-fluid card card-lift--hover" src="{{ url('/upload/gambar/'.$galeri->nama_gambar) }}">
                      <div class="categories_details">
                        <div class="categories_text">
                          <div class="border_line"></div>
                          <a href="{{ url('/upload/gambar/'.$galeri->nama_gambar) }}" target="_blank">
                            <p>{{ $galeri->judul_gambar }}</p>
                          </a>
                          <div class="border_line"></div>
                          <div  target="_blank"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
              </div>
              <br><br>
              {{ $gam->links() }}
            </div>

            <div class="col-sm-4">
              <div class="maulcard shadow">
                <div class="card-header">
                  <h4 style="text-align:center; color:white;" >Berita Terbaru</h4>
                </div>
                  <div class="card-body">

                        <div class="list styled custom-list">
                          <ul>
                            @foreach($berita as $key => $berita)
                              <li style="list-style-type: circle;"><a title='' href="{{ route('konten.berita', $berita->slug_berita) }}">{{ $berita->judul_berita }}</a><br>
                              <small>Oleh : {{ $berita->created_by }} | {{ $berita->tgl_publikasi }}</small></li>
                            @endforeach

                            <a href="{{ route('front.berita') }}" title="Berita" target="_self">Selengkapnya</a>
                          </ul>
                  </div>
                </div>
              </div>
              <br>
              <div class="maulcard shadow">
                <div class="card-header">
                  <h4 style="text-align:center; color:white;" >Lokasi Inspektorat Jombang</h4>
                </div>
                  <div class="card-body">
                    <div class="categories_post">
                      <img class="img-fluid card card-lift--hover" width="100%" src="{{ asset('images/peta.png') }}">
                      <div class="categories_details">
                        <div class="categories_text">
                          <div class="border_line"></div>
                          <a href="https://www.google.co.id/maps/place/Inspektorat/@-7.5445757,112.2477821,15.75z/data=!4m5!3m4!1s0x0:0x70c628fecf659f0c!8m2!3d-7.5437761!4d112.2467512?hl=id" target="_blank">
                            <p>Link Peta Inspektorat Jombang</p>
                          </a>
                          <div class="border_line"></div>
                          <div  target="_blank"></div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
              <br>
              <div class="maulcard shadow">
                <div class="card-header">
                  <h4 style="text-align:center; color:white;" >Video Documentasi</h4>
                </div>
                  <div class="card-body">
                    <div class="categories_post">
                    @foreach($video as $key => $video)
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="{{ $video->link_video }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                      <br>
                    @endforeach
                    </div>
                </div>
              </div>
            </div>

        </div>
      </div>
  </section>

  @endsection
