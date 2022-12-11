@extends("../templateHtml")

@section('container')
  <head>
    <title>Form Login</title>
    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">
  </head>
  <body class="text-center">
    {{-- cek jika ada sesion sukses --}}
    @if (session()->has('sukses'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('sukses') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @if (session()->has('loginError'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <main class="form-signin w-100 m-auto">
      <form action="/login" method="POST">
        <img class="mb-4 rounded-circle" src="img/face2.jpg" alt="" width="150" height="150">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        @csrf
        <div class="form-floating">
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
          <label for="floatingInput">Email address</label>
          @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
      </form>

      <small class="d-block text-center mt-3 mb-4">Belum Register? <a href="/register">Registrasi Sekarang</a></small>
    </main>
  </body>
@endsection


