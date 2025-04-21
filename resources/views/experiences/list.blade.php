@extends('layout.console')

@section('content')
<div class="list-page">
  <!-- Header -->
  <div class="list-header">
    <h2>Manage Experiences</h2>
    <a href="/console/experiences/add" class="btn btn-green">+ Add Experience</a>
  </div>

  @if (session('message'))
    <div class="alert-success" style="margin-bottom:16px;">
      {{ session('message') }}
    </div>
  @endif

  <!-- Responsive Table -->
  <div class="table-container">
    <table class="list-table">
      <thead>
        <tr>
          <th>Job Title</th>
          <th>Company</th>
          <th>Location</th>
          <th>Employment Type</th>
          <th>Start Date</th>
          <th>End Date</th>
          <th colspan="2" class="actions">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($experiences as $experience)
          <tr>
            <td>{{ $experience->job_title }}</td>
            <td>{{ $experience->company_name }}</td>
            <td>{{ $experience->location }}</td>
            <td>{{ $experience->employment_type }}</td>
            <td>{{ $experience->start_date->format('M j, Y') }}</td>
            <td>
              @if ($experience->end_date)
                {{ $experience->end_date->format('M j, Y') }}
              @else
                Ongoing
              @endif
            </td>
            <td>
              <a href="/console/experiences/edit/{{ $experience->id }}" class="action-edit">
                Edit
              </a>
            </td>
            <td>
              <a href="/console/experiences/delete/{{ $experience->id }}" class="action-delete">
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
