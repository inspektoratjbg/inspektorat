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
              <div class="row justify-content-center">
                <!--  -->
                <form class="form-inline" action="{{ route("front.pencarian") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" aria-label="cari" name="cari" aria-describedby="basic-addon1">
                        <div class="input-group-prepend">
                          <input class="btn btn-success" type="submit" value="Cari">
                        </div>
                    </div>
                </form>
              </div>
              <div class=" col-lg-12">
                <div class="row row-grid">
                    @foreach($berita as $key => $berita)
                      <div class="col-lg-6 mt-4">
                        <div class="card card-lift--hover shadow border-0">
                          <div class="card-header">
                            <h6 class="text-uppercase" style="font-weight: bold; color:black;">{{ $berita->judul_berita }}</h6>
                          </div>
                          <div class="card-body">

                            <?php
                                $foto = json_decode($berita->foto_berita);
                            ?>
                                <a href="{{ url('/upload/gambar/'.$foto[0]) }}" target="_blank"><img class="img-fluid card" src="{{ url('/upload/gambar/'.$foto[0]) }}"></a><br>

                            <div>
                              <span class="badge badge-pill badge-primary"><li class="fa fa-pencil">{{ " ".$berita->created_by }}</li></span>
                              <span class="badge badge-pill badge-danger"><li class="fa fa-clock-o">{{ " ".$berita->tgl_publikasi }}</li></span>
                            </div>
                            <a href="{{ route('konten.berita', $berita->slug_berita) }}" class="btn btn-warning mt-2">Selengkapnya</a>
                          </div>
                        </div>
                      </div>
                    @endforeach


                </div>
              </div>
            </div>

            <div class="col-sm-4">
              
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
