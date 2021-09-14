<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
//import do Model

class EventController extends Controller
{
    // rota principal da aplicação= /
    public function index(){

        
        $events = Event::all();//chamando todos os eventos do banco
    
        return view('welcome', ['events' => $events]);//passando o events para a view
    }

    public function create(){
        return view('events.create');
    }
}
