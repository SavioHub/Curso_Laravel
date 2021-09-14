@extends('layouts.main')

@section('title', 'Carol Calcados')

@section('content')

<div id="seach-container" class="col-md-12">
    <h2>Busque o evento</h2>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form>
</div>

<div id="events-container" class="col-md-12">
    <h3>Proximos Eventos</h3>
    <p>Veja os eventos dos próximos dias</p>

    <div id="cards-container" class="row">
        @foreach ($events as $event)

            <div class="card col-md-3">
                <img src="/img/event_placeholder.jpg" alt="{{$event->title}}">
                
                <div class="card-body">
                    <p class="card-date">13/09/2021</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participants">X participantes</p>
                    <a href="#" class="btn btn-primary">Saber nais</a>
                </div>
            </div>

        @endforeach
    </div>
</div>

@endsection