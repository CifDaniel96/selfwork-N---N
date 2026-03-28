<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function create(){
        return view('tags.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name'=>'required|string|max:255',
        ]);

        Tag::create($validated);

        return redirect()->route('homepage');
    }
}
