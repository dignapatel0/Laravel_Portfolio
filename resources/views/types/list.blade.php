@extends('layout.console')

@section('content')
<div class="list-page">
  <!-- Header -->
  <div class="list-header">
    <h2>Manage Types</h2>
    <a href="/console/types/add" class="btn btn-green">+ New Type</a>
  </div>

  <div class="table-container">
    <table class="list-table">
      <thead>
        <tr>
          <th>Name</th>
          <th colspan="2" class="actions">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($types as $type)
          <tr>
            <td>{{ $type->title }}</td>
            <td>
              <a href="/console/types/edit/{{ $type->id }}" class="action-edit">
                Edit
              </a>
            </td>
            <td>
              <a href="/console/types/delete/{{ $type->id }}" class="action-delete">
                Delete
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
