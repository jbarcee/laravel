<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     * GET
     */

    public function index()
    {
        //los 20 primeros pokemon
        $response = Http::withoutVerifying()->get('https://pokeapi.co/api/v2/pokemon/ditto');
        $data = $response->json();
        return view('index', ['data' => $data]);

    }

    /**
     * Store a newly created resource in storage.
     * POST
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * GET{var}
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT{var}//PATCH{var}
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE{var}
     */
    public function destroy(string $id)
    {
        //
    }
}
