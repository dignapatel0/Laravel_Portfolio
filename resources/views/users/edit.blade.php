@extends('layout.console')

@section('content')
<div class="add-container form-container">
  <div class="add-card">
    <h2 class="form-title">Edit User</h2>

    <form method="post" action="/console/users/edit/{{ $user->id }}" novalidate>
      @csrf

      <div class="form-group">
        <label for="first">First Name</label>
        <input
          type="text"
          id="first"
          name="first"
          value="{{ old('first', $user->first) }}"
          required
        >
        @if ($errors->first('first'))
          <div class="form-error">{{ $errors->first('first') }}</div>
        @endif
      </div>

      <div class="form-group">
        <label for="last">Last Name</label>
        <input
          type="text"
          id="last"
          name="last"
          value="{{ old('last', $user->last) }}"
          required
        >
        @if ($errors->first('last'))
          <div class="form-error">{{ $errors->first('last') }}</div>
        @endif
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <input
          type="email"
          id="email"
          name="email"
          value="{{ old('email', $user->email) }}"
          required
        >
        @if ($errors->first('email'))
          <div class="form-error">{{ $errors->first('email') }}</div>
        @endif
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input
          type="password"
          id="password"
          name="password"
        >
        @if ($errors->first('password'))
          <div class="form-error">{{ $errors->first('password') }}</div>
        @endif
      </div>

      <div class="form-actions">
        <button type="submit" class="btn btn-primary">Save Changes</button>
        <a href="/console/users/list" class="btn btn-secondary">Back to User List</a>
      </div>
    </form>
  </div>
</div>
@endsection
