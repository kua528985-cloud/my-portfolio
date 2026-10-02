@extends('layouts.dashboard')

@section('content')
    <h1>Edit Project</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ url('/dashboard/projects/' . $project->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Project name</label>
        <input
            id="name"
            type="text"
            name="name"
            value="{{ old('name', $project->name) }}"
            required
        >

        <br><br>

        <label for="description">Description</label>
        <textarea id="description" name="description" required>{{ old('description', $project->description) }}</textarea>

        <br><br>

        <button type="submit">Save Changes</button>

        <label for="github_url">GitHub URL (optional)</label>
<input
    id="github_url"
    type="url"
    name="github_url"
    value="{{ old('github_url', $project->github_url) }}"
>

<br><br>

<label for="live_url">Live Demo URL (optional)</label>
<input
    id="live_url"
    type="url"
    name="live_url"
    value="{{ old('live_url', $project->live_url) }}"
>

<br><br>
    </form>
@endsection