@extends('layout.console')

@section('content')
<div class="list-page">
  <!-- Header -->
  <div class="list-header">
    <h2>Manage Users</h2>
    <a href="/console/users/add" class="btn btn-green">+ New User</a>
  </div>

  @if (session('message'))
    <div class="alert-success" style="margin-bottom:16px;">
      {{ session('message') }}
    </div>
  @endif

  <div class="table-container">
    <table class="list-table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Registered</th>
          <th colspan="2" class="actions">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
          <tr>
            <td>{{$user->first}} {{$user->last}}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at->format('M j, Y') }}</td>
            <td>
              <a href="/console/users/edit/{{ $user->id }}" class="action-edit">
                Edit
              </a>
            </td>
            <td>
              <a href="/console/users/delete/{{ $user->id }}" class="action-delete">
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
