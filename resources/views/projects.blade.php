@extends('layouts.main')

@section('content')
    <section class="hero">
        <p class="eyebrow">MY WORK</p>
        <h1>Projects</h1>
        <p class="intro">
    Explore my projects, the technologies I use, and links to their source code.
</p>
        
    </section>

    <section class="project-list">
        @forelse ($projects as $project)
            <article class="project-card">
                <h2>{{ $project->name }}</h2>
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
                           target="_blank"
                           rel="noopener noreferrer">
                            View on GitHub ↗
                        </a>
                    @endif

                    @if ($project->live_url)
                        <a href="{{ $project->live_url }}"
                           target="_blank"
                           rel="noopener noreferrer">
                            Live Demo ↗
                        </a>
                    @endif
                </div>
            </article>
        @empty
            <p>Abhi projects add nahi hue hain.</p>
        @endforelse
    </section>
@endsection