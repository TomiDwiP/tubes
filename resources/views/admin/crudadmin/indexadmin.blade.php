@extends('admin/dosen.layout')

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
                <th>name</th>
                <th>email</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        
        @php
            $i=1;
        @endphp

        <tbody>
            @foreach($admins as $admin)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$admin['id']}}</td>
                <td>{{$admin['name']}}</td>
                <td>{{$admin['email']}}</td>  
                
            <td>
                <a href="{{action('adminControll@edit', $admin['id'])}}" class="btn btn-warning">Ubah</a>
            </td>
            
            <td>
                <form action="{{action('adminControll@destroy', $admin['id'])}}" method="post" > {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE"><button class="btn btn-danger" type="submit" onclick="return confirm('Yakin mau di hapus?');">Hapus</button>
                </form>
             </td>
            
            </tr>
            @endforeach
        
        </tbody>
        </table>
        </div>
@endsection

