@extends('layouts.admin')
@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.berita.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.berita.update", [$berita->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">

                <input type="hidden" id="id" name="id" class="form-control" value="{{ $berita->id }}" required>
            </div>

            <div class="form-group {{ $errors->has('judul_berita') ? 'has-error' : '' }}">
                <label for="judul_berita">Nama berita *</label>
                <input type="text" id="judul_berita" name="judul_berita" class="form-control" value="{{ old('judul_berita', isset($berita) ? $berita->judul_berita : '') }}" required>
                @if($errors->has('judul_berita'))
                    <em class="invalid-feedback">
                        {{ $errors->first('judul_berita') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">
                <label for="job">Konten berita*</label>
                 <div class="mb-3">
                <textarea class="form-control my-editor" name="isi_berita">{{ old('isi_berita', isset($berita) ? base64_decode($berita->isi_berita) : '') }}</textarea>
                </div>
                @if($errors->has('isi_berita'))
                    <em class="invalid-feedback">
                        {{ $errors->first('isi_berita') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <?php $gambar_master=json_decode($berita->foto_berita); ?>
            <div class="form-group {{ $errors->has('foto_berita') ? 'has-error' : '' }}">
                <label for="foto_berita">Gambar berita *
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="foto_berita[]" id="foto_berita" class="form-control select2" multiple="multiple" required>
                    @foreach($gambar as $id => $gambar)
                        <option <?php if (in_array($gambar->nama_gambar, $gambar_master, TRUE)){ echo "selected";} ?> value="{{ $gambar->nama_gambar }}">{{ $gambar->nama_gambar }}</option>
                    @endforeach
                </select>
                @if($errors->has('foto_berita'))
                    <em class="invalid-feedback">
                        {{ $errors->first('foto_berita') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <?php $arsip_master=json_decode($berita->arsip_berita); ?>
            <div class="form-group {{ $errors->has('arsip_berita') ? 'has-error' : '' }}">
                <label for="arsip_berita">Arsip berita *
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="arsip_berita[]" id="arsip_berita" class="form-control select2" multiple="multiple" required>
                    @foreach($arsip as $id => $arsip)
                        <option <?php if (in_array($arsip->nama_arsip, $arsip_master, TRUE)){ echo "selected";} ?> value="{{ $arsip->nama_arsip }}">{{ $arsip->nama_arsip }}</option>
                    @endforeach
                </select>
                @if($errors->has('arsip_berita'))
                    <em class="invalid-feedback">
                        {{ $errors->first('arsip_berita') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <?php $tag_master=json_decode($berita->tag_berita); ?>
            <div class="form-group {{ $errors->has('tag_berita') ? 'has-error' : '' }}">
                <label for="tag_berita">Tag berita *
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="tag_berita[]" id="tag_berita" class="form-control select2" multiple="multiple" required>
                    @foreach($tag as $id => $tag)
                        <option <?php if (in_array($tag->nama_tag, $tag_master, TRUE)){ echo "selected";} ?> value="{{ $tag->nama_tag }}">{{ $tag->nama_tag }}</option>
                    @endforeach
                </select>
                @if($errors->has('tag_berita'))
                    <em class="invalid-feedback">
                        {{ $errors->first('tag_berita') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('foto_berita') ? 'has-error' : '' }}">
                <label for="status_berita">Status konten berita *
                <select name="status_berita" id="status_berita" class="form-control" required>
                        <option value="aktif" >Aktif</option>
                        <option value="tidak aktif" >Tidak Aktif</option>
                </select>
                @if($errors->has('status_berita'))
                    <em class="invalid-feedback">
                        {{ $errors->first('status_berita') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>


            

            <div class="form-group">

                <input type="hidden" id="created_by" name="created_by" class="form-control" value="{{ old('created_by', isset($gambar) ? $gambar->created_by : '') }}" required>
            </div>
            <div class="form-group">

                <input type="hidden" id="updated_by" name="updated_by" class="form-control" value="{{ $pengguna['nama_pegawai'] }}" required>
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