<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class ShowmovieController extends Controller
{
    //
    public function showmovie()
    {
        //return the view 
        $tickets = Ticket::all();
        return view('moviegrid', compact("tickets"));
    }


    //
    public function showsinglemovie(Ticket $id)
    {
        //return the view 
        
        //
        // $tickets = Ticket::all();
        $ticket = Ticket::find($id);
        // dd($oneProduct);
        // dd($ticket);
        return view('moviesingle', compact("ticket"));
    }
}
