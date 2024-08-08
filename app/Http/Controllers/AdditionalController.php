<?php

namespace App\Http\Controllers;

use App\Models\Additional;
use App\Models\Variant;
use Illuminate\Http\Request;

class AdditionalController extends Controller
{
    public function index()
    {
        $additionals = Additional::all();
        return view('additionals.index', compact('additionals'));
    }

    public function create()
    {
        $variants = Variant::all();
        return view('additionals.create', compact('variants'));
    }

    public function store(Request $request)
    {
        $additional = Additional::create($request->only(['name', 'description']));
        $additional->variants()->attach($request->variants);

        return redirect()->route('additionals.index');
    }

    public function show($id)
    {
        $additional = Additional::findOrFail($id);
        return view('additionals.show', compact('additional'));
    }

    public function edit($id)
    {
        $additional = Additional::findOrFail($id);
        $variants = Variant::all();
        return view('additionals.edit', compact('additional', 'variants'));
    }

    public function update(Request $request, $id)
    {
        $additional = Additional::findOrFail($id);
        $additional->update($request->only(['name', 'description']));
        $additional->variants()->sync($request->variants);

        return redirect()->route('additionals.index');
    }

    public function destroy($id)
    {
        $additional = Additional::findOrFail($id);
        $additional->delete();

        return redirect()->route('additionals.index');
    }
}
