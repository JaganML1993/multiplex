@extends('admin.loginHeader')
@section('content')

<style>
    body {

            background-image: url('../assets/images/login-bg-new.jpg'); /* Replace 'your-image.jpg' with the path to your background image */
            background-size: cover;
            background-position: center;
    }
</style>

<div class="container-xxl login-bg-banner" style="margin-left: 30%; margin-right: 30%; margin-top:5%; width: 40%;">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
            @if (session('success'))
                <div class="col-sm-12">
                    <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                    </div>
                </div>
            @endif
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                {{-- <!-- <img src="{{ asset('/img/icons/Vyomann_Logo.png') }}" style="width:40%;"/> --> --}}
                <img src="{{ asset('/images/logo/multiplex-logo2.png') }}" alt="logo">
              </div>
              <!-- /Logo -->
              <h4 class="mb-2 mt-4" style="text-align:center;"> Multiplex Admin Login</h4>

              <form action="{{ route('login.post') }}" class="mb-3" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Email"
                    required
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                <label for="email" class="form-label">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="Password"
                      aria-describedby="password"
                      required
                    />
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">LOGIN</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>
@endsection