@extends('layouts.main')

@section('content')
    <section id="home" class="hero">
        <p class="eyebrow">COMPUTER ENGINEERING STUDENT</p>
        <h1>Hi, I’m <span>Aman Kumar</span></h1>
        <p class="intro">
            I’m pursuing an Advanced Diploma in Computer Engineering and learning
            web development by building practical projects with Laravel.
        </p>

        <div class="skills">
            <span>PHP</span>
            <span>Laravel</span>
            <span>HTML &amp; CSS</span>
            <span>Git &amp; GitHub</span>
        </div>

        <div class="actions">
            <a class="button" href="#projects">View My Projects</a>
            <a class="button secondary" href="#contact">Contact Me</a>
        </div>
    </section>

    <section id="about" class="hero">
        <p class="eyebrow">ABOUT ME</p>
        <h2>Learning by building</h2>
        <p class="intro">
            I’m pursuing an Advanced Diploma in Computer Engineering.
            I’m learning web development by creating practical projects
            and exploring new technologies.
        </p>

        <article>
            <h3>Education</h3>
            <p>Advanced Diploma in Computer Engineering</p>
        </article>

        <article>
            <h3>Tools I’m learning</h3>
            <p>PHP, Laravel, Blade, HTML, CSS, Git, and GitHub.</p>
        </article>
    </section>

    <section id="projects" class="hero">
        <p class="eyebrow">MY WORK</p>
        <h2>Projects</h2>
        <p class="intro">
            Explore my projects, the technologies I use, and links to their source code.
        </p>

        <div class="project-list">
            @forelse ($projects as $project)
                <article class="project-card">
                    <h3>{{ $project->name }}</h3>
                    <p>{{ $project->description }}</p>

                    @if ($project->technologies)
                        <div class="project-technologies">
                            @foreach (explode(',', $project->technologies) as $technology)
                                <span>{{ trim($technology) }}</span>
                            @endforeach
                        </div>
                    @endif

                    <div class="project-links">
                        @if ($project->github_url)
                            <a href="{{ $project->github_url }}"
                               target="_blank" rel="noopener noreferrer">
                                View on GitHub ↗
                            </a>
                        @endif

                        @if ($project->live_url)
                            <a href="{{ $project->live_url }}"
                               target="_blank" rel="noopener noreferrer">
                                Live Demo ↗
                            </a>
                        @endif
                    </div>
                </article>
            @empty
                <p>No projects have been added yet.</p>
            @endforelse
        </div>
    </section>

    <section id="contact" class="hero">
        <p class="eyebrow">GET IN TOUCH</p>
        <h2>Let’s connect</h2>
        <p class="intro">
            Have a question or an opportunity to discuss? Send me a message.
        </p>

        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('contact.store') }}" method="POST">
            @csrf

            <p>
                <label for="name">Your name</label><br>
                <input id="name" name="name" type="text"
                       value="{{ old('name') }}" required>
            </p>

            <p>
                <label for="email">Your email</label><br>
                <input id="email" name="email" type="email"
                       value="{{ old('email') }}" required>
            </p>

            <p>
                <label for="message">Message</label><br>
                <textarea id="message" name="message" rows="6"
                          required>{{ old('message') }}</textarea>
            </p>

            <button type="submit">Send Message</button>
        </form>
    </section>
@endsection