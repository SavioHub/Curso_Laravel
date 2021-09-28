@section('title', 'Contato')
@extends('layouts.main')
@section('content')

<div id="contact-container" class="container">
    
    <form action="/events" method="POST">
        @csrf
        
        <div class="container-beta">
            <h1 id="teste">Crie o seu evento</h1>
            
            <div class="form-container">
                <label class="contact-title" class="contact-title" for="title">Evento:</label>
                {{-- <label for="sr-only" class="form-control">Nome do evento</label> --}}
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div>
    
            <div class="form-container">
                <label class="contact-title" for="title">Cidade:</label>
                {{-- <label class="contact-title" for="sr-only" class="form-control">Nome do evento</label> --}}
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
            </div>
    
            <div class="form-container">
                <label class="contact-title" for="title">o evento é privado?</label>
                {{-- <label class="contact-title" for="sr-only" class="form-control">Nome do evento</label> --}}
                <select name="private" id="private" class="form-control">
                    <option value="0">Nâo</option>
                    <option value="1">Sim</option>
                </select>
            </div>
    
            <div class="form-container">
                <label class="contact-title" for="title">Descrição do evento:</label>
                {{-- <label class="contact-title" for="sr-only" class="form-control">Descrição do evento</label> --}}
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento"></textarea>
                <input type="submit" class="btn btn-primary" value="Criar Evento">
            </div>
        </div>
        
    </form>
</div>
@endsection