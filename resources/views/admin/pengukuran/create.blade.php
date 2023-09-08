@extends('layouts.admin')
@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="card">
    <div class="card-header">
        Perjanjian Kinerja Baru
    </div>

    <div class="card-body">
        <form action="{{ route("admin.perjanjian.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('sasaran') ? 'has-error' : '' }}">
                <label for="sasaran">Sasaran *</label>
                <input type="text" id="sasaran" name="sasaran" class="form-control" value="{{ old('sasaran', isset($perjanjian) ? $perjanjian->sasaran : '') }}" required>
                @if($errors->has('sasaran'))
                    <em class="invalid-feedback">
                        {{ $errors->first('sasaran') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('indikator_kinerja') ? 'has-error' : '' }}">
                <label for="indikator_kinerja">Indikator Kinerja *</label>
                <input type="text" id="indikator_kinerja" name="indikator_kinerja" class="form-control" value="{{ old('indikator_kinerja', isset($perjanjian) ? $perjanjian->indikator_kinerja : '') }}" required>
                @if($errors->has('indikator_kinerja'))
                    <em class="invalid-feedback">
                        {{ $errors->first('indikator_kinerja') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('satuan') ? 'has-error' : '' }}">
                <label for="satuan">Satuan ex: (LHA, LHE, LHR, etc) *</label>
                <input type="text" id="satuan" name="satuan" class="form-control" value="{{ old('satuam', isset($perjanjian) ? $perjanjian->satuan : '') }}" required>
                @if($errors->has('satuan'))
                    <em class="invalid-feedback">
                        {{ $errors->first('satuan') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('target') ? 'has-error' : '' }}">
                <label for="target">Target (Number) *</label>
                <input type="number" id="target" name="target" class="form-control" value="{{ old('target', isset($perjanjian) ? $perjanjian->target : '') }}" required>
                @if($errors->has('target'))
                    <em class="invalid-feedback">
                        {{ $errors->first('target') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('urutan_per_tahun') ? 'has-error' : '' }}">
                <label for="urutan_per_tahun">Urutan *</label>
                <input type="text" id="urutan_per_tahun" name="urutan_per_tahun" class="form-control" value="{{ old('urutan_per_tahun', isset($perjanjian) ? $perjanjian->urutan_per_tahun : '') }}" required>
                @if($errors->has('urutan_per_tahun'))
                    <em class="invalid-feedback">
                        {{ $errors->first('urutan_per_tahun') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">

                <input type="hidden" id="created_by" name="created_by" class="form-control" value="{{ $pengguna['nama_pegawai'] }}" required>
            </div>
            <div class="form-group">

                <input type="hidden" id="id_sakip" name="id_sakip" class="form-control" value="{{ $sakip }}" required>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


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