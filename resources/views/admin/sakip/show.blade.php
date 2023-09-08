@extends('layouts.admin')
@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.sakip.title') }}
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
                            {{ $sakip->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama Pihak Pertama
                        </th>
                        <td>
                            {{ $sakip->nama_pihak_pertama }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            NIP Pihak Pertama
                        </th>
                        <td>
                            {{ $sakip->nip_pihak_pertama }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Jabatan Pihak Pertama
                        </th>
                        <td>
                            {{ $sakip->jabatan_pihak_pertama }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Pangkat/Golongan Pihak Pertama
                        </th>
                        <td>
                            {{ $sakip->golongan_pihak_pertama }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama Pihak Kedua
                        </th>
                        <td>
                            {{ $sakip->nama_pihak_kedua }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            NIP Pihak Kedua
                        </th>
                        <td>
                            {{ $sakip->nip_pihak_kedua }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Jabatan Pihak Kedua
                        </th>
                        <td>
                            {{ $sakip->jabatan_pihak_kedua }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Pangkat/Golongan Pihak Kedua
                        </th>
                        <td>
                            {{ $sakip->golongan_pihak_kedua }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tahun Sakip
                        </th>
                        <td>
                            {{ $sakip->tahun }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Set Tanggal Cetak Sakip
                        </th>
                        <td>
                            {{ $sakip->tanggal_surat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Status Perjanjian
                        </th>
                        <td>
                            @if($sakip->status1=='1')
                                Terverifikasi
                            @else
                                Tidak Terverifikasi
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Status IKI dan IKU
                        </th>
                        <td>
                            @if($sakip->status2=='1')
                                Terverifikasi
                            @else
                                Tidak Terverifikasi
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Status SKP
                        </th>
                        <td>
                            @if($sakip->status3=='1')
                                Terverifikasi
                            @else
                                Tidak Terverifikasi
                            @endif    
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Status Pengukuran
                        </th>
                        <td>
                            @if($sakip->status4=='1')
                                Terverifikasi
                            @else
                                Tidak Terverifikasi
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created By
                        </th>
                        <td>
                            {{ $sakip->created_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated By
                        </th>
                        <td>
                            {{ $sakip->updated_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created At
                        </th>
                        <td>
                            {{ $sakip->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated At
                        </th>
                        <td>
                            {{ $sakip->updated_at }}
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