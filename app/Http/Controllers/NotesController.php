<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Card;
use App\Note;
class NotesController extends Controller
{
    public function store(Request $request,Card $card)
    {
    	// return $card;
    	// return $request->all();
    	// $note = new Note;
    	// $note->body = $request->body;
    	// $card->notes()->save($note);

    	$card->notes()->create([
    		'body'=> $request->body
    		]);
    	return back();
    }

    public function edit(Note $note){
    	return view('notes.edit',[
    		'note' => $note
    		]);
    }
    public function update(Request $request, Note $note){
    	$note->update($request->all());
    	return back();
    }
}
