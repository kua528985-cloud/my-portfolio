@extends('layouts.dashboard')

@section('content')
    <h1>Projects</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if ($projects->isEmpty())
        <p>Abhi koi project nahi hai.</p>
    @else
        <ul>
            @foreach ($projects as $project)
            <div style="display: flex; align-items: center; gap: 10px;">
    <a href="{{ url('/dashboard/projects/' . $project->id . '/edit') }}">Edit</a>

    <form action="{{ url('/dashboard/projects/' . $project->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</div>
                <li>
                    <strong>{{ $project->name }}</strong>
                    <p>{{ $project->description }}</p>
                    <a href="{{ url('/dashboard/projects/' . $project->id . '/edit') }}">
                        Edit
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
