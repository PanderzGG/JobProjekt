@extends('layout.shared')

@section('title', 'Kategorien-Bearbeiten')

@section('content')
    <div>
        <h1 class="all">Kategorie Bearbeiten</h1>
        <div class="form-wrapper">
            <div class="new-container">
                <form action="{{ route('categories.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-25">
                            <label for="name">Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="Name" value="{{ $category->Name }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="adr">Beschreibung</label>
                        </div>
                        <div class="col-75">
                            <textarea name="Beschreibung" required>{{ $category->Beschreibung }}</textarea>
                        </div>
                    </div>
                    <button class="ripbut" type="submit">Aktualisieren</button>
                </form>
            </div>
        </div>
@endsection
