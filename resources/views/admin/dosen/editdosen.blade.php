<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>..::Edit Data Dosen Pembibing::..</title>
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

		<form method="post" action="{{action('dosencontroll@update', $id)}}" >
			{{csrf_field()}}
			<input name="_method" type="hidden" value="PATCH">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
						<label for="nid">NID</label>
						<input type="text" class="form-control" name="nid" value="{{$dosen->nid}}">
				</div>
			</div>

			<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" name="nama" value="{{$dosen->nama}}">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="email">Email</label>
						<input type="text" class="form-control" name="email" value="{{$dosen->email}}">
					</div>
				</div>


				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="password">Password</label>
						<input type="text" class="form-control" name="password" value="{{$dosen->password}}">
					</div>
				</div>

				 <div class="row">
          			<div class="col-md-4"></div>
           				<div class="form-group col-md-4">
              				<button type="submit" class="btn btn-success" style="marginleft:38px; background-color: blue; border-color: blue">Update Data</button>
           				 </div>
       				 </div>
				</div>
			</form>
		</div>
	</body>
</html>

