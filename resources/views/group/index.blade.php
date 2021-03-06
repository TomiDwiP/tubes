@extends('mahasiswa.home')

@section('content')
<!-- <!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>..:: Data Kelompok PKN::..</title>
			<link rel="stylesheet" href="{{asset('css/app.css')}}">
		</head>
		
		<body> -->
	<div class="col-md-12" style="padding-left: :20px;padding-right: 20px;padding-bottom: 20px;">
    <div class="col-md-12 padding-0">    
        <div class="panel box-vv">
			<div class="container">
			<br />
			@if (\Session::has('success'))
				<div class="alert alert-success">
					<p>{{ \Session::get('success') }}</p>
				</div><br />
			@endif
		<table class="table table-striped">
		<thead>
			<tr>
				<th>No</th>
				<th>ID</th>
				<th>NIM ketua</th>
				<th>NIM Anggota 1</th>
				<th>NIM Anggota 2</th>
				<th>Tanggal pelaksaan</th>
				<th>tanggal Selesai</th>
				<th>Nama Instansi</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
	
		<tbody>
			@foreach($groups as $group)
			<tr>
				<td></td>
				<td>{{$group['id']}}</td>
				<td>{{$group['nimKetua']}}</td>
				<td>{{$group['nimAnggota1']}}</td>
				<td>{{$group['nimAnggota2']}}</td>
				<td>{{$group['waktu_pelaksaan']}}</td>
				<td>{{$group['waktu_selesai']}}</td>
				<td>{{$group['namainstansi']}}</td>
				<td><a href="{{action('groupControll@edit', $group['id'])}}"
			class="btn btn-warning">Ubah</a></td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
<!-- </body>
</html> -->
@endsection