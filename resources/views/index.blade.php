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
    
    <form class="register-form">
      <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ old('nama') }}" required autofocus>

                                @if ($errors->has('nama'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nim" class="col-md-4 col-form-label text-md-right">{{ __('Nim') }}</label>

                            <div class="col-md-6">
                                <input id="nim" type="text" class="form-control{{ $errors->has('nim') ? ' is-invalid' : '' }}" name="nim" value="{{ old('nim') }}" required autofocus>

                                @if ($errors->has('nama'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="Tanggal-Lahir" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal-Lahir') }}</label>

                            <div class="col-md-6">
                                <input id="Tanggal-Lahir" type="text" class="form-control{{ $errors->has('Tanggal-Lahir') ? ' is-invalid' : '' }}" name="Tanggal-Lahir" value="{{ old('Tanggal-Lahir') }}" required autofocus>

                                @if ($errors->has('Tanggal-Lahir'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Tanggal-Lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="No.Telp" class="col-md-4 col-form-label text-md-right">{{ __('No.Telp') }}</label>

                            <div class="col-md-6">
                                <input id="No.Telp" type="text" class="form-control{{ $errors->has('No.Telp') ? ' is-invalid' : '' }}" name="No.Telp" value="{{ old('No.Telp') }}" required autofocus>

                                @if ($errors->has('No.Telp'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('No.Telp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="Alamat" type="text" class="form-control{{ $errors->has('Alamat') ? ' is-invalid' : '' }}" name="Alamat" value="{{ old('Alamat') }}" required autofocus>

                                @if ($errors->has('Alamat'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                              <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

      <button>create</button>

      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>

    <form class="login-form">
      
      <div class="form-group row">
                            <label for="nim" class="col-sm-4 col-form-label text-md-right">{{ __('NIM') }}</label>

                            <div class="col-md-6">
                                <input id="nim" type="text" class="form-control{{ $errors->has('nim') ? ' is-invalid' : '' }}" name="nim" value="{{ old('nim') }}" required autofocus>

                                @if ($errors->has('nim'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nim') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

      
      <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="{{asset('login-register/js/index.js')}}">
    </script>




</body>

</html>
