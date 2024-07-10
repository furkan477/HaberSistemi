<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog Haber 7/24 | Panel Admin Kayıt Sayfası</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>BlogSİ</b>TESİ</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Bilgilerinizi girerek üyelik oluşturabilirsiniz.</p><hr>


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
      
      <form action="{{route('admin.register.post')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="social-auth-links text-center">
            <button class="btn btn-block btn-primary">
                <i class="fa-solid fa-user mr-2"></i>
                Blog Panel Kayıt OL
            </button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>
</html>
