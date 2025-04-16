@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Experiences</h2>

    <a href="/console/experiences/add" class="w3-button w3-blue">+ Add Experience</a>

    @if (session('message'))
        <div class="w3-panel w3-green w3-margin-top">
            {{ session('message') }}
        </div>
    @endif

    <table class="w3-table w3-bordered w3-margin-top">
        <thead>
            <tr>
                <th>Job Title</th>
                <th>Company</th>
                <th>Location</th>
                <th>Employment Type</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th></th>
                <th></th>
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
                        {{$experience->end_date->format('M j, Y')}}

                        @else
                            Ongoing
                        @endif
                   </td>
                    <td><a href="/console/experiences/edit/{{$experience->id}}">Edit</a></td>
                    <td><a href="/console/experiences/delete/{{$experience->id}}">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

</section>

@endsection
