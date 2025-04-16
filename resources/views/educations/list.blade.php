@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Educations</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Institution Name</th>
            <th>Course Name</th>
            <th>Location</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Created</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($educations as $education)
            <tr>
                <td>{{$education->institution_name}}</td>
                <td>{{$education->course_name}}</td>
                <td>{{$education->location}}</td>
                <td>{{$education->start_date->format('M j, Y')}}</td>
                <td>
                    @if ($education->end_date)
                        {{$education->end_date->format('M j, Y')}}
                    @else
                        Ongoing
                    @endif
                </td>
                <td>{{$education->created_at->format('M j, Y')}}</td>
                <td><a href="/console/educations/edit/{{$education->id}}">Edit</a></td>
                <td><a href="/console/educations/delete/{{$education->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/educations/add" class="w3-button w3-green">New Education</a>

</section>

@endsection
