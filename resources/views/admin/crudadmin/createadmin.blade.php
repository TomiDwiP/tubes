
@extends('mahasiswa.home')

@section('content') 

	<body>
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

		<form method="post" action="{{url('admin/crudadmin')}}" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="container">
			<h2>Tambah Admin</h2><br/>
			<form method="post">

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="name">Nama:</label>
						<input type="text" class="form-control" name="name">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="email">Email:</label>
						<input type="text" class="form-control" name="email">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="password">Password</label>
						<input type="text" class="form-control" name="password">
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
		</div>
		</div>
		</div>
@endsection
