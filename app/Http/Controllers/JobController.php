<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;



class JobController extends Controller
{
    use AuthorizesRequests;
    public function index()
    {
        // Zeigt eine Liste aller Jobs
        $jobs = Job::paginate(8);
        return view('jobs.index', compact('jobs'));
    }

    public function show($id)
    {
        // Zeigt Details zu einem Job
        $job = Job::findOrFail($id);

        $jobs = Job::paginate(8);
        return view('jobs.show', compact('job', 'jobs'));
    }

    public function create()
    {
        // Zeigt das Formular zum Erstellen eines neuen Jobs
        return view('jobs.create');
    }

    public function edit($id)
    {
        $job = Job::findOrFail($id);

        // $this->authorize('update', $job);

        return view('jobs.edit', compact('job'));
    }

    public function update(Request $request, $id)
    {
        // Validierung der Eingaben
        $request->validate([
            'Titel' => 'required|max:255',
            'Beschreibung' => 'required',
            'Gehalt' => 'required|numeric',
            'Standort' => 'required|max:100',
        ]);

        // Finde das Job-Modell
        $job = Job::findOrFail($id);

        // Update des Jobs
        $job->update([
            'Titel' => $request->Titel,
            'Beschreibung' => $request->Beschreibung,
            'Gehalt' => $request->Gehalt,
            'Standort' => $request->Standort,
        ]);

        // Debugging-Ausgabe in Log-Datei
        Log::info('Job updated successfully!');

        // Weiterleitung zur Jobs-Liste
        return redirect()->route('jobs.index')->with('success', 'Job erfolgreich aktualisiert');
    }


    public function store(Request $request)
    {
        Job::create([
            'Titel' => $request->input('Titel'),
            'Beschreibung' => $request->input('Beschreibung'),
            'Gehalt' => $request->input('Gehalt'),
            'Standort' => $request->input('Standort'),
            'category_id' => $request->input('category_id'),
            'company_id' => $request->input('company_id'),
            'user_id' => $request->input('user_id')
        ]);

        return redirect()->route('home');
    }

    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect()->route('jobs.index')->with('success','Job erfolgreich gelöscht');
    }
}
