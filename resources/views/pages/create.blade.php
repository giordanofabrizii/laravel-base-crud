@extends('layouts.app')

@section('page-name','Create New Animal')

@section('main-content')

    <section class="form">
        <form action="{{ route('animals.store') }}" method="POST">
            @csrf

            <div>
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome">
            </div>

            <div>
                <label for="nome">Specie</label>
                <input type="text" id="specie" name="specie">
            </div>
            <div>
                <label for="nome">Razza</label>
                <input type="text" id="Razza" name="Razza">
            </div>
            <div>
                <label for="nome">Et&agrave;</label>
                <input type="text" id="eta" name="eta">
            </div>
            <div>
                <label for="nome">Sesso</label>
                <input type="text" id="sesso" name="sesso">
            </div>
            <div>
                <label for="nome">Peso (kg)</label>
                <input type="text" id="peso" name="peso">
            </div>
            <div>
                <label for="nome">Altezza (cm)</label>
                <input type="text" id="altezza" name="altezza">
            </div>
            <div>
                <label for="nome">Url Immagine</label>
                <input type="text" id="url_img" name="url_img">
            </div>
            <div>
                <label for="nome">Extra Info</label>
                <input type="text" id="info" name="info">
            </div>

            <button type="submit">Send</button>
        </form>
    </section>

@endsection