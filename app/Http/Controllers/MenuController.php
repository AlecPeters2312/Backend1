<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        return view('menu.index', compact('menus'));
        // compact maakt een array met de waardes van $menus om data naar een view te sturen
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate( [
            "name" => "required",
            "price" => "required|numeric",
            "description" => "required",
        ]);
        // controleert of de gegevens ingevuld zijn en voor prijs of het een getal is

        Menu::create($request->all());
        // met de request slaat hij alles wat is ingevuld op in de database
        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        return view('menu.show', compact('menu'));
        // er wordt een item met het id meegegeven die doormiddel van compact gestuurd wordt naar de show view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'));
        // net als bij show haalt het een item op die hij doorstuurt naar de edit view om de gegevens ervan te zien
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);

        $menu->update($request->all());
        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        // haalt het id op via een form en verwijderd dat item uit de database
        return redirect()->route('menu.index');
    }
}
