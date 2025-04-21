@extends ('layout.frontend', ['title' => 'Home'])

@section ('content')

<!-- About Me Section -->
<section class="about-section">
    <h2 class="section-title">About Me!</h2>
    <p class="section-text">
    Hi there! I'm a passionate full-stack web developer with a strong focus on creating modern, user-friendly applications. I enjoy building everything from small business sites to rich interactive web apps. My stack includes technologies like Laravel, React, Node.js, and PostgreSQL.
    </p>
</section>

<!-- Experience Section -->
<section class="experience-section">
    <h2 class="section-title">Experience</h2>
    <div class="experience-list">
        @foreach ($experiences as $experience)
            <div class="experience-card">
                <h3 class="experience-title">{{ $experience->job_title }}</h3>
                <p class="experience-company">{{ $experience->company_name }} — {{ $experience->location }}</p>
                <p class="experience-meta">
                    {{ $experience->employment_type }} <br>
                    {{ $experience->start_date->format('M Y') }} - 
                    {{ $experience->end_date ? $experience->end_date->format('M Y') : 'Present' }}
                </p>
            </div>
        @endforeach
    </div>
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

<!-- Education Section -->
<section class="education-section">
    <h2 class="section-title">Education</h2>
    @foreach ($educations as $education)
        <div class="education-card">
            <h3 class="education-degree">{{ $education->course_name }}</h3>
            <p class="education-school">{{ $education->institution_name }} — {{ $education->location }}</p>
            <p class="education-dates">
                {{ \Carbon\Carbon::parse($education->start_date)->format('M Y') }} -
                {{ $education->end_date ? \Carbon\Carbon::parse($education->end_date)->format('M Y') : 'Ongoing' }}
            </p>
            @if ($education->description)
                <p class="education-description">{{ $education->description }}</p>
            @endif
        </div>
    @endforeach
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


