@extends('layout.console')

@section('content')
<div class="add-container form-container">
  <div class="add-card">
    <h2 class="form-title">Edit Type</h2>

    <form method="post" action="/console/types/edit/{{ $type->id }}" novalidate>
      @csrf

      <div class="form-group">
        <label for="title">Title</label>
        <input
          type="text"
          id="title"
          name="title"
          value="{{ old('title', $type->title) }}"
          required
        >
        @if ($errors->first('title'))
          <div class="form-error">{{ $errors->first('title') }}</div>
        @endif
      </div>

      <div class="form-actions">
        <button type="submit" class="btn btn-primary">Save Changes</button>
        <a href="/console/types/list" class="btn btn-secondary">Back to Type List</a>
      </div>
    </form>
  </div>
</div>
@endsection
