<?php

namespace App\Http\Controllers;

use App\Models\Vancavies;
use Illuminate\Http\Request;

class VancaviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vancavies = Vancavies::all();
        return view('vancavies.index', compact('vancavies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vancavies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',

        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('vancavies');
        }

        Vancavies::create($validated);
        return redirect()->route('vancavies.index')->with('success', 'Vancavies created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('vancavies.show',compact('vancavy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('vancavy.edit',compact('vancavy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);
    

    if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')->store('vancavies');
    }

    $vancavy->update($validated);

    return redirect()->route('vancavies.index')->with('success', 'Vancavies updated successfully.');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if ($vancavy->image) {
            \Storage::delete($vancavy->image);
        }

        $vancavy->delete();
        return redirect()->route('vancavies.index')->with('success', 'Vancavies deleted successfully.');
    }
}
