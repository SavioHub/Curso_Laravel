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
        
        // $event = new Event;

        // dump($request->all());

        // $event->title = $request->title;
        // $event->city = $request->city;
        // $event->private = $request->private;
        // $event->date = $request->date;
        // $event->amount = $request->amount;
        // Amount é a quantidade de oferta
        // $event->description = $request->description;

        
        // $event->save();
        //metodo save para salvar os dados
        
        //Image Upload
        
        if ($request->hash_file('image') && $request->hash_file('image')->isValid()) {
            
            $requestImage = $request->image;

            $extension = $requestImage->extension();
            
            $imageName = md5($requestImage->getClientOriginalName() .strtotime("now")) . "." .$extension;
            //request->image acessa a propriedade ->image e o metodo getClientOriginalName() para criar o nome do arquivo,
            // e concatena com o tempo de agora usando strtotime("now"), vai criar uma string unica baseado no tempo q foi dado o upload
            //Depois vem a concatenação com a extenção do arquivo
            
            $request->image->move(public_path('img/events'), $imageName);
            //para mover o arquivo ao servidor
            
            // $event->image = $imageName;
            
        }

        Event::create($request->all());

        return redirect('/events/contact')->with('msg', 'Produto adicionado com sucesso'); //metodo with cria uma mensagem ao usuário
        // redirecionando para uma página
    }
}
