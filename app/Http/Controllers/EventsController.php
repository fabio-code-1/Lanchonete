<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lanche;

class EventsController extends Controller
{
    public function index($id){
        $event = Lanche::findOrFail($id);
        
        return view('events.show', [
            'event' => $event
        ]);
    }
}
