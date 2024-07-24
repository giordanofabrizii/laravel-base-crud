@extends('layouts.app')

@section('page-name','Edit')

@section('main-content')

    <section class="form">
        <form action="{{ route('animals.update', $animal) }}" method="POST">
            @method('PUT') {{-- to change method --}}
            @csrf

            <div>
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" value="{{ $animal->nome }}">
            </div>

            <div>
                <label for="specie">Specie</label>
                <input type="text" id="specie" name="specie" value="{{ $animal->specie }}">
            </div>
            <div>
                <label for="razza">Razza</label>
                <input type="text" id="razza" name="razza" value="{{ $animal->razza }}">
            </div>
            <div>
                <label for="eta">Et&agrave;</label>
                <input type="text" id="eta" name="eta" value="{{ $animal->eta }}">
            </div>
            <div>
                <label for="sesso">Sesso</label>
                <input type="text" id="sesso" name="sesso" value="{{ $animal->sesso }}">
            </div>
            <div>
                <label for="peso">Peso (kg)</label>
                <input type="text" id="peso" name="peso" value="{{ $animal->peso }}">
            </div>
            <div>
                <label for="altezza">Altezza (cm)</label>
                <input type="text" id="altezza" name="altezza" value="{{ $animal->altezza }}">
            </div>
            <div>
                <label for="url_img">Url Immagine</label>
                <input type="text" id="url_img" name="url_img" value="{{ $animal->url_img }}">
            </div>
            <div>
                <label for="info">Extra Info</label>
                <input type="text" id="info" name="info" value="{{ $animal->info }}">
            </div>

            <button type="submit">Send</button>
        </form>
    </section>

@endsection
