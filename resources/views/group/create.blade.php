@extends('mahasiswa.home')

@section('content')
<!-- <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>..::Pengisian Data Kelompok PKN::..</title>
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
	</head>

	<body -->>
		@if ($errors->any())
		<div class="alert alert-danger">
		<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
		</ul>
		</div><br />
		@endif
		
		@if (\Session::has('success'))
			<div class="alert alert-success">
				<p>{{ \Session::get('success') }}</p>
			</div><br />
		@endif

		<form method="post" action="{{url('group')}}" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="container">
			<h2>Pengisian Data Kelompok PKN</h2><br/>
			<form method="post">

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="nimKetua">NIM Ketua:</label>
						<input type="text" class="form-control" name="nimKetua">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="nimAnggota1">NIM Anggota 1:</label>
						<input type="text" class="form-control" name="nimAnggota1">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="nimAnggota2">NIM Anggota 2</label>
						<input type="text" class="form-control" name="niAnggota2">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="waktu_pelaksaan">Waktu Pelaksanaan</label>
						<input type="date" class="form-control" name="waktu_pelaksaan">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="waktu_selesai">Waktu Selesai</label>
						<input type="date" class="form-control" name="waktu_selesai">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="namainstansi">Nama Instansi</label>
						<input type="text" class="form-control" name="namainstansi">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="alamat">Alamat</label>
						<input type="text" class="form-control" name="alamat">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="telp">No Telp</label>
						<input type="text" class="form-control" name="telp">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="telp">Email</label>
						<input type="email" class="form-control" name="email">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<button type="submit" class="btn btn-success" style="marginleft:38px">Tambahkan Data</button>
					</div>
				</div>

			</form>
		</div>
<!-- 	</body>
</html> -->
@endsection