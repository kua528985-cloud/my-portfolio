@extends('layouts.dashboard')
@section('content')
    <h1>Portfolio Dashboard</h1>
    <p>Yahan se apne projects aur contact messages manage karo.</p>

    
        <div class="dashboard-grid">
        <article>
            <h2>Projects</h2>
            <p>Projects ki list dekho, edit karo, ya remove karo.</p>
            <a href="{{ url('/dashboard/projects') }}">Manage Projects</a>
        </article>

        <article>
            <h2>Add a Project</h2>
            <p>Apne portfolio me naya project jodo.</p>
            <a href="{{ url('/dashboard/projects/create') }}">Add Project</a>
        </article>

        <article>
            <h2>Contact Messages</h2>
            <p>Visitors ke bheje hue messages dekho.</p>
            <a href="{{ url('/dashboard/contacts') }}">View Messages</a>
        </article>
    </div>
@endsection