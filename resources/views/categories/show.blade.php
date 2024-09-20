@extends('layout.shared')

@section('title', 'Kategorie-Detail')

@section('content')

    <div class="show-wrapper">
        <div class="show-title-container">
            <h1>{{ $category->Name }}</h1>
        </div>
        <div class="show-p-container">
            <p>Beschreibung: {{ $category->Beschreibung }}</p>
        </div>

@endsection
