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
    <div class="container col-lg-12">
        <div class="row justify-content-center">
          <div class="col-lg-10">

              <div class="row row-grid">
                    <div class="col-lg-8">

                      <div class="maulcard shadow">
                        <div class="card-header">
                          <h4 style="text-align:center; color:white;" >{{ $konten->judul_kegiatan }}</h4>
                        </div>
                        <div class="card-body">
                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                              <ul>
                                <li class="fa fa-pencil"> Administrator </li>
                                <li class="fa fa-clock-o">{{ " ".$konten->created_at }} </li>
                                <!-- <br> -->
                              </ul>

                              <div class="container col-lg-12">
                                <div class="row justify-content-between ">

                                          @if ($konten->foto_kegiatan!=NULL)
                                              <?php
                                              $foto=json_decode($konten->foto_kegiatan);
                                              ?>
                                              @for ($i = 0; $i < count($foto); $i++)
                                              <div class="col-md-6 mb-30 border-0 mt-4">
                                                <div class="categories_post">
                                                  <a href="{{ url('/upload/gambar/'.$foto[$i]) }}" target="_blank"><img class="img-fluid card card-lift--hover" src="{{ url('/upload/gambar/'.$foto[$i]) }}"></a>
                                                </div>
                                              </div>
                                              @endfor
                                          @else
                                              {{ "Tidak Ada" }}
                                          @endif
                                          <?php echo base64_decode($konten->isi_kegiatan); ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>


              </div>
            </div>

            <div class="col-lg-4">
              <div class="maulcard shadow">
                <div class="card-header">
                  <h4 style="text-align:center; color:white;" >Berita Terbaru</h4>
                </div>
                  <div class="card-body">

                        <div class="list styled custom-list">
                          <ul>
                            @foreach($berita as $key => $berita)
                              <li style="list-style-type: circle;"><a title='' href="{{ route('konten.berita', $berita->slug_berita) }}">{{ $berita->judul_berita }}</a><br>
                              <small>Oleh : {{ $berita->created_by }} | {{ $berita->created_at }}</small></li>
                            @endforeach

                            <a href="{{ route('front.berita') }}" title="Berita" target="_self">Selengkapnya</a>
                          </ul>
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
