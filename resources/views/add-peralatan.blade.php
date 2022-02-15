@extends('main')

@section('title', 'Beranda')

@section('breadcrumbs')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Daftar Peralatan</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Peralatan</a></li>
                    <li class="active">Add</li>
                </ol>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('content')

<div class="content mt-3">

    <div class="animated fadeIn">

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Tambah Daftar Peralatan</strong>
                </div>   
                <div class="pull-right">
                    <a href="{{ url('daftar-peralatan') }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>             
            </div>
        </div>

        <div class="card-body">
            <div class="col-md-4 offset-md-4">
                <form action="daftar-peralatan/add" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Jenis</label>
                        <select type="text" name="jenis" class="form-control @error('jenis') is-invalid @enderror" value="{{ old('jenis') }}" autofocus>
                            <option value="">- Pilih -</option>
                            @foreach ($peralatan as $item)
                                <option value="{{ $item->jenis }}">{{ $item->jenis }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Merk</label>
                        <select type="text" name="merk" class="form-control @error('jenis') is-invalid @enderror" value="{{ old('merk') }}" autofocus>
                            <option value="">- Pilih -</option>
                            @foreach ($peralatan as $item)
                                <option value="{{ $item->merk }}">{{ $item->merk }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Seri</label>
                        <select type="text" name="seri" class="form-control @error('seri') is-invalid @enderror" value="{{ old('seri') }}" autofocus>
                            <option value="">- Pilih -</option>
                            @foreach ($peralatan as $item)
                                <option value="{{ $item->seri }}">{{ $item->seri }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kode Barang</label>
                        <input type="text" name="kode_barang" class="form-control @error('kode_barang') is-invalid @enderror" value="{{ old('kode_barang') }}" autofocus>
                        @error('kode_barang')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tahun Pengadaan</label>
                        <input type="number" name="tahun_pengadaan" class="form-control @error('tahun_pengadaan') is-invalid @enderror" value="{{ old('tahun_pengadaan') }}" autofocus>
                        @error('tahun_pengadaan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Divisi</label>
                        <input type="text" name="divisi" class="form-control @error('divisi') is-invalid @enderror" value="{{ old('divisi') }}" autofocus>
                        @error('divisi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Info</label>
                        <textarea type="text" name="info" class="form-control @error('info') is-invalid @enderror" value="{{ old('info') }}" autofocus></textarea>
                        @error('info')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-submit">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection