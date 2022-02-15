@extends('main')

@section('title', 'Beranda')

@section('breadcrumbs')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Beranda</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-home"></i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('content')

<div class="content mt-3">

    <div class="animated fadeIn">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>            
        @endif

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Daftar Peralatan</strong>
                </div>   
                <div class="pull-right">
                    <a href="{{ url('peralatan/add') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Add
                    </a>
                </div>             
            </div>
        </div>

        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <th>No.</th>
                    <th>Jenis</th>
                    <th>Merk</th>
                    <th>Seri</th>
                    <th>Kode Barang</th>
                    <th>Tahun Pengadaan</th>
                    <th>Digunakan Unit</th>
                    <th></th>
                </thead>
                {{-- <tbody>
                    @foreach ($peralatan as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->jenis }}</td>
                            <td>{{ $item->merk }}</td>
                            <td>{{ $item->seri }}</td>
                            <td class="text-center">
                                <a href="{{ url('peralatan/edit/' .$item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <form action="{{ url('peralatan/' .$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody> --}}
            </table>
        </div>
    </div>
    
@endsection