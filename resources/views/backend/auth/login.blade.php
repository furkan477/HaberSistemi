<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog Haber | Admin Sayfası</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Blog</b>ADMİN</a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">       
        <br>
                <p class="login-box-msg">Admin değilseniz girişi yapamazsınız</p><br>
                @if ($errors)
                    @foreach ($errors->all() as $error)
                      <div class="alert alert-danger">
                          {{$error}}
                      </div>
                    @endforeach
                @endif
                @if (session()->get('success'))
                  <div class="alert alert-success">
                      {{session()->get('success')}}
                  </div>
                @endif

                @if (session()->get('error'))
                  <div class="alert alert-danger">
                      {{session()->get('error')}}
                  </div>
                @endif
      <form action="{{route('admin.login.post')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div><br>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Admin Girişi</button>
          </div>
        </div>
      </form>
      <br><br><br>
    </div>
  </div>
</div>

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>
</html>
