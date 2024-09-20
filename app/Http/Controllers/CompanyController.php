<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CompanyController extends Controller
{
    public function index()
    {
        // Zeigt eine Liste aller Firmen
        $companies = Company::paginate(8);
        return view('companies.index', compact('companies'));
    }

    public function show($id)
    {
        // Zeigt Details zu einer Firma
        $company = Company::findOrFail($id);
        return view('companies.show', compact('company'));
    }

    public function store(Request $request)
    {
        //dd($request->all());

        Company::create([

            'Firma' => $request->input('Firma'),
            'Adresse' => $request->input('Adresse'),
            'Webseite' => $request->input('Webseite'),
            'Telefon' => $request->input('Telefon'),
            'E-mail' => $request->input('E-mail')

        ]);
    }

    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();

        return redirect()->route('companies.index')->with('success','Unternehmen erfolgreich gelöscht');
    }

    public function edit($id)
    {
        $company = Company::findOrFail($id);

        // $this->authorize('update', $job);

        return view('companies.edit', compact('company'));
    }

    public function update(Request $request, $id)
    {
        // Validierung der Eingaben
        $request->validate([
            'Firma' => 'required|max:255',
            'Adresse' => 'required',
            'webseite' => 'required|string',
            'Telefon' => 'required|max:100',
            'email' => 'required',
        ]);


        $company = Company::findOrFail($id);

        // Update des Jobs
        $company->update([
            'Firma' => $request->Firma,
            'Adresse' => $request->Adresse,
            'webseite' => $request->webseite,
            'Telefon' => $request->Telefon ,
            'email' => $request->email,
        ]);

        //dd($request->all());

        // Debugging-Ausgabe in Log-Datei
        Log::info('Job updated successfully!');

        // Weiterleitung zur Jobs-Liste
        return redirect()->route('companies.index')->with('success', 'Unternehmen erfolgreich aktualisiert');
    }

}
