@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Education</h2>

    <form method="post" action="/console/educations/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="institution_name">Institution Name:</label>
            <input type="text" name="institution_name" id="institution_name" value="{{ old('institution_name') }}" required>

            @if ($errors->first('institution_name'))
                <br>
                <span class="w3-text-red">{{ $errors->first('institution_name') }}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="course_name">Course Name:</label>
            <input type="text" name="course_name" id="course_name" value="{{ old('course_name') }}" required>

            @if ($errors->first('course_name'))
                <br>
                <span class="w3-text-red">{{ $errors->first('course_name') }}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="location">Location:</label>
            <input type="text" name="location" id="location" value="{{ old('location') }}" required>

            @if ($errors->first('location'))
                <br>
                <span class="w3-text-red">{{ $errors->first('location') }}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="start_date">Start Date:</label>
            <input type="date" name="start_date" id="start_date" value="{{ old('start_date') }}" required>

            @if ($errors->first('start_date'))
                <br>
                <span class="w3-text-red">{{ $errors->first('start_date') }}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="end_date">End Date:</label>
            <input type="date" name="end_date" id="end_date" value="{{ old('end_date') }}">

            @if ($errors->first('end_date'))
                <br>
                <span class="w3-text-red">{{ $errors->first('end_date') }}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Add Education</button>

    </form>

    <a href="/console/educations/list">Back to Education List</a>

</section>

@endsection
