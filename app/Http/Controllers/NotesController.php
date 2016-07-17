<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Card;
use App\Note;
class NotesController extends Controller
{
    public function store(Request $request,Card $card)
    {
    	$this->validate($request,[
            'body'=>'required|min:10'
            ]);

    	$card->notes()->create([
    		'body'=> $request->body,
            'user_id' => 2,
            'card_id' => $card->id
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
