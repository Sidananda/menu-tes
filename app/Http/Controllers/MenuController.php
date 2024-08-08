<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Additional;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('menus.index', compact('menus'));
    }

    public function create()
    {
        $additionals = Additional::all();
        return view('menus.create', compact('additionals'));
    }

    public function store(Request $request)
    {
        $menu = Menu::create($request->only(['name', 'price']));
        $menu->additionals()->attach($request->additionals);

        return redirect()->route('menus.index');
    }

    public function show($id)
    {
        $menu = Menu::findOrFail($id);
        return view('menus.show', compact('menu'));
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        $additionals = Additional::all();
        return view('menus.edit', compact('menu', 'additionals'));
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
        $menu->update($request->only(['name', 'price']));
        $menu->additionals()->sync($request->additionals);

        return redirect()->route('menus.index');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->route('menus.index');
    }
}
