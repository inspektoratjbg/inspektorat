@extends('layouts.admin')
@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.pegawai.title_singular') }}
    </div>


    <div class="card-body">
        <form action="{{ route("admin.pegawai.update", [$pegawai->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">

                <input type="hidden" id="id" name="id" class="form-control" value="{{ $pegawai->id }}" required>
            </div>

            <div class="form-group {{ $errors->has('nip') ? 'has-error' : '' }}">
                <label for="nip">NIP *</label>
                <input type="text" id="nip" name="nip" class="form-control" value="{{ old('nip', isset($pegawai) ? $pegawai->nip : '') }}" required>
                @if($errors->has('nip'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nip') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">
                <label for="job">Nama Pegawai*</label>
                 <div class="mb-3">
                <input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control" value="{{ old('nama_pegawai', isset($pegawai) ? $pegawai->nama_pegawai : '') }}" required>
                </div>
                @if($errors->has('nama_pegawai'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nama_pegawai') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('divisi_pegawai') ? 'has-error' : '' }}">
                <label for="divisi_pegawai">Divisi Pegawai *
                <select name="divisi_pegawai" id="divisi_pegawai" class="form-control select2" required>
                    @foreach($status as $id => $status)
                        <option <?php if ($status->id==$pegawai->divisi_pegawai){ echo "selected";} ?> value="{{ $status->id }}">{{ $status->status_kepegawaiaan }}</option>
                    @endforeach
                </select>
                @if($errors->has('divisi_pegawai'))
                    <em class="invalid-feedback">
                        {{ $errors->first('divisi_pegawai') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('peran_pegawai') ? 'has-error' : '' }}">
                <label for="peran_pegawai">Jabatan Pegawai *
                <select name="peran_pegawai" id="peran_pegawai" class="form-control select2" required>
                    @foreach($jabatan as $id => $jabatan)
                        <option <?php if ($jabatan->id==$pegawai->peran_pegawai){ echo "selected";} ?> value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                    @endforeach
                </select>
                @if($errors->has('peran_pegawai'))
                    <em class="invalid-feedback">
                        {{ $errors->first('peran_pegawai') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('golongan_pegawai') ? 'has-error' : '' }}">
                <label for="golongan_pegawai">Pangkat/Golongan *
                <select name="golongan_pegawai" id="golongan_pegawai" class="form-control select2" required>
                    @foreach($golongan as $id => $golongan)
                        <option <?php if ($golongan->id==$pegawai->golongan_pegawai){ echo "selected";} ?> value="{{ $golongan->id }}">{{ $golongan->nama_golongan }}</option>
                    @endforeach
                </select>
                @if($errors->has('golongan_pegawai'))
                    <em class="invalid-feedback">
                        {{ $errors->first('golongan_pegawai') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">
                <label for="pesan_pegawai">Pesan Pegawai*</label>
                 <div class="mb-3">
                <textarea class="form-control my-editor" name="pesan_pegawai">{{ old('pesan_pegawai', isset($pegawai) ? $pegawai->pesan_pegawai : '') }}</textarea>
                </div>
                @if($errors->has('pesan_pegawai'))
                    <em class="invalid-feedback">
                        {{ $errors->first('pesan_pegawai') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <?php $gambar_master=json_decode($pegawai->foto_pegawai); ?>
            <div class="form-group {{ $errors->has('foto_pegawai') ? 'has-error' : '' }}">
                <label for="foto_pegawai">Gambar pegawai *
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="foto_pegawai[]" id="foto_pegawai" class="form-control select2" multiple="multiple" required>
                    @foreach($gambar as $id => $gambar)
                        <option <?php if (in_array($gambar->nama_gambar, $gambar_master, TRUE)){ echo "selected";} ?> value="{{ $gambar->nama_gambar }}">{{ $gambar->judul_gambar }}</option>
                    @endforeach
                </select>
                @if($errors->has('foto_pegawai'))
                    <em class="invalid-feedback">
                        {{ $errors->first('foto_pegawai') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <?php $arsip_master=json_decode($pegawai->arsip_pegawai); ?>
            <div class="form-group {{ $errors->has('foto_pegawai') ? 'has-error' : '' }}">
                <label for="arsip_pegawai">Arsip pegawai *
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="arsip_pegawai[]" id="arsip_pegawai" class="form-control select2" multiple="multiple">
                    @foreach($arsip as $id => $arsip)
                        <option <?php if (in_array($arsip->nama_arsip, $arsip_master, TRUE)){ echo "selected";} ?> value="{{ $arsip->nama_arsip }}">{{ $arsip->nama_arsip }}</option>
                    @endforeach
                </select>
                @if($errors->has('foto_pegawai'))
                    <em class="invalid-feedback">
                        {{ $errors->first('foto_pegawai') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                <label for="status">Status *
                <select name="status" id="status" class="form-control" required>
                        <option value="aktif" {{ 'aktif' == $pegawai->status ? 'selected' : ''}}>Aktif</option>
                        <option value="tidak aktif" {{ 'tidak aktif' == $pegawai->status ? 'selected' : ''}}>Tidak Aktif</option>
                </select>
                @if($errors->has('status'))
                    <em class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">

                <input type="hidden" id="created_by" name="created_by" class="form-control" value="{{ old('created_by', isset($pegawai) ? $pegawai->created_by : '') }}" required>
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
