@extends('layouts.app')

@section('page-name','Deleted Animals')

@section('main-content')

    <div class="container">

        <section>
            @foreach ($animals as $animal)
            <article>
                <a href="/show/{{ $animal->id }}">
                    <h1>{{ $animal->nome }}</h1>
                    <img src="{{ $animal->url_img }}" alt="{{ $animal->nome }} img">
                    <form action="{{ route('animal.restore', ['animal' => $animal->id]) }}" method="POST" class="d-inline-block" data_animal_id="{{ $animal->id }}" data_animal_nome="{{ $animal->nome }}">
                        @method('PATCH')
                        @csrf
                        
                        <button type="submit" class="btn btn-secondary">Ripristina</button>
                    </form>
                </a>
            </article>
            @endforeach
        </section>
    </div>


@endsection
