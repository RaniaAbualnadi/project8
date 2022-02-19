<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class Showmovie extends Controller
{
    //
    public function showmovie()
    {
        //return the view 
        $tickets = Ticket::all();
        return view('moviegrid', compact("tickets"));
    }
}
class showsinglemovie extends Controller
{
    //
    public function showsinglemovie(Ticket $ticket)
    {
        //return the view 
        //
        $oneTicket = Ticket::find($ticket->id);
        // dd($oneProduct);
        return view('moviesingle', compact('oneTicket'));
    }
}
