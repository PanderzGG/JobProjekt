@extends('layout.shared')

@section('title', 'Job-Bearbeiten')

@section('content')
    <div>
        <h1 class="all">Job bearbeiten</h1>
        <div class="form-wrapper">
            <div class="new-container">
                <form action="{{ route('jobs.update', $job->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-25">
                            <label for="bbez">Berufsbezeichnung</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="Titel" value="{{ $job->Titel }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="Beschreibung">Beschreibung:</label>
                        </div>
                        <div class="col-75">
                            <textarea name="Beschreibung" required>{{ $job->Beschreibung }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="Gehalt">Gehalt:</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="Gehalt" value="{{ $job->Gehalt }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="Standort">Standort</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="Standort" value="{{ $job->Standort }}" required>
                        </div>
                    </div>
                    <button class="ripbut" type="submit">Aktualisieren</button>
                </form>
            </div>
        </div>
@endsection
