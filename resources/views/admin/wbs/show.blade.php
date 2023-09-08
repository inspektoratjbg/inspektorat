@extends('layouts.admin')
@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="card">
    <div class="card-header">
        Detail wbs
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
                            {{ $wbs->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Token
                        </th>
                        <td>
                            {{ $wbs->token }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            NIK Pelapor
                        </th>
                        <td>
                            {{ $wbs->nik_pelapor }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama Pelapor
                        </th>
                        <td>
                            {{ $wbs->nama_pelapor }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Email Pelapor
                        </th>
                        <td>
                            {{ $wbs->email_pelapor }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Kontak Pelapor
                        </th>
                        <td>
                            {{ $wbs->kontak_pelapor }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Alamat Pelapor
                        </th>
                        <td>
                            {{ $wbs->alamat_pelapor }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama Instansi
                        </th>
                        <td>
                            {{ $wbs->nama_instansi }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama Terlapor
                        </th>
                        <td>
                            {{ $wbs->nama_terlapor }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Uraiaan Peristiwa
                        </th>
                        <td>
                            {{ $wbs->uraian_peristiwa }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            KTP
                        </th>
                        <td>
                            <a href="{{ url('/upload/wbs/ktp/'.$wbs->ktp_pelapor) }}" target="_blank"><img width="550px" src="{{ url('/upload/wbs/ktp/'.$wbs->ktp_pelapor) }}">Download KTP</a>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Arsip
                        </th>
                        <td>
                            <a class="btn btn-xs btn-primary" href="{{ url('/upload/wbs/bukti/'.$wbs->bukti_laporan) }}" target="_blank">Download Bukti</a>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Catatan dari inspektorat
                        </th>
                        <td>
                            {{ $wbs->catatan_feedback }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Lampiran hasil penindakan dr inspektorat
                        </th>
                        <td>
                            <a class="btn btn-xs btn-primary" href="{{ url('/upload/wbs/feedback/'.$wbs->lampiran_feedback) }}" target="_blank">Download Lampiran</a>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tanggal Publikasi
                        </th>
                        <td>
                            {{ $wbs->publikasi }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Status Laporan
                        </th>
                        <td>
                            @if($wbs->status==1)
                                Belum ditindak
                            @elseif($wbs->status==2)
                                Ditindak
                            @else
                                Sudah Memiliki Jawaban
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created At
                        </th>
                        <td>
                            {{ $wbs->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated At
                        </th>
                        <td>
                            {{ $wbs->updated_at }}
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
