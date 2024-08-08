<?php

namespace App\Http\Controllers;

use App\Models\Variant;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    public function index()
    {
        $variants = Variant::all();
        return view('variants.index', compact('variants'));
    }

    public function create()
    {
        return view('variants.create');
    }

    public function store(Request $request)
    {
        Variant::create($request->only(['name']));

        return redirect()->route('variants.index');
    }

    public function show($id)
    {
        $variant = Variant::findOrFail($id);
        return view('variants.show', compact('variant'));
    }

    public function edit($id)
    {
        $variant = Variant::findOrFail($id);
        return view('variants.edit', compact('variant'));
    }

    public function update(Request $request, $id)
    {
        $variant = Variant::findOrFail($id);
        $variant->update($request->only(['name']));

        return redirect()->route('variants.index');
    }

    public function destroy($id)
    {
        $variant = Variant::findOrFail($id);
        $variant->delete();

        return redirect()->route('variants.index');
    }
}
