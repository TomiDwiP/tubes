<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>..::Data kelompok PKN::..</title>
			<link rel="stylesheet" href="{{asset('css/app.css')}}">
		</head>

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
		<form method="post" action="{{action('groupControll@update', $id)}}" >
			{{csrf_field()}}
			<input name="_method" type="hidden" value="PATCH">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
						<label for="nimKetua">NIM Ketua</label>
						<input type="text" class="form-control" name="nimKetua" value="{{$group->nimKetua}}">
				</div>
			</div>

			<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="nimAnggota1">NIM Anggota 1</label>
						<input type="text" class="form-control" name="nimAnggota1" value="{{$group->nimAnggota1}}">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="nimAnggota2">NIM Anggota 2</label>
						<input type="text" class="form-control" name="nimAnggota2" value="{{$group->nimAnggota2}}">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="waktu_pelaksaan">Waktu Pelaksanaan</label>
						<input type="date" class="form-control" name="waktu_pelaksaan" value="{{$group->waktu_pelaksaan}}">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="waktu_selesai">Waktu Selesai</label>
						<input type="date" class="form-control" name="waktu_selesai" value="{{$group->waktu_selesai}}">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="namainstansi">Nama Instansi</label>
						<input type="text" class="form-control" name="namainstansi" value="{{$instansi->namainstansi}}">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="telp">No Telp</label>
						<input type="text" class="form-control" name="telp" value="{{$instansi->telp}}">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="email">Email</label>
						<input type="text" class="form-control" name="email" value="{{$instansi->email}}">
					</div>
				</div>


				<div class="row">
					<div class="col-md-4"></div>
						<div class="form-group col-md-4">
							<button type="submit" class="btn btn-success" style="marginleft:38px">Update Data</button>
						</div>
				</div>
</form>
</div>
</body>
</html>
