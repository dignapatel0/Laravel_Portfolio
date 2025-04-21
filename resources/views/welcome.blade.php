@extends ('layout.frontend', ['title' => 'Home'])

@section ('content')

<!-- About Me Section -->
<section class="about-section">
    <h2 class="section-title">About Me!</h2>
    <p class="section-text">
        Quisque felis ex, pellentesque vel elementum eu, bibendum vel massa. Donec id feugiat erat. Aliquam commodo rutrum velit, vitae vestibulum purus ullamcorper vestibulum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
    </p>
</section>

<!-- Projects Section -->
<section class="projects-section">
    <h2 class="section-title">Projects</h2>
    <div class="projects-grid">
        @foreach ($projects as $project)
            <div class="project-card">
                <div class="project-header">
                    <h3 class="project-title">{{$project->title}}</h3>
                </div>
                @if ($project->image)
                    <img src="{{asset('storage/'.$project->image)}}" alt="{{$project->title}}" class="project-image">
                @endif
                <div class="project-details">
                    @if ($project->url)
                        <p class="project-url">View Project: <a href="{{$project->url}}" class="project-link">{{$project->url}}</a></p>
                    @endif
                    <p class="project-meta">
                        Posted: {{$project->created_at->format('M j, Y')}}<br>
                        Type: {{$project->type->title}}
                    </p>
                    <a href="/project/{{$project->slug}}" class="view-details-btn">View Project Details</a>
                </div>
            </div>
        @endforeach
    </div>
</section>

<!-- Skills Section -->
<section class="skills-section">
    <h3 class="section-title">My Skills</h3>
    <ul class="skills-list">
        @foreach ($skills as $skill)
            <li class="skill-item">
                <a href="{{$skill->url}}" class="skill-link">{{$skill->title}}</a>
                
                @if ($skill->image)
                    <img src="{{asset('storage/'.$skill->image)}}" alt="{{$skill->title}}" class="skill-image" width="100">
                @endif
            </li>
        @endforeach
    </ul>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <h2 class="section-title">Contact Me</h2>
    <p class="contact-info">
        <i class="fas fa-phone-alt"></i> Phone: 111.222.3333<br>
        <i class="fas fa-envelope"></i> Email: <a href="mailto:email@address.com" class="contact-link">email@email.com</a>
    </p>
</section>


@endsection
