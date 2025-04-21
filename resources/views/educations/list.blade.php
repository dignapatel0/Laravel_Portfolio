@extends('layout.console')

@section('content')
<div class="list-page">
  <!-- Header -->
  <div class="list-header">
    <h2>Manage Educations</h2>
    <a href="/console/educations/add" class="btn btn-green">+ New Education</a>
  </div>

  <div class="table-container">
    <table class="list-table">
      <thead>
        <tr>
          <th>Institution Name</th>
          <th>Course Name</th>
          <th>Location</th>
          <th>Start Date</th>
          <th>End Date</th>
          <th>Created</th>
          <th colspan="2" class="actions">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($educations as $education)
          <tr>
            <td>{{ $education->institution_name }}</td>
            <td>{{ $education->course_name }}</td>
            <td>{{ $education->location }}</td>
            <td>{{ $education->start_date->format('M j, Y') }}</td>
            <td>
              @if($education->end_date)
                {{ $education->end_date->format('M j, Y') }}
              @else
                Ongoing
              @endif
            </td>
            <td>{{ $education->created_at->format('M j, Y') }}</td>
            <td>
              <a href="/console/educations/edit/{{ $education->id }}" class="action-edit">
                Edit
              </a>
            </td>
            <td>
              <a href="/console/educations/delete/{{ $education->id }}" class="action-delete">
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
