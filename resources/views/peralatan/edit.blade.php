@extends('main')

@section('title', 'Beranda')

@section('breadcrumbs')

	<div class="breadcrumbs">
		<div class="col-sm-4">
			<div class="page-header float-left">
				<div class="page-title">
					<h1>Jenis Peralatan</h1>
				</div>
			</div>
		</div>
		<div class="col-sm-8">
			<div class="page-header float-right">
				<div class="page-title">
					<ol class="breadcrumb text-right">
						<li><a href="#">Peralatan</a></li>
						<li class="active">Data</li>
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
						<strong>Ubah Jenis Peralatan</strong>
					</div>
					<div class="pull-right">
						<a href="{{ url('peralatan') }}" class="btn btn-secondary btn-sm">
							<i class="fa fa-undo"></i> Back
						</a>
					</div>
				</div>
			</div>

			<div class="card-body">
				<div class="col-md-4 offset-md-4">
					<form action="{{ route('edit.peralatan') }}" method="post">
						@method('patch')
						@csrf
						<input type="hidden" name="id" value="{{ $id }}">
						<div class="form-group">
							<label>Jenis</label>
							<input type="text" name="jenis" class="form-control @error('jenis') is-invalid @enderror"
								value="{{ $peralatan->jenis }}" autofocus>
							@error('jenis')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
							@enderror
						</div>
						<div class="form-group">
							<label>Merk</label>
							<input type="text" name="merk" class="form-control @error('merk') is-invalid @enderror"
								value="{{ $peralatan->merk }}" autofocus>
							@error('merk')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
							@enderror
						</div>
						<div class="form-group">
							<label>Seri</label>
							<input name="seri" class="form-control @error('seri') is-invalid @enderror" value="{{ $peralatan->seri }}">
							@error('seri')
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
