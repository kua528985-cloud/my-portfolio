@extends('layouts.main')

@section('content')
    <section class="hero">
        <p class="eyebrow">COMPUTER ENGINEERING STUDENT</p>

        <h1>Hi, I'm <span>Aman kumar</span></h1>

        <p class="intro">
            Main Advanced Diploma in Computer Engineering kar raha/rahi hoon.
            Web development seekh raha/rahi hoon aur apne projects se naye ideas bana raha/rahi hoon.
        </p>

        <div class="skills">
            <span>Computer Engineering</span>
            <span>Web Development</span>
            <span>Laravel</span>
            <span>Problem Solving</span>
        </div>

        <div class="actions">
            <a class="button" href="{{ url('/projects') }}">Mere Projects Dekho</a>
            <a class="button secondary" href="{{ url('/contact') }}">Contact Karo</a>
        </div>
    </section>
@endsection