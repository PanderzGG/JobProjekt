@extends('layout.shared')

@section('title', 'Job-Detail')

@section('content')

    <div class="show-wrapper">
        <div class="show-title-container">
            <h1>{{ $job->Titel }}</h1>
        </div>
        <div class="show-p-container">
            <p>Beschreibung: {{ $job->Beschreibung }}</p>
        </div>
        <div class="show-p-container">
            <p>Gehalt: {{ $job->Gehalt }}</p>
        </div>
        <div class="show-p-container">
            <p>Standort: {{ $job->Standort }}</p>
        </div>


    </div>

@endsection
