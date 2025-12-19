<?php

namespace App\Http\Controllers;

use App\Models\Animal;

class AnimalController extends Controller
{
    public function show($id)
    {
        $animal = Animal::findOrFail($id);

        return view('pages.animal-show', compact('animal'));
    }

    public function create()
    {
        Animal::create([
            'name' => 'Coquillette',
            'species' => 'Chien',
            'age' => 3,
            'description' => 'Une Shiba Inu vive et joyeuse, toujours prête à jouer.',
            'photo' => 'coquillette.png',
        ]);

        return redirect()->route('home');
    }

    public function edit($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->update([
            'name' => $animal->name . ' modifié',
        ]);

        return redirect()->route('home');
    }

    public function delete($id)
    {
        Animal::findOrFail($id)->delete();

        return redirect()->route('home');
    }
}
