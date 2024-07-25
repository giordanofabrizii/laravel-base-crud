@extends('layouts.app')

@section('page-name','Create New Animal')

@section('main-content')
    <div class="errors">
        @if($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </div>

    <section class="form">
        <form action="{{ route('animals.store') }}" method="POST">
            @csrf

            <div>
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome">
            </div>

            <div>
                <label for="specie">Specie</label>
                <input type="text" id="specie" name="specie">
            </div>
            <div>
                <label for="razza">Razza</label>
                <input type="text" id="razza" name="razza">
            </div>
            <div>
                <label for="eta">Et&agrave;</label>
                <input type="text" id="eta" name="eta">
            </div>
            <div>
                <label for="sesso">Sesso</label>
                <input type="text" id="sesso" name="sesso">
            </div>
            <div>
                <label for="peso">Peso (kg)</label>
                <input type="text" id="peso" name="peso">
            </div>
            <div>
                <label for="altezza">Altezza (cm)</label>
                <input type="text" id="altezza" name="altezza">
            </div>
            <div>
                <label for="url_img">Url Immagine</label>
                <input type="text" id="url_img" name="url_img">
            </div>
            <div>
                <label for="info">Extra Info</label>
                <input type="text" id="info" name="info">
            </div>

            <button type="submit">Send</button>
        </form>
    </section>

@endsection
