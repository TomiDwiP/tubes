<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Admin PKN UMM</title>
  
  
  
      <link rel="stylesheet" href="{{asset('login-register/css/style.css')}}">

  <style>
  .form select{
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
</style>
</head>

<body>

    <div class="login-page">
    <div class="form">   

        <form class="login-form" method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <input type="text" id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="e-mail" required autofocus>

            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="password" required>

            <button type="submit">login</button>
        </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="{{asset('login-register/js/index.js')}}">
    </script>




</body>

</html>
