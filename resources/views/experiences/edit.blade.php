@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Experience</h2>

    <form method="post" action="/console/experiences/edit/{{ $experience->id }}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="job_title">Job Title:</label>
            <input type="text" name="job_title" id="job_title" value="{{ old('job_title', $experience->job_title) }}" required>

            @if ($errors->first('job_title'))
                <br>
                <span class="w3-text-red">{{ $errors->first('job_title') }}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="company_name">Company Name:</label>
            <input type="text" name="company_name" id="company_name" value="{{ old('company_name', $experience->company_name) }}" required>

            @if ($errors->first('company_name'))
                <br>
                <span class="w3-text-red">{{ $errors->first('company_name') }}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="location">Location:</label>
            <input type="text" name="location" id="location" value="{{ old('location', $experience->location) }}">

            @if ($errors->first('location'))
                <br>
                <span class="w3-text-red">{{ $errors->first('location') }}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="employment_type">Employment Type:</label>
            <select name="employment_type" id="employment_type" required>
                <option value="">-- Select Employment Type --</option>
                <option value="Full-time" {{ old('employment_type', $experience->employment_type) == 'Full-time' ? 'selected' : '' }}>Full-time</option>
                <option value="Part-time" {{ old('employment_type', $experience->employment_type) == 'Part-time' ? 'selected' : '' }}>Part-time</option>
                <option value="Internship" {{ old('employment_type', $experience->employment_type) == 'Internship' ? 'selected' : '' }}>Internship</option>
                <option value="Freelance" {{ old('employment_type', $experience->employment_type) == 'Freelance' ? 'selected' : '' }}>Freelance</option>
            </select>

            @if ($errors->first('employment_type'))
                <br>
                <span class="w3-text-red">{{ $errors->first('employment_type') }}</span>
            @endif
        </div>


        <div class="w3-margin-bottom">
            <label for="start_date">Start Date:</label>
            <input type="date" name="start_date" id="start_date" value="{{ old('start_date', $experience->start_date) }}" required>

            @if ($errors->first('start_date'))
                <br>
                <span class="w3-text-red">{{ $errors->first('start_date') }}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="end_date">End Date:</label>
            <input type="date" name="end_date" id="end_date" value="{{ old('end_date', $experience->end_date) }}">

            @if ($errors->first('end_date'))
                <br>
                <span class="w3-text-red">{{ $errors->first('end_date') }}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Save Changes</button>

    </form>

    <a href="/console/experiences/list">Back to Experience List</a>

</section>

@endsection
