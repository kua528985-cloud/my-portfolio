@extends('layouts.main')

@section('content')
    <h1>My Projects</h1>

    @forelse ($projects as $project)
        <article>
            <h2>{{ $project->name }}</h2>
            <p>{{ $project->description }}</p>
        </article>
        @if ($project->github_url)
    <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer">
        GitHub
    </a>
@endif

@if ($project->live_url)
    <a href="{{ $project->live_url }}" target="_blank" rel="noopener noreferrer">
        Live Demo
    </a>
@endif
    @empty
        <p>Abhi koi project available nahi hai.</p>
    @endforelse
@endsection