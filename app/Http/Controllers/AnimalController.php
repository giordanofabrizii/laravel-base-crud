<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Http\Requests\StoreAnimalRequest;
use App\Http\Requests\UpdateAnimalRequest;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $animals = Animal::all();
        return view('pages.welcome',compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // create new animal
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnimalRequest $request)
    {
        // add a new animal
        $data = $request->validated();

        $newAnimal = new Animal($data);

        $newAnimal->save();

        return redirect()->route('animals.show', $newAnimal);
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        //
        return view('pages.show',compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        // edit single animal
        return view('pages.edit',compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnimalRequest $request, Animal $animal)
    {
        // update aniimal data

        $data = $request->validated();

        $animal->update($data);

        return redirect()->route('animals.show', $animal);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        // delete the animal

        $animal->delete();

        return redirect()->route('animals.index');

    }
}
