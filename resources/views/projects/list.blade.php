@extends('layout.console')

@section('content')
<div class="list-page">
  <!-- Header -->
  <div class="list-header">
    <h2>Manage Projects</h2>
    <a href="/console/projects/add" class="btn btn-green">+ New Project</a>
  </div>

  <!-- Responsive Table -->
  <div class="table-container">
    <table class="list-table">
      <thead>
        <tr>
          <th>Image</th>
          <th>Title</th>
          <th>Slug</th>
          <th>Type</th>
          <th>Created</th>
          <th colspan="3" class="actions">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($projects as $project)
          <tr>
            <td>
              @if ($project->image)
                <img src="{{ asset('storage/'.$project->image) }}" alt="{{ $project->title }}" class="thumb">
              @endif
            </td>
            <td>{{ $project->title }}</td>
            <td><a href="/project/{{ $project->slug }}" class="slug-link">{{ $project->slug }}</a></td>
            <td>{{ $project->type->title }}</td>
            <td>{{ $project->created_at->format('M j, Y') }}</td>
            <td><a href="/console/projects/image/{{ $project->id }}" class="action-view">Image</a></td>
            <td><a href="/console/projects/edit/{{ $project->id }}" class="action-edit">Edit</a></td>
            <td><a href="/console/projects/delete/{{ $project->id }}" class="action-delete">Delete</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
