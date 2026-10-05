@extends('layouts.dashboard')

@section('content')
    <h1>Add Project</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ url('/dashboard/projects') }}" method="POST">
        @csrf

        <p>
            <label for="name">Project name</label><br>
            <input id="name" type="text" name="name"
                   value="{{ old('name') }}" required>
        </p>

        <p>
            <label for="description">Description</label><br>
            <textarea id="description" name="description"
                      rows="5" required>{{ old('description') }}</textarea>
        </p>

        <p>
            <label for="technologies">Technologies (comma-separated)</label><br>
            <input id="technologies" type="text" name="technologies"
                   value="{{ old('technologies') }}"
                   placeholder="Laravel, PHP, SQLite">
        </p>

        <p>
            <label for="github_url">GitHub URL (optional)</label><br>
            <input id="github_url" type="url" name="github_url"
                   value="{{ old('github_url') }}">
        </p>

        <p>
            <label for="live_url">Live Demo URL (optional)</label><br>
            <input id="live_url" type="url" name="live_url"
                   value="{{ old('live_url') }}">
        </p>

        <button type="submit">Add Project</button>
    </form>
@endsection