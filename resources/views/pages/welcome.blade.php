@extends('layouts.app')

@section('page-name','Animals')

@section('main-content')

    <section>
        @foreach ($animals as $animal)
        <article>
            <a href="/show/{{ $animal->id }}">
                <h1>{{ $animal->nome }}</h1>
                <img src="{{ $animal->url_img }}" alt="{{ $animal->nome }} img">
            </a>
        </article>
        @endforeach
    </section>

@endsection
