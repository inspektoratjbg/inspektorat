@extends('layouts.admin')
@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.barang.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.transaksi.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('id_barang') ? 'has-error' : '' }}">
                <label for="id_barang">barang *
                <select name="id_barang" id="id_barang" class="form-control select2" required>
                    @foreach($barang as $key => $barang)
                        <option value="{{ $barang->id }}">{{ $barang->nama_barang }}</option>
                    @endforeach
                </select>
                @if($errors->has('id_barang'))
                    <em class="invalid-feedback">
                        {{ $errors->first('id_barang') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group {{ $errors->has('tanggal_diterima') ? 'has-error' : '' }}">
                <label for="tanggal_diterima">Tanggal Serah Terima *</label>
                <input type="date" id="tanggal_diterima" name="tanggal_diterima" class="form-control" value="{{ old('tanggal_diterima', isset($sakip) ? $sakip->tanggal_diterima : '') }}" required>
                @if($errors->has('tanggal_diterima'))
                    <em class="invalid-feedback">
                        {{ $errors->first('tanggal_diterima') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">
                <label for="job">Jumlah Barang Masuk *</label>
                 <div class="mb-3">
                <input type="number" id="barang_masuk" name="barang_masuk" class="form-control" value="{{ old('barang_masuk', isset($barang) ? $barang->barang_masuk : '') }}">
                </div>
                @if($errors->has('barang_masuk'))
                    <em class="invalid-feedback">
                        {{ $errors->first('barang_masuk') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">
                <label for="job">Harga Barang Terbaru *</label>
                 <div class="mb-3">
                <input type="number" id="harga_satuan" name="harga_satuan" class="form-control" value="{{ old('harga_satuan', isset($barang) ? $barang->harga_satuan : '') }}">
                </div>
                @if($errors->has('harga_satuan'))
                    <em class="invalid-feedback">
                        {{ $errors->first('harga_satuan') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">
                <label for="job">Jumlah Pengambilan Irban Pembangunan *</label>
                 <div class="mb-3">
                <input type="number" id="irban_pemb" name="irban_pemb" class="form-control" value="{{ old('irban_pemb', isset($barang) ? $barang->irban_pemb : '') }}">
                </div>
                @if($errors->has('irban_pemb'))
                    <em class="invalid-feedback">
                        {{ $errors->first('irban_pemb') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">
                <label for="job">Jumlah Pengambilan Irban Ekonomi *</label>
                 <div class="mb-3">
                <input type="number" id="irban_ek" name="irban_ek" class="form-control" value="{{ old('irban_ek', isset($barang) ? $barang->irban_ek : '') }}">
                </div>
                @if($errors->has('irban_ek'))
                    <em class="invalid-feedback">
                        {{ $errors->first('irban_ek') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">
                <label for="job">Jumlah Pengambilan Irban Keuangan *</label>
                 <div class="mb-3">
                <input type="number" id="irban_keu" name="irban_keu" class="form-control" value="{{ old('irban_keu', isset($barang) ? $barang->irban_keu : '') }}">
                </div>
                @if($errors->has('irban_keu'))
                    <em class="invalid-feedback">
                        {{ $errors->first('irban_keu') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">
                <label for="job">Jumlah Pengambilan Irban Pemerintahan *</label>
                 <div class="mb-3">
                <input type="number" id="irban_pem" name="irban_pem" class="form-control" value="{{ old('irban_pem', isset($barang) ? $barang->irban_pem : '') }}">
                </div>
                @if($errors->has('irban_pem'))
                    <em class="invalid-feedback">
                        {{ $errors->first('irban_pem') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">
                <label for="job">Jumlah Pengambilan Sekretariat *</label>
                 <div class="mb-3">
                <input type="number" id="sekret" name="sekret" class="form-control" value="{{ old('sekret', isset($barang) ? $barang->sekret : '') }}">
                </div>
                @if($errors->has('sekret'))
                    <em class="invalid-feedback">
                        {{ $errors->first('sekret') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">
                <label for="job">Nomor Surat *</label>
                 <div class="mb-3">
                <input type="text" id="no_surat" name="no_surat" class="form-control" value="{{ old('no_surat', isset($barang) ? $barang->no_surat : '') }}">
                </div>
                @if($errors->has('no_surat'))
                    <em class="invalid-feedback">
                        {{ $errors->first('no_surat') }}
                    </em>
                @endif
                <p class="helper-block">
                    <?php echo ''; ?>
                </p>
            </div>
            <div class="form-group">
                <input type="hidden" id="created_by" name="created_by" class="form-control" value="{{ $pengguna['nama_pegawai'] }}" required>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection
