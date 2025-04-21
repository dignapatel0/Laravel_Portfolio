@extends('layout.console')

@section('content')
<div class="add-container form-container">
  <div class="add-card">
    <h2 class="form-title">Add Project</h2>

    <form method="post" action="/console/projects/add" `    `>
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

      <div class="form-group">
        <label for="url">URL</label>
        <input
          type="url"
          id="url"
          name="url"
          value="{{ old('url') }}"
        >
        @if ($errors->first('url'))
          <div class="form-error">{{ $errors->first('url') }}</div>
        @endif
      </div>

      <div class="form-group">
        <label for="slug">Slug</label>
        <input
          type="text"
          id="slug"
          name="slug"
          value="{{ old('slug') }}"
          required
        >
        @if ($errors->first('slug'))
          <div class="form-error">{{ $errors->first('slug') }}</div>
        @endif
      </div>

      <div class="form-group">
        <label for="content">Content</label>
        <textarea
          id="content"
          name="content"
          required
        >{{ old('content') }}</textarea>
        @if ($errors->first('content'))
          <div class="form-error">{{ $errors->first('content') }}</div>
        @endif
      </div>

      <div class="form-group">
        <label for="type_id">Type</label>
        <select id="type_id" name="type_id">
          <option value="">— select —</option>
          @foreach($types as $type)
          <option value="{{$type->id}}"
                        {{$type->id == old('type_id') ? 'selected' : ''}}>
                        {{$type->title}}
                    </option>
          @endforeach
        </select>
        @if ($errors->first('type_id'))
          <div class="form-error">{{ $errors->first('type_id') }}</div>
        @endif
      </div>

      <div class="form-actions">
        <button type="submit" class="btn btn-primary">Add Project</button>
        <a href="/console/projects/list" class="btn btn-secondary">Back to Project List</a>
      </div>
    </form>
  </div>
</div>
@endsection
