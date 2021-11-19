@extends('layouts.main')

@section('title', 'Agro vendas')

@section('content')

<div id="container" class="col-md-12"></div>

<div id="events-container" class="col-md-12">  
    <h3>Listas de produtos</h3>
    <p class="subtitle">Produtos prouzidos pelos agricultores da comunidade Riachão e de demais comunidades Malhadenses.</p>

    <div id="cards-container" class="row">
        @foreach ($events as $event)

            <div class="card col-md-3">
                {{-- <img src="img/events/{{$event->image}}" alt="{{$event->title}}"> --}}
                
                <div class="card-body">
                    <p class="card-date">{{$event->date}}</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participants">{{$event->amount}} disponiveis</p>
                    <a href="#" class="btn btn-primary" id="btn">Saber nais</a>
                </div>

                {{-- <img src="img/events/{{$event->image}}" alt="{{$event->title}}"> --}}
                <div class="card-body">
                    <p class="card-date">{{$event->date}}</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participants">{{$event->amount}} disponiveis</p>
                    <a href="#" class="btn btn-primary" id="btn">Saber nais</a>
                </div>

                {{-- <img src="img/events/{{$event->image}}" alt="{{$event->title}}"> --}}
                <div class="card-body">
                    <p class="card-date">{{$event->date}}</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participants">{{$event->amount}} disponiveis</p>
                    <a href="#" class="btn btn-primary" id="btn">Saber nais</a>
                </div>
            </div>

        @endforeach
    </div>
</div>

@endsection