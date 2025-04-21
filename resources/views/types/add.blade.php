@extends('layout.console')

@section('content')
<div class="add-container form-container">
  <div class="add-card">
    <h2 class="form-title">Add Type</h2>

    <form method="post" action="/console/types/add" novalidate>
      @csrf

      <div class="form-group">
        <label for="title">Title</label>
        <input
          type="text"
          id="title"
          name="title"
          value="{{ old('title') }}"
          required
        >
        @if ($errors->first('title'))
          <div class="form-error">{{ $errors->first('title') }}</div>
        @endif
      </div>

      <div class="form-actions">
        <button type="submit" class="btn btn-primary">Add Type</button>
        <a href="/console/types/list" class="btn btn-secondary">Back to Type List</a>
      </div>
    </form>
  </div>
</div>
@endsection
