@extends('layout.console')

@section('content')
<div class="add-container form-container">
  <div class="add-card">
    <h2 class="form-title">Add Experience</h2>

    <form method="post" action="/console/experiences/add" novalidate>
      @csrf

      <div class="form-group">
        <label for="job_title">Job Title</label>
        <input
          type="text"
          id="job_title"
          name="job_title"
          value="{{ old('job_title') }}"
          required
        >
        @if ($errors->first('job_title'))
          <div class="form-error">{{ $errors->first('job_title') }}</div>
        @endif
      </div>

      <div class="form-group">
        <label for="company_name">Company Name</label>
        <input
          type="text"
          id="company_name"
          name="company_name"
          value="{{ old('company_name') }}"
          required
        >
        @if ($errors->first('company_name'))
          <div class="form-error">{{ $errors->first('company_name') }}</div>
        @endif
      </div>

      <div class="form-group">
        <label for="location">Location</label>
        <input
          type="text"
          id="location"
          name="location"
          value="{{ old('location') }}"
        >
        @if ($errors->first('location'))
          <div class="form-error">{{ $errors->first('location') }}</div>
        @endif
      </div>

      <div class="form-group">
        <label for="employment_type">Employment Type</label>
        <select
          id="employment_type"
          name="employment_type"
          required
        >
          <option value="">-- Select Employment Type --</option>
          <option value="Full-time"   {{ old('employment_type')=='Full-time'   ? 'selected' : '' }}>Full-time</option>
          <option value="Part-time"   {{ old('employment_type')=='Part-time'   ? 'selected' : '' }}>Part-time</option>
          <option value="Internship"  {{ old('employment_type')=='Internship'  ? 'selected' : '' }}>Internship</option>
          <option value="Freelance"   {{ old('employment_type')=='Freelance'   ? 'selected' : '' }}>Freelance</option>
        </select>
        @if ($errors->first('employment_type'))
          <div class="form-error">{{ $errors->first('employment_type') }}</div>
        @endif
      </div>

      <div class="form-group">
        <label for="start_date">Start Date</label>
        <input
          type="date"
          id="start_date"
          name="start_date"
          value="{{ old('start_date') }}"
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
          value="{{ old('end_date') }}"
        >
        @if ($errors->first('end_date'))
          <div class="form-error">{{ $errors->first('end_date') }}</div>
        @endif
      </div>

      <div class="form-actions">
        <button type="submit" class="btn btn-primary">Add Experience</button>
        <a href="/console/experiences/list" class="btn btn-secondary">Back to Experience List</a>
      </div>
    </form>
  </div>
</div>
@endsection
