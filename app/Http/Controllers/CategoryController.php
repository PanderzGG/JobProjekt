<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::paginate(8);
        return view('categories.index', compact('categories'));
    }

    public function show($id)
    {

        $category = Category::findOrFail($id);
        $jobs = $category->jobs;
        return view('categories.show', compact('category', 'jobs'));
    }

    public function store (Request $request)
    {
        Category::create([
            'Name' => $request->name,
        ]);
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);



        return view('categories.edit', compact('category'));
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success','Kategorie erfolgreich gelöscht');
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'Name' => 'required|max:255',
            'Beschreibung' => 'required',
        ]);


        $category = Category::findOrFail($id);

        $category->update([
            'Name' => $request->Name,
            'Beschreibung' => $request->Beschreibung,
        ]);

        //dd($request->all());


        return redirect()->route('categories.index')->with('success', 'Kategorie erfolgreich aktualisiert');
    }
}
