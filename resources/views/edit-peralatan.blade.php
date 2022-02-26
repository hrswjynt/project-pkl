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
                        <li class="active">Edit</li>
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
                        <strong>Edit Daftar Peralatan</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('/') }}" class="btn btn-secondary btn-sm">
                            <i class="fa fa-undo"></i> Back
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="col-md-4 offset-md-4">
                    <form action="{{ url('daftar-peralatan/editData/' . $daftarperalatan->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Jenis</label>
                            <select type="text" name="jenis" class="form-control @error('jenis') is-invalid @enderror"
                                autofocus>
                                @foreach ($jenis as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $item->id == $daftarperalatan->jenis_id ? 'selected' : '' }}>
                                        {{ $item->jenis }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Merk</label>
                            <select type="text" name="merk" class="form-control @error('jenis') is-invalid @enderror"
                                autofocus>
                                @foreach ($merk as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $item->id == $daftarperalatan->merk_id ? 'selected' : '' }}>
                                        {{ $item->merk }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Seri</label>
                            <select type="text" name="seri" class="form-control @error('seri') is-invalid @enderror"
                                autofocus>
                                @foreach ($seri as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $item->id == $daftarperalatan->seri_id ? 'selected' : '' }}>
                                        {{ $item->seri }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kode Barang</label>
                            <input type="text" name="kode_barang"
                                class="form-control @error('kode_barang') is-invalid @enderror"
                                value="{{ $daftarperalatan->kode_barang }}" autofocus>
                            @error('kode_barang')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Tahun Pengadaan</label>
                            <input type="number" name="tahun_pengadaan"
                                class="form-control @error('tahun_pengadaan') is-invalid @enderror"
                                value="{{ $daftarperalatan->tahun_pengadaan }}" autofocus>
                            @error('tahun_pengadaan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Divisi</label>
                            <input type="text" name="divisi" class="form-control @error('divisi') is-invalid @enderror"
                                value="{{ $daftarperalatan->divisi }}" autofocus>
                            @error('divisi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Info</label>
                            <textarea type="text" name="info" class="form-control @error('info') is-invalid @enderror"
                                autofocus>{{ $daftarperalatan->info }}</textarea>
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
