@extends('mahasiswa.home')

@section('content')           
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
                <th>NID</th>
                <th>nama</th>
                <th>email</th>
                <th>password</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        
        @php
            $i=1;
        @endphp

        <tbody>
            @foreach($dosens as $dosen)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$dosen['id']}}</td>
                <td>{{$dosen['nid']}}</td>
                <td>{{$dosen['nama']}}</td>
                <td>{{$dosen['email']}}</td>
                <td>{{$dosen['password']}}</td>
                
                
            <td>
                <a href="{{action('dosencontroll@edit', $dosen['id'])}}" class="btn btn-warning">Ubah</a>
            </td>
                <form action="{{action('dosencontroll@destroy', $dosen['id'])}}" method="post" > {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE"><button class="btn btn-danger" type="submit" onclick="return confirm('Yakin mau di hapus?');">Hapus</button>
                </form>
             </td>
            
            </tr>
            @endforeach
        
        </tbody>
        </table>
        </div>
        </div>
</div>
</div>
@endsection