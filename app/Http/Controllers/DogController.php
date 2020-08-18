<?php

namespace App\Http\Controllers;

use App\Dog;
use Illuminate\Http\Request;

class DogController extends Controller
{
    public function index()
    {
        $dogs=Dog::all();
        return view('dog.index', ['dogs'=>$dogs]);
    }

    public function create()
    {
        return view('dog.create');
    }

    public function store(Request $request)
    {
        Dog::create($request->all());
        return redirect(route('dog.index'));
    }

    public function show(Dog $dog)
    {
    

    }

    public function edit(Dog $dog)
    {
        return view('dog.edit',['dog'=>$dog]);
    }

    public function update(Request $request, Dog $dog)
    {
        $dog->update($request->all());
        return redirect(route('dog.index'));
    }

    public function destroy(Dog $dog)
    {
        $dog->delete();
        return redirect (route('dog.index'));
    }
}
