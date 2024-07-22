@extends('layouts.app')

@section('page-name','Animals')



@section('main-content')

    <section class="show-animal">
        <article>
            <h1>{{ $animal->nome } <span>- {{ $animal->specie }}</span></h1>
            <div class="info">
                <p>{{ $animal->razza }}</p>
            </div>
            <img src="{{ $animal->url_img }}" alt="{{ $animal->nome }} img">
        </article>
    </section>

@endsection
