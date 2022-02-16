@extends('layouts.app')

@section('main_content')
    <h1>Lista fumetti</h1>

    @foreach ($comics as $comic)
        <div>
            <h2>{{ $comic->title }}</h2>
        </div>
    @endforeach
@endsection