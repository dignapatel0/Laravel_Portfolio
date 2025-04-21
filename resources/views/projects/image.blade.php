@extends('layout.console')

@section('content')
<div class="add-container form-container">
  <div class="add-card">
    <h2 class="form-title">Project Image</h2>

    @if($project->image)
      <div class="image-preview">
        <img src="{{ asset('storage/'.$project->image) }}" alt="Current Project Image" class="preview-img">
      </div>
    @endif

    <form method="post"
          action="/console/projects/image/{{ $project->id }}"
          enctype="multipart/form-data"
          novalidate>
      @csrf

      <div class="form-group">
        <label for="image">Select New Image</label>
        <input type="file" id="image" name="image" required>
        @if ($errors->first('image'))
          <div class="form-error">{{ $errors->first('image') }}</div>
        @endif
      </div>

      <div class="form-actions">
        <button type="submit" class="btn btn-primary">Upload Image</button>
        <a href="/console/projects/list" class="btn btn-secondary">Back to Project List</a>
      </div>
    </form>
  </div>
</div>
@endsection
