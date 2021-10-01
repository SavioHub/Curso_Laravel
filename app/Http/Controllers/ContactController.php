<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class ContactController extends Controller
{
    public function contact(){
        return view('events/contact');
    }

    public function store(Request $request) {
        
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->date = $request->date;
        $event->amount = $request->amount;
        // Amount é a quantidade de oferta
        $event->description = $request->description;

        $event->save();
        //metodo save para salvar os dados

        return redirect('/events/contact')->with('msg', 'Produto adicionado com sucesso'); //metodo with cria uma mensagem ao usuário
        // redirecionando para uma página
    }
}
