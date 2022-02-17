@extends('layouts.app')

@section('main_content')
    <h1> fumetto singolo</h1>

    <div>
        <h2>titolo:{{ $comic->title }}</h2>
        <p>{{ $comic->description }}</p>
        <div>
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>
        <h2>prezzo:{{ $comic->price }}</h2>
        <h2>{{ $comic->series }}</h2>
        <h2>in vendita dal:{{ $comic->sale_date }}</h2>
        <h2>{{ $comic->type }}</h2>
        <hr>
    </div>
    <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post">
        @csrf
        @method('DELETE')

        <button class="btn btn-danger" onclick="return confirm('Sei sicuro di voler cancellare?')">Cancella</button>
    </form>
@endsection