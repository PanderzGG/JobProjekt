@extends('layout.shared')

@section('title', 'Unternehmen-Bearbeiten')

@section('content')
    <div>
        <h1 class="all">Unternehmen Bearbeiten</h1>
        <div class="form-wrapper">
            <div class="new-container">
                <form action="{{ route('companies.update', $company->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-25">
                            <label for="firm">Firma</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="Firma" value="{{ $company->Firma }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="adr">Adresse</label>
                        </div>
                        <div class="col-75">
                            <textarea name="Adresse" required>{{ $company->Adresse }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="webseite">Webseite</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="webseite" value="{{ $company->Webseite }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="Telefon">Telefon</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="Telefon" value="{{ $company->Telefon }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="email">E-Mail</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="email" value="{{ $company->email }}" required>
                        </div>
                    </div>
                    <button class="ripbut" type="submit">Aktualisieren</button>
                </form>
            </div>
        </div>
@endsection
