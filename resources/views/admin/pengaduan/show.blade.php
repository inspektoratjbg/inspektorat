@extends('layouts.admin')
@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="card">
    <div class="card-header">
        Detail Pengaduan
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            Id
                        </th>
                        <td>
                            {{ $pengaduan->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            NIK Pelapor
                        </th>
                        <td>
                            {{ $pengaduan->nik_pelapor }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama Pelapor
                        </th>
                        <td>
                            {{ $pengaduan->nama_pelapor }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Domisi Pelapor
                        </th>
                        <td>
                            {{ $pengaduan->kota_domisili }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Jenis Kelamin Pelapor
                        </th>
                        <td>
                            {{ $pengaduan->jenis_kelamin }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Email Pelapor
                        </th>
                        <td>
                            {{ $pengaduan->email_pelapor }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Kontak Pelapor
                        </th>
                        <td>
                            {{ $pengaduan->kontak_pelapor }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Alamat Pelapor
                        </th>
                        <td>
                            {{ $pengaduan->alamat_pelapor }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Pekerjaan Pelapor
                        </th>
                        <td>
                            {{ $pengaduan->pekerjaan_pelapor }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Kategori/Jenis Laporan
                        </th>
                        <td>
                            {{ $pengaduan->kategori_laporan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Klasifikasi Instansi
                        </th>
                        <td>
                            {{ $pengaduan->klasifikasi_instansi }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama Instansi
                        </th>
                        <td>
                            {{ $pengaduan->nama_instansi }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama Terlapor
                        </th>
                        <td>
                            {{ $pengaduan->nama_terlapor }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Hubungan Pelapor
                        </th>
                        <td>
                            {{ $pengaduan->hubungan_pelapor }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Harapan Pelapor
                        </th>
                        <td>
                            {{ $pengaduan->harapan_pelapor }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Uraiaan Peristiwa
                        </th>
                        <td>
                            {{ $pengaduan->uraian_peristiwa }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            KTP
                        </th>
                        <td>
                            <a href="{{ url('/upload/ktp/'.$pengaduan->ktp_pelapor) }}" target="_blank"><img width="550px" src="{{ url('/upload/gambar/'.$pengaduan->ktp_pelapor) }}"></a>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Arsip
                        </th>
                        <td>
                            <a class="btn btn-xs btn-primary" href="{{ url('/upload/bukti/'.$pengaduan->bukti_laporan) }}" target="_blank">Download Bukti</a>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created At
                        </th>
                        <td>
                            {{ $pengaduan->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated At
                        </th>
                        <td>
                            {{ $pengaduan->updated_at }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-success" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>

<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>
@endsection
