@extends('layouts.admin')
@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.profil.title_singular') }}
    </div>
    <?php

    // echo print_r($arsip_master=json_decode($profil->foto_profil));
    // die();

     ?>
    <div class="card-body">
        <form action="{{ route("admin.profil.update", [$profil->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">

                <input type="hidden" id="id" name="id" class="form-control" value="{{ $profil->id }}" required>
            </div>

            <div class="form-group {{ $errors->has('judul_profil') ? 'has-error' : '' }}">
                <label for="judul_profil">Nama profil *</label>
                <input type="text" id="judul_profil" name="judul_profil" class="form-control" value="{{ old('judul_profil', isset($profil) ? $profil->judul_profil : '') }}" required>
                @if($errors->has('judul_profil'))
                    <em class="invalid-feedback">
                        {{ $errors->first('judul_profil') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">
                <label for="job">Konten berita*</label>
                 <div class="mb-3">
                <textarea class="form-control my-editor" name="isi_profil">{{ old('isi_profil', isset($profil) ? base64_decode($profil->isi_profil) : '') }}</textarea>
                </div>
                @if($errors->has('isi_profil'))
                    <em class="invalid-feedback">
                        {{ $errors->first('isi_profil') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <?php $gambar_master=json_decode($profil->foto_profil); ?>
            <div class="form-group {{ $errors->has('foto_profil') ? 'has-error' : '' }}">
                <label for="foto_profil">Gambar Profil *
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="foto_profil[]" id="foto_profil" class="form-control select2" multiple="multiple" required>
                    @foreach($gambar as $id => $gambar)
                        <option <?php if($gambar_master!=null){if (in_array($gambar->nama_gambar, $gambar_master, TRUE)){ echo "selected";}} ?> value="{{ $gambar->nama_gambar }}">{{ $gambar->judul_gambar }}</option>
                    @endforeach
                </select>
                @if($errors->has('foto_profil'))
                    <em class="invalid-feedback">
                        {{ $errors->first('foto_profil') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <?php $arsip_master=json_decode($profil->arsip_profil); ?>
            <div class="form-group {{ $errors->has('foto_profil') ? 'has-error' : '' }}">
                <label for="arsip_profil">Arsip Profil *
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="arsip_profil[]" id="arsip_profil" class="form-control select2" multiple="multiple">
                    @foreach($arsip as $id => $arsip)
                        <option <?php if($arsip_master!=null){if (in_array($arsip->nama_arsip, $arsip_master, TRUE)){ echo "selected";}} ?> value="{{ $arsip->nama_arsip }}">{{ $arsip->nama_arsip }}</option>
                    @endforeach
                </select>
                @if($errors->has('foto_profil'))
                    <em class="invalid-feedback">
                        {{ $errors->first('foto_profil') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <?php $tag_master=json_decode($profil->tag_profil); ?>
            <div class="form-group {{ $errors->has('tag_profil') ? 'has-error' : '' }}">
                <label for="tag_profil">Tag profil *
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="tag_profil[]" id="tag_profil" class="form-control select2" multiple="multiple" required>
                    @foreach($tag as $id => $tag)
                        <option <?php if (in_array($tag->kategori_tag, $tag_master, TRUE)){ echo "selected";} ?> value="{{ $tag->kategori_tag }}">{{ $tag->kategori_tag }}</option>
                    @endforeach
                </select>
                @if($errors->has('tag_profil'))
                    <em class="invalid-feedback">
                        {{ $errors->first('tag_profil') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('foto_profil') ? 'has-error' : '' }}">
                <label for="status_profil">Status konten profil *
                <select name="status_profil" id="status_profil" class="form-control" required>
                        <option value="aktif" >Aktif</option>
                        <option value="tidak aktif" >Tidak Aktif</option>
                </select>
                @if($errors->has('status_profil'))
                    <em class="invalid-feedback">
                        {{ $errors->first('status_profil') }}
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
