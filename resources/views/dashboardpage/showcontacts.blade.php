@extends('layouts.dashboard')

@section('content')
    <h1>Contact Messages</h1>

    @forelse ($contacts as $contact)
        <article>
            <h2>{{ $contact->name }}</h2>
            <p>
                <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
            </p>
            <p>{{ $contact->message }}</p>
            <small>{{ $contact->created_at->format('d M Y, h:i A') }}</small>
        </article>
    @empty
        <p>Abhi koi message nahi aaya.</p>
    @endforelse
@endsection