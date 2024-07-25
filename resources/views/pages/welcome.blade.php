@extends('layouts.app')

@section('page-name','Animals')

@section('main-content')

    <div class="container">
        <a href="/create">Add new animal</a>
        <a href="/deleted">Bin</a>

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
    </div>


@endsection
