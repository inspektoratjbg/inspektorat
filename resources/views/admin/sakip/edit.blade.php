@extends('layouts.admin')
@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.sakip.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.sakip.update", [$sakip->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="hidden" id="id" name="id" class="form-control" value="{{ $sakip->id }}" required>
            </div>
            <div class="form-group {{ $errors->has('tipe_sakip') ? 'has-error' : '' }}">
                <label for="tipe_sakip">Tipe Sakip *
                <select name="tipe_sakip" id="tipe_Sakip" class="form-control" style="width: auto;" required>
                    <option value="1" >Sakip Awal</option>
                    <option value="2" >Sakip Perubahan Periode ke-1</option>
                    <option value="3" >Sakip Perubahan Periode ke-2</option>
                    <option value="4" >Sakip Perubahan Periode ke-3</option>
                    <option value="5" >Sakip Perubahan Periode ke-4</option>
                </select>
                @if($errors->has('tipe_sakip'))
                    <em class="invalid-feedback">
                        {{ $errors->first('tipe_sakip') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('tahun') ? 'has-error' : '' }}">
                <label for="tahun">Tahun Periode ex:(2020) *</label>
                <input type="text" id="tahun" name="tahun" class="form-control" value="{{ old('tahun', isset($sakip) ? $sakip->tahun : '') }}" required>
                @if($errors->has('tahun'))
                    <em class="invalid-feedback">
                        {{ $errors->first('tahun') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('nip_pihak_pertama') ? 'has-error' : '' }}">
                <label for="nip_pihak_pertama">Pihak Pertama *
                <select name="nip_pihak_pertama" id="nip_pihak_pertama" class="form-control col-lg-12" style="width: auto;" required>
                    @foreach($pegawai as $id => $pegawai)
                        <option <?php if ($sakip->nip_pihak_pertama==$pegawai->nip){ echo "selected";} ?> value="{{ $pegawai->nip }}" >{{ $pegawai->nama_pegawai }}</option>
                    @endforeach
                </select>
                @if($errors->has('nip_pihak_pertama'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nip_pihak_pertama') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('nip_pihak_kedua') ? 'has-error' : '' }}">
                <label for="nip_pihak_kedua">Pihak Kedua *
                <select name="nip_pihak_kedua" id="nip_pihak_kedua" class="form-control" style="width: auto;" required>
                    @foreach($pegawaikedua as $id => $pegawaikedua)
                        <option <?php if ($sakip->nip_pihak_kedua==$pegawaikedua->nip){ echo "selected";} ?> value="{{ $pegawaikedua->nip }}" >{{ $pegawaikedua->nama_pegawai }}</option>
                    @endforeach
                </select>
                @if($errors->has('nip_pihak_kedua'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nip_pihak_kedua') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('tanggal_surat') ? 'has-error' : '' }}">
                <label for="tanggal_surat">Tanggal Cetak *</label>
                <input type="date" id="tanggal_surat" name="tanggal_surat" class="form-control" value="{{ old('tanggal_surat', isset($sakip) ? $sakip->tanggal_surat : '') }}" required>
                @if($errors->has('tanggal_surat'))
                    <em class="invalid-feedback">
                        {{ $errors->first('tanggal_surat') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">
                <input type="hidden" id="created_by" name="created_by" class="form-control" value="{{ old('created_by', isset($sakip) ? $sakip->created_by : '') }}" required>
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
