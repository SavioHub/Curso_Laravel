@extends('layouts.main')

@section('title', 'Agro vendas')

@section('content')

<div id="search-container" class="col-md-12">
    <h2>Busque um produto</h2>

    <form action="">
        <label class="sr-only" for="search">Busca por produtos</label>
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
        <button>buscar</button>
    </form>
</div>

<div id="events-container" class="col-md-12">
    <h3>Listas de produtos</h3>
    <p class="subtitle">Veja a lista de protudos mais recentes</p>

    <div id="cards-container" class="row">
        @foreach ($events as $event)

            <div class="card col-md-3">
                <img src="/img/Agro_vendas.png" alt="{{$event->title}}">
                
                <div class="card-body">
                    <p class="card-date">13/09/2021</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participants">X participantes</p>
                    <a href="#" class="btn btn-primary" id="btn">Saber nais</a>
                </div>
            </div>

        @endforeach
    </div>
</div>

@endsection