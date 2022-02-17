@extends('layouts.app')

@section('main_content')
    <h1>Lista fumetti</h1>

    @foreach ($comics as $comic)
        <div>
            <h2>titolo:{{ $comic->title }}</h2>
            {{-- <p>{{ $comic->description }}</p> --}}
            <div>
                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                </a>
                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">clicca qui per veder in dettaglio</a>
            </div>
            {{-- <h2>prezzo:{{ $comic->price }}</h2>
            <h2>{{ $comic->series }}</h2>
            <h2>in vendita dal:{{ $comic->sale_date }}</h2>
            <h2>{{ $comic->type }}</h2> --}}
            <hr>
        </div>
    @endforeach
@endsection