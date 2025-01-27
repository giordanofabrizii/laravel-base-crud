@extends('layouts.app')

@section('page-name','Edit')

@section('main-content')

    <section class="form">
        <form action="{{ route('animal.update', $animal) }}" method="POST">
            @method('PUT') {{-- to change method --}}
            @csrf

            <div>
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" value="{{ old('nome', $animal->nome) }}">
            </div>

            <div>
                <label for="specie">Specie</label>
                <input type="text" id="specie" name="specie" value="{{ old('nome', $animal->specie) }}">
            </div>
            <div>
                <label for="razza">Razza</label>
                <input type="text" id="razza" name="razza" value="{{ old('nome', $animal->razza) }}">
            </div>
            <div>
                <label for="eta">Et&agrave;</label>
                <input type="text" id="eta" name="eta" value="{{ old('nome', $animal->eta) }}">
            </div>
            <div>
                <label for="sesso">Sesso</label>
                <input type="text" id="sesso" name="sesso" value="{{ old('nome', $animal->sesso) }}">
            </div>
            <div>
                <label for="peso">Peso (kg)</label>
                <input type="text" id="peso" name="peso" value="{{ old('nome', $animal->peso) }}">
            </div>
            <div>
                <label for="altezza">Altezza (cm)</label>
                <input type="text" id="altezza" name="altezza" value="{{ old('nome', $animal->altezza) }}">
            </div>
            <div>
                <label for="url_img">Url Immagine</label>
                <input type="text" id="url_img" name="url_img" value="{{ old('nome', $animal->url_img) }}">
            </div>
            <div>
                <label for="info">Extra Info</label>
                <input type="text" id="info" name="info" value="{{ old('nome', $animal->info) }}">
            </div>

            <button type="submit">Update</button>
        </form>
    </section>

@endsection
