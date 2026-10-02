@extends('layouts.main')

@section('content')
    <section class="hero">
        <p class="eyebrow">ABOUT ME</p>
        <h1>Learning by <span>building</span></h1>

        <p class="intro">
            Main Advanced Diploma in Computer Engineering kar raha/rahi hoon.
            Mujhe technology samajhna, web development seekhna aur apni learning ko
            projects ke zariye dikhana pasand hai.
        </p>

        <article>
            <h2>What I'm learning</h2>
            <p>
                Main apni computer engineering ki padhai ke saath programming aur
                web development skills par kaam kar raha/rahi hoon. Ye portfolio
                meri learning journey aur projects ko dikhata hai.
            </p>
        </article>

        <a class="button" href="{{ url('/projects') }}">Mere Projects Dekho</a>
    </section>
@endsection