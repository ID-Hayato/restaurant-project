<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
class GuestController extends Controller
{
    public function create(){
        return view('guest.create');
    }
    //
public function store(Request $request){
    $validated=$request->validate([
        'name'=>'required|max:20',
        'tel'=>'required|size:11',
        'mail'=>'required',
    ]);
    $post=Guest::create($validated);
    return back();

    
}

}
