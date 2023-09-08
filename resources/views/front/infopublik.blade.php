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
                  @foreach($arsip as $key => $arsip)
                  <div class="col-lg-6 mt-4">
                    <div class="card card-lift--hover shadow border-0">
                      <div class="card-body py-5">
                        <h6 class="text-warning text-uppercase" style="font-weight: bold;"><?php echo $arsip->judul_arsip ?></h6>
                        <div>
                          <span class="badge badge-pill badge-warning"><li class="fa fa-pencil">  <?php echo $arsip->created_by; ?></li></span>
                          <span class="badge badge-pill badge-warning"><li class="fa fa-clock-o">  <?php echo $arsip->created_at; ?></li></span>
                        </div>
                        <a href="{{ url('/upload/arsip/'.$arsip->nama_arsip) }}" target="_blank" class="btn btn-warning mt-4">Download</a>
                      </div>
                    </div>
                  </div>
                  @endforeach


              </div>
			  {{ $berkas->links() }}
            </div>
            <br><br>
            

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
            </div>

        </div>
      </div>
  </section>

  @endsection
