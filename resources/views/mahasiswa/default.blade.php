@extends('mahasiswa.home')

@section('content')
<div class="col-md-12" style="padding-left: :20px;padding-right: 20px;padding-bottom: 20px;">
    <div class="col-md-12 padding-0">    
        <div class="panel box-vv">
            <div class="panel-heading bg-white border-none" height="100%" width="100%">
                <h4 class="animated fadeInLeft">Selamat Datang {{ Auth::user()->nama }}, Anda Login Sebagai Mahasiswa!</h4> 
                <hr style="color:grey">
                &nbsp;
                <h4 class="animated fadeInLeft">Silahkan menggunakan web ini dengan bijaksana ^_^</h4>
            </div>
        </div>  
    </div>
</div>
@endsection