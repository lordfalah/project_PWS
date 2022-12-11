@extends("../templateHtml")

@section('container')
  <head>
    <title>Form Register</title>
    <!-- Custom styles for this template -->
    <link href="css/register.css" rel="stylesheet">
  </head>

<section class="bg-image h-100"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp'); background-repeat: no-repeat">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card my-5" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="/register" method="POST">
                @csrf
                <div class="form-outline mb-4">
                  <input autocomplete="off" name="name" type="text" id="name" class="form-control form-control-lg @error('name') is-invalid
                  @enderror" placeholder="name" required value="{{ old('name') }}" />
                  <label class="form-label" for="name">Your Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                  <input autocomplete="off" type="text" name="ussername" id="ussername" class="form-control form-control-lg @error('ussername') is-invalid
                  @enderror" placeholder="ussername" required value="{{ old('ussername') }}" />
                  <label class="form-label" for="ussername">Your ussername</label>
                    @error('ussername')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                  <input autocomplete="off" type="email" name="email" id="email" class="form-control form-control-lg @error('email') is-invalid
                  @enderror" placeholder="email" required value="{{ old('email') }}" />
                  <label class="form-label" for="email">Your email</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                  <input autocomplete="off" type="password" name="password" id="password" class="form-control form-control-lg @error('password') is-invalid
                  @enderror" placeholder="password" required value="{{ old('password') }}" />
                  <label class="form-label" for="password">Your password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="/login"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection