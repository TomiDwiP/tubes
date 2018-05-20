<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login PKN UMM</title>
  
  
  
      <link rel="stylesheet" href="{{asset('login-register/css/style.css')}}">

  
</head>

<body>

    <div class="login-page">
    <div class="form">
    
        <form class="register-form" method="POST" action="{{ route('register') }}">
            @csrf
            
                    <input id="nim" type="text" class="form-control{{ $errors->has('nim') ? ' is-invalid' : '' }}" name="nim" value="{{ old('nim') }}" placeholder="NIM" required autofocus>

                    <input type="text" id="nama" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ old('nama') }}" placeholder="nama" required autofocus/>                      
              
                    <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>
                       
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                       
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>

            <button type="submit">create</button>

            <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>

        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <input type="text" id="nim" type="text" class="form-control{{ $errors->has('nim') ? ' is-invalid' : '' }}" name="nim" value="{{ old('nim') }}" placeholder="NIM" required autofocus/>

            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="password" required/>


            <button type="submit">login</button>
          <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="{{asset('login-register/js/index.js')}}">
    </script>




</body>

</html>
