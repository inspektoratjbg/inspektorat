@extends('layouts.admin')
@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.pegawai.title') }}
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
                            {{ $pegawai->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            NIP
                        </th>
                        <td>
                            {{ $pegawai->nip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama
                        </th>
                        <td>
                            {{ $pegawai->nama_pegawai }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Divisi
                        </th>
                        <td>
                            {{ $pegawai->divisi_pegawai }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Jabatan
                        </th>
                        <td>
                            {{ $pegawai->nama_jabatan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Golongan
                        </th>
                        <td>
                            {{ $pegawai->nama_golongan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Pesan / Profil Pegawai 
                        </th>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <div class="container">
                                        <textarea class="form-control my-editor" style="height: 400px;">{{ old('pesan_pegawai', isset($pegawai) ? base64_decode($pegawai->pesan_pegawai) : '') }}</textarea>
                                    </div>  
                                </div>     
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Foto - Foto
                        </th>
                        <td>
                            <?php
                                if ($pegawai->foto_pegawai!=NULL) {
                                    $foto = json_decode($pegawai->foto_pegawai);
                                ?>
                                    @foreach($foto as $file)
                                        <a href="{{ url('/upload/gambar/'.$file) }}" target="_blank"><img width="550px" src="{{ url('/upload/gambar/'.$file) }}"></a><br><br>
                                    @endforeach
                                <?php
                                 } else{
                                    echo 'Tidak Ada';
                                 }
                             ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Arsip
                        </th>
                        <td>
                            <?php
                                if ($pegawai->arsip_pegawai==null) {
                                    $arsip = json_decode($pegawai->arsip_pegawai);
                                ?>
                                    @foreach($arsip as $file)
                                        <a href="{{ url('/upload/arsip/'.$file) }}" target="_blank"><img width="550px" src="{{ url('/upload/arsip/'.$file) }}"></a><br><br>
                                    @endforeach
                                <?php
                                 } else{
                                    echo 'Tidak Ada';
                                 } 
                             ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Validasi publikasi
                        </th>
                        <td>
                            {{ $pegawai->status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created By
                        </th>
                        <td>
                            {{ $pegawai->created_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated By
                        </th>
                        <td>
                            {{ $pegawai->updated_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created At
                        </th>
                        <td>
                            {{ $pegawai->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated At
                        </th>
                        <td>
                            {{ $pegawai->updated_at }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-success" href="{{ url()->previous() }}">
                Kembali
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