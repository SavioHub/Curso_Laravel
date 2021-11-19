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
        
        
        Event::create($request->all());

        // if ($request->file('image')->isValid()) {

        //     // dd($request->file('image')->store('events'));

        //     $nameFile = $request->name . '.' . $request->file('image')->extension();
            
        //     $request->file('image')->storeAs('img/events', $nameFile);
           
        //     // dd($request->image->extension());
        // }
        
        //Image Upload

        return redirect('/events/contact')->with('msg', 'Produto adicionado com sucesso'); //metodo with cria uma mensagem ao usuário
        // redirecionando para uma página
    }
}
