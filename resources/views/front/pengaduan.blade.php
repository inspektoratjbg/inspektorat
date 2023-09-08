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
    <div class="container col-lg-10">
        <div class="row justify-content-center">



            <div class="col-sm-8">

              <div class="row row-grid">
                <div class="card col-md-12 shadow border-0">
                  <div class="card-header" style="vertical-align:center;">
                      <h3 style="text-align:center; color:white;">Form Pengaduan</h3>
                  </div>
                  <div class="card-body  py-5">
                    <div class="col-md-12 col-md-offset-1 col-sm-12 col-xs-12">
                      <form action="{{ route("front.inputpengaduan") }}" method="post" enctype="multipart/form-data" >
                        {{ csrf_field() }}

                          <div class="row clearfix">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group {{ $errors->has('nama_pelapor') ? 'has-error' : '' }}">
                                <input class="form-control" type="text" name="nama_pelapor" placeholder="Nama Pelapor *" required>
                                <div class="invalid-feedback">
                                  @if($errors->has('nama_pelapor'))
                                      <em class="invalid-feedback">
                                          {{ $errors->first('nama_pelapor') }}
                                      </em>
                                  @endif
                                  <p class="helper-block">
                                      <?php echo ''; ?>
                                  </p>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group {{ $errors->has('nik_pelapor') ? 'has-error' : '' }}">
                                <input class="form-control" type="text" name="nik_pelapor" placeholder="NIK Pelapor *" required>
                                <div class="invalid-feedback">
                                  @if($errors->has('nik_pelapor'))
                                      <em class="invalid-feedback">
                                          {{ $errors->first('nik_pelapor') }}
                                      </em>
                                  @endif
                                  <p class="helper-block">
                                      <?php echo ''; ?>
                                  </p>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group {{ $errors->has('kota_domisili') ? 'has-error' : '' }}">
                                <input class="form-control" type="text" name="kota_domisili" placeholder="Kota Domisili *" required>
                                <div class="invalid-feedback">
                                  @if($errors->has('kota_domisili'))
                                      <em class="invalid-feedback">
                                          {{ $errors->first('kota_domisili') }}
                                      </em>
                                  @endif
                                  <p class="helper-block">
                                      <?php echo ''; ?>
                                  </p>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <select class="form-control select2" style="width: 100%;" name="jenis_kelamin">
                                  <option value="-">Jenis Kelamin *</option>
                                  <option value="pria">Pria</option>
                                  <option value="wanita">Wanita</option>
                                </select>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group {{ $errors->has('email_pelapor') ? 'has-error' : '' }}">
                                <input class="form-control" type="text" name="email_pelapor" placeholder="Email Pelapor *" required>
                                <div class="invalid-feedback">
                                  @if($errors->has('email_pelapor'))
                                      <em class="invalid-feedback">
                                          {{ $errors->first('email_pelapor') }}
                                      </em>
                                  @endif
                                  <p class="helper-block">
                                      <?php echo ''; ?>
                                  </p>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group {{ $errors->has('kontak_pelapor') ? 'has-error' : '' }}">
                                <input class="form-control" type="text" name="kontak_pelapor" placeholder="No Handphone *" required>
                                <div class="invalid-feedback">
                                  @if($errors->has('kontak_pelapor'))
                                      <em class="invalid-feedback">
                                          {{ $errors->first('kontak_pelapor') }}
                                      </em>
                                  @endif
                                  <p class="helper-block">
                                      <?php echo ''; ?>
                                  </p>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group {{ $errors->has('alamat_pelapor') ? 'has-error' : '' }}">
                                <textarea name="alamat_pelapor" class="form-control textarea" placeholder="Alamat Pelapor *" required></textarea>
                                <div class="invalid-feedback">
                                  @if($errors->has('alamat_pelapor'))
                                      <em class="invalid-feedback">
                                          {{ $errors->first('alamat_pelapor') }}
                                      </em>
                                  @endif
                                  <p class="helper-block">
                                      <?php echo ''; ?>
                                  </p>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group {{ $errors->has('pekerjaan_pelapor') ? 'has-error' : '' }}">
                                <input class="form-control" type="text" name="pekerjaan_pelapor" placeholder="Pekerjaan Pelapor *" required>
                                <div class="invalid-feedback">
                                  @if($errors->has('pekerjaan_pelapor'))
                                      <em class="invalid-feedback">
                                          {{ $errors->first('pekerjaan_pelapor') }}
                                      </em>
                                  @endif
                                  <p class="helper-block">
                                      <?php echo ''; ?>
                                  </p>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <select class="form-control select2" style="width: 100%;" name="kategori_laporan">
                                  <option value="-">Kategori Laporan *</option>
                                  <option value="informasi">Informasi</option>
                                  <option value="aspirasi">Aspirasi</option>
                                  <option value="pengaduan">Pengaduan</option>
                                </select>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <select class="form-control select2" style="width: 100%;" name="klasifikasi_instansi">
                                  <option value="-">Kategori Instansi Terlapor *</option>
                                  <option value="kepala daerah">Kepala Daerah</option>
                                  <option value="sekretariat dprd">Sekretariat DPRD</option>
                                  <option value="staf ahli">Staf Ahli</option>
                                  <option value="badan">Badan</option>
                                  <option value="kantor">Kantor</option>
                                  <option value="sekretariat daerah">Sekretariat Daerah</option>
                                  <option value="dinas">Dinas</option>
                                  <option value="kecamatan">Kecamatan</option>
                                  <option value="bumd">BUMD</option>
                                </select>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group {{ $errors->has('nama_instansi') ? 'has-error' : '' }}">
                                <input class="form-control" type="text" name="nama_instansi" placeholder="Nama Instansi *" required>
                                <div class="invalid-feedback">
                                  @if($errors->has('nama_instansi'))
                                      <em class="invalid-feedback">
                                          {{ $errors->first('nama_instansi') }}
                                      </em>
                                  @endif
                                  <p class="helper-block">
                                      <?php echo ''; ?>
                                  </p>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group {{ $errors->has('nama_terlapor') ? 'has-error' : '' }}">
                                <input class="form-control" type="text" name="nama_terlapor" placeholder="Nama Terlapor *" required>
                                <div class="invalid-feedback">
                                  @if($errors->has('nama_terlapor'))
                                      <em class="invalid-feedback">
                                          {{ $errors->first('nama_terlapor') }}
                                      </em>
                                  @endif
                                  <p class="helper-block">
                                      <?php echo ''; ?>
                                  </p>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group {{ $errors->has('hubungan_pelapor') ? 'has-error' : '' }}">
                                <input class="form-control"
                                 type="text" name="hubungan_pelapor" placeholder="Hubungan Terlapor dengan Pelapor *" required>
                                <div class="invalid-feedback">
                                  @if($errors->has('hubungan_pelapor'))
                                      <em class="invalid-feedback">
                                          {{ $errors->first('hubungan_pelapor') }}
                                      </em>
                                  @endif
                                  <p class="helper-block">
                                      <?php echo ''; ?>
                                  </p>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group {{ $errors->has('harapan_pelapor') ? 'has-error' : '' }}">
                                 <textarea name="harapan_pelapor" class="form-control textarea" placeholder="Harapan Pelapor terhadap Terlapor *" required></textarea>
                                <div class="invalid-feedback">
                                  @if($errors->has('harapan_pelapor'))
                                      <em class="invalid-feedback">
                                          {{ $errors->first('harapan_pelapor') }}
                                      </em>
                                  @endif
                                  <p class="helper-block">
                                      <?php echo ''; ?>
                                  </p>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group {{ $errors->has('uraian_peristiwa') ? 'has-error' : '' }}">
                                 <textarea name="uraian_peristiwa" class="form-control textarea" placeholder="Uraian Peristiwa atau Alasan Melakukan Pengaduan *" required></textarea>
                                <div class="invalid-feedback">
                                  @if($errors->has('uraian_peristiwa'))
                                      <em class="invalid-feedback">
                                          {{ $errors->first('uraian_peristiwa') }}
                                      </em>
                                  @endif
                                  <p class="helper-block">
                                      <?php echo ''; ?>
                                  </p>
                                </div>
                              </div>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group {{ $errors->has('bukti_laporan') ? 'has-error' : '' }}">
                                <label for="bukti_laporan">Bukti Laporan *</label>
                                <input class="form-control" type="file" name="bukti_laporan" required>
                                <div class="invalid-feedback">
                                  @if($errors->has('bukti_laporan'))
                                      <em class="invalid-feedback">
                                          {{ $errors->first('bukti_laporan') }}
                                      </em>
                                  @endif
                                  <p class="helper-block">
                                      <?php echo ''; ?>
                                  </p>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group {{ $errors->has('ktp_pelapor') ? 'has-error' : '' }}">
                                <label for="ktp_pelapor">KTP Pelapor *</label>
                                <input class="form-control" type="file" name="ktp_pelapor" required>
                                <div class="invalid-feedback">
                                  @if($errors->has('ktp_pelapor'))
                                      <em class="invalid-feedback">
                                          {{ $errors->first('ktp_pelapor') }}
                                      </em>
                                  @endif
                                  <p class="helper-block">
                                      <?php echo ''; ?>
                                  </p>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group {{ $errors->has('captcha') ? 'has-error' : '' }}">
                                <label for="captcha">Captcha *</label>
                                <div class="captcha">
                                  <span>{!! captcha_img('math') !!}</span>
                                  <button type="button" class="btn btn-success btn-refresh" name="button">Refresh</button>
                                </div>
                                <input class="form-control mt-2" type="text" name="captcha" id="captcha" placeholder="Masukan Captcha *" required>
                                <div class="invalid-feedback">
                                  @if($errors->has('captcha'))
                                      <em class="invalid-feedback">
                                          {{ $errors->first('captcha') }}
                                      </em>
                                  @endif
                                  <p class="helper-block">
                                      <?php echo ''; ?>
                                  </p>
                                </div>
                              </div>
                          </div>

                          <div class="col-md-12 col-sm-12 col-xs-12 mt-4" style="align-items: center;">
                              <div class="form-group" align="center" style="align-items: center;">
                                  <input class="btn btn-success" type="submit" name="btn" value="Save" />
                              </div>
                          </div>
                      </div>
                      </form>
                  </div>
                </div>
              </div>


              </div>
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
            </div>

        </div>
      </div>
  </section>

  @endsection
