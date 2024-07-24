@extends('layouts.app')

@section('page-name','Animals')



@section('main-content')

    <section class="show-animal">
        <article>
            <img src="{{ $animal->url_img }}" alt="{{ $animal->nome }} img">
            <div class="text">
                <h1>{{ $animal->nome }} <span>- {{ $animal->specie }}</span></h1>
                <h2>{{ $animal->razza }}</h2>
                <div class="info">
                    <p><i class="fa-solid fa-weight-hanging"></i> {{ $animal->peso }} kg</p>
                    <p><i class="fa-solid fa-ruler"></i> {{ $animal->altezza }} cm</p>
                </div>
                <h4>{{ $animal->info }}</h4>
            </div>
            <a class="button" href="/edit/{{$animal->id}}">Edit</a>
            <form action="{{ route('animal.destroy', $animal) }}" method="POST">
                @method('DELETE')
                @csrf

                <button type="submit">Delete</button>
            </form>
        </article>
    </section>

@endsection
