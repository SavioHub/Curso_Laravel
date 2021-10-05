@section('title', 'Contato')
@extends('layouts.main')
@section('content')

<div id="contact-container" class="container d-flex flex-column justify-content-center align-items-center">
    
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="container-beta">
            <h1 id="teste">Crie o seu evento</h1>
            
            <div class="form-container">
                <label class="contact-title" class="contact-title" for="image">Imagem do Evento:</label>

                <input type="file" id="image" name="image" class="from-control-file">
            </div>

            <div class="form-container">
                <label class="contact-title" class="contact-title" for="title">Evento:</label>

                <label for="title" class="sr-only">Nome do evento</label>

                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div>
    
            <div class="form-container">
                <label class="contact-title" for="title">Cidade:</label>

                <label class="sr-only" for="city" class="form-control">Nome do evento</label>

                <input type="text" class="form-control" id="city" name="city" placeholder="Local de produção">
            </div>
    
            {{-- <div class="form-container">
                <label class="contact-title" for="title">O evento é privado?</label>
                
                <select name="private" id="private" class="form-control">
                    <option value="0">Nâo</option>
                    <option value="1">Sim</option>
                </select>
            </div> --}}
    
            <div class="form-container">
                <label class="contact-title" for="title">Data:</label>

                <label class="sr-only" for="date" >Data de fabricação:</label>
                <input type="date" class="form-control" id="date" name="date" placeholder="Data de fabricação">
            </div>

            <div class="form-container">
                <label class="contact-title" for="title">Quantidade:</label>

                <label class="sr-only" for="amount" >Quantidade para oferta:</label>
                <input type="text" class="form-control" id="amount" name="amount" placeholder="Quantidade para oferta">
            </div>

            <div class="form-container">
                <label class="contact-title" for="title">Descrição:</label>

                <label class="sr-only" for="description" >Descrição do produto</label>
                <textarea name="description" id="description" class="form-control" placeholder="Descrição do produto"></textarea>
                {{-- <input type="submit" class="btn btn-primary" value="Criar Evento"> --}}
                <button class="btn btn-primary">Criar Evento</button>
            </div>

           
        </form>
        </div>
        {{-- Flash Message inicio --}}
        <main>
            <div class="container-fluid">
                <div class="row">
                    
                    @if (session('msg'))
                        <div class="msg-container">
                            <p class="msg">{{session('msg')}}</p>
                        </div>
                    @endif

                    <a id="link-home" href="{{ route('home') }}"> 
                        <button class="but">HOME</button>
                    </a>
                    
                </div>
                
            </div>
        </main>
        {{-- Flash Message fim --}}
</div>
@endsection