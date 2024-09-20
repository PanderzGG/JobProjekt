@extends('layout.shared')
@section('title', 'Unternehmen-Detail')
@section('content')





    <div class="show-wrapper">
        <div class="show-title-container">
            <h1>{{ $company->Firma }}</h1>
        </div>
        <div class="show-p-container">
            <p>Adresse: {{ $company->Adresse }}</p>
        </div>
        <div class="show-p-container">
            <p>Webseite: {{ $company->Webseite }}</p>
        </div>
        <div class="show-p-container">
            <p>Telefon: {{ $company->Telefon }}</p>
        </div>
        <div class="show-p-container">
            <p>E-Mail: {{ $company->email }}</p>
        </div>


    </div>

@endsection
