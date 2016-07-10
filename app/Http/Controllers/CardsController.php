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

     public function show($id){
     	$card = Card::find($id);
     	// return $card->notes;
    	return view('cards.show',['card' => $card]);

    }

    
}
