@extends('layouts.main')

@section('content')
    <section class="hero">
        <p class="eyebrow">GET IN TOUCH</p>
        <h1>Let’s connect</h1>
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