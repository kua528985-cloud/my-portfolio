@extends('layouts.main')

@section('content')
    <section class="hero">
        <p class="eyebrow">ABOUT ME</p>
        <h1>Learning by <span>building</span></h1>

        <p class="intro">
            I’m pursuing an Advanced Diploma in Computer Engineering.
            I’m learning web development by building practical projects
            and exploring new technologies.
        </p>

        <article>
            <h2>Education</h2>
            <p>Advanced Diploma in Computer Engineering</p>
        </article>

        <article>
            <h2>Tools I’m learning</h2>
            <p>PHP, Laravel, Blade, HTML, CSS, Git, and GitHub.</p>
        </article>

        <article>
            <h2>My goal</h2>
            <p>
                To keep improving my programming skills by creating useful
                projects and learning modern web development.
            </p>
        </article>

        <a class="button" href="{{ url('/projects') }}">View My Projects</a>
    </section>
@endsection