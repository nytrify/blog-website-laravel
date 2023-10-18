@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-registration w-100 m-auto">
            <form action="/register" method="post">
              @csrf
              <img class="mb-4" src="img/eyes.png" alt="" width="72" height="57">
              <h1 class="h3 mb-3 fw-normal text-center">Create An Account</h1>
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error("name") is-invalid @enderror" id="name" placeholder="Name" required value={{ old("name") }}>
                <label for="name">Name</label>
                @error("name")
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" name="username" id="username" class="form-control @error("username") is-invalid @enderror" placeholder="Username" required value={{ old("username") }}>
                <label for="Username">Username</label>
                @error("username")
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>    
              <div class="form-floating">
                <input type="email" name="email" id="email" class="form-control @error("email") is-invalid @enderror" placeholder="name@example.com" required value={{ old("email") }}>
                <label for="email">Email address</label>
                @error("email")
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" id="password" class="form-control rounded-bottom @error("password") is-invalid @enderror" placeholder="Password" required>
                <label for="password">Password</label>
                @error("password")
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Sign Up</button>
            </form>
            <small class="d-block text-center mt-3">Already have an account?
                <a href="/login">Sign In</a>
            </small>
          </main>
    </div>
</div>


@endsection