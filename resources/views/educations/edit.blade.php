@extends('layout.console')

@section('content')
<div class="add-container form-container">
  <div class="add-card">
    <h2 class="form-title">Edit Education</h2>

    <form method="post" action="/console/educations/edit/{{ $education->id }}" novalidate>
      @csrf

      <div class="form-group">
        <label for="institution_name">Institution Name</label>
        <input
          type="text"
          id="institution_name"
          name="institution_name"
          value="{{ old('institution_name', $education->institution_name) }}"
          required
        >
        @if ($errors->first('institution_name'))
          <div class="form-error">{{ $errors->first('institution_name') }}</div>
        @endif
      </div>

      <div class="form-group">
        <label for="course_name">Course Name</label>
        <input
          type="text"
          id="course_name"
          name="course_name"
          value="{{ old('course_name', $education->course_name) }}"
          required
        >
        @if ($errors->first('course_name'))
          <div class="form-error">{{ $errors->first('course_name') }}</div>
        @endif
      </div>

      <div class="form-group">
        <label for="location">Location</label>
        <input
          type="text"
          id="location"
          name="location"
          value="{{ old('location', $education->location) }}"
          required
        >
        @if ($errors->first('location'))
          <div class="form-error">{{ $errors->first('location') }}</div>
        @endif
      </div>

      <div class="form-group">
        <label for="start_date">Start Date</label>
        <input
          type="date"
          id="start_date"
          name="start_date"
          value="{{ old('start_date', $education->start_date->format('Y-m-d')) }}"
          required
        >
        @if ($errors->first('start_date'))
          <div class="form-error">{{ $errors->first('start_date') }}</div>
        @endif
      </div>

      <div class="form-group">
        <label for="end_date">End Date</label>
        <input
          type="date"
          id="end_date"
          name="end_date"
          value="{{ old('end_date', optional($education->end_date)->format('Y-m-d')) }}"
        >
        @if ($errors->first('end_date'))
          <div class="form-error">{{ $errors->first('end_date') }}</div>
        @endif
      </div>

      <div class="form-actions">
        <button type="submit" class="btn btn-primary">Save Changes</button>
        <a href="/console/educations/list" class="btn btn-secondary">Back to Education List</a>
      </div>
    </form>
  </div>
</div>
@endsection
