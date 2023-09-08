@extends('layouts.admin')
@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.kegiatan.title') }}
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
                            {{ $kegiatan->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Judul kegiatan
                        </th>
                        <td>
                            {{ $kegiatan->judul_kegiatan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Isi kegiatan
                        </th>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <dir class="container">
                                        <textarea class="form-control my-editor" style="height: 400px;">{{ old('isi_kegiatan', isset($kegiatan) ? base64_decode($kegiatan->isi_kegiatan) : '') }}</textarea>
                                    
                                    </dir>  
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
                                $foto = json_decode($kegiatan->foto_kegiatan);
                             ?>
                            @foreach($foto as $file)
                                <a href="{{ url('/upload/gambar/'.$file) }}" target="_blank"><img width="550px" src="{{ url('/upload/gambar/'.$file) }}"></a><br><br>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Arsip
                        </th>
                        <td>
                            <?php 
                                $arsip = json_decode($kegiatan->arsip_kegiatan);
                             ?>
                            @foreach($arsip as $file)
                                <a href="{{ url('/upload/arsip/'.$file) }}" target="_blank"><img width="550px" src="{{ url('/upload/arsip/'.$file) }}"></a><br><br>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tag Terkait
                        </th>
                        <td>
                            <?php 
                                $tag = json_decode($kegiatan->tag_kegiatan);
                             ?>
                            @foreach($tag as $permission)
                                <span class="badge badge-danger">{{ $permission }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Validasi publikasi
                        </th>
                        <td>
                            {{ $kegiatan->status_kegiatan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created By
                        </th>
                        <td>
                            {{ $kegiatan->created_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated By
                        </th>
                        <td>
                            {{ $kegiatan->updated_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created At
                        </th>
                        <td>
                            {{ $kegiatan->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Updated At
                        </th>
                        <td>
                            {{ $kegiatan->updated_at }}
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