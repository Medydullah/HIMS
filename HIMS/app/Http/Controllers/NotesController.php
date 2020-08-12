<?php

namespace App\Http\Controllers;
use App\Notes;
use Illuminate\Http\Request;

class NotesController extends Controller
{

    public function ()
    {
        $data['notes'] = Notes::paginate(10);

        return view('list',$data);
    }

    public function pdf(){

     $data['title'] = 'Notes List';
     $data['notes'] =  Notes::get();

     $pdf = PDF::loadView('notes.list_notes', $data);

     return $pdf->download('tuts_notes.pdf');
    }

    //
}
