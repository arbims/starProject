<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StarRequest;
use App\Models\Star;
use Illuminate\Http\Request;

class StarController extends Controller
{
        
    /**
     * lsites les enregistrement
     *
     * @return void
     */
    public function index()
    {
        $stars = Star::all();
        return view('admin.star.index', compact('stars'));
    }
    
    /**
     * Affichage d'ecran d'ajout
     *
     * @return void
     */
    public function create()
    {
        $star = new Star();
        return view('admin.star.create', ['star' => $star]);
    }
    
    /**
     * Ajout d"un star
     *
     * @param  mixed $request
     * @return void
     */
    public function store(StarRequest $request)
    {
        Star::create($request->all());
        return to_route('adminstar.index')->with('success', 'Le star a bien été créé');
    }

      
    /**
     * vue d'edition
     *
     * @param  mixed $id
     * @return void
     */
    public function edit(int $id)
    {
        $star = Star::findOrFail($id);
        return view('admin.star.edit', ['star' => $star]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Star $star, StarRequest $request)
    {
        $star->update($request->all());
        return to_route('adminstar.index')->with('success', 'Le star a bien été modifiée');
    }

    
    /**
     * suppression de l'enregistrement avec l'image associé
     *
     * @param  mixed $star
     * @return void
     */
    public function destroy(Star $star)
    {
        $star->destroyImage();
        $star->delete();
        return to_route('adminstar.index')->with('success', 'Le star a bien été supprimé');
    }
}
