<?php

namespace App\Http\Controllers;
use App\Card;
use Illuminate\Http\Request;

use App\Http\Requests;

class CardsController extends Controller
{
    public function index(){
    	// $cards = DB::table('cards')->get();
    	$cards = Card::all();
    	return view('cards.index',['cards' => $cards]);
    }

     public function show(Card $card){
     	$card->load('notes.user');
        // return $card;
    	return view('cards.show',['card' => $card]);

    }

    
}
