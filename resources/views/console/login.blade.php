@extends('layout.console')

@section('content')
<div class="login-page">
  <div class="login-card">
    <div class="login-header">
      <h1>Welcome Back</h1>
      <p>Please log in to your account</p>
    </div>

    <form method="post" action="/console/login" novalidate>
      @csrf

      <div class="form-group">
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Email Address"
          value="{{ old('email') }}"
          required
        >
        @if ($errors->first('email'))
          <div class="error">{{ $errors->first('email') }}</div>
        @endif
      </div>

      <div class="form-group">
        <input
          type="password"
          name="password"
          id="password"
          placeholder="Password"
          required
        >
        @if ($errors->first('password'))
          <div class="error">{{ $errors->first('password') }}</div>
        @endif
      </div>

      <button type="submit" class="btn-primary">Log In</button>
    </form>
  </div>
</div>
@endsection
