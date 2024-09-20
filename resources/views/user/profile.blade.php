@extends('layout.shared')

@section('title', 'Profil')

@section('content')
<div class="form-wrapper">
    <h1 class="ublu">Job Anlegen</h1>
    <div class="new-container">
        <form action="{{ route('jobs.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-25">
                    <label for="bbez">Berufsbezeichnung</label>
                </div>
                <div class="col-75">
                    <input type="text" name="Titel" placeholder="Berufsbezeichnung">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="bbesch">Berufsbeschreibung</label>
                </div>
                <div class="col-75">
                    <textarea name="Beschreibung" placeholder="Berufsbeschreibung"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="gehalt">Gehalt</label>
                </div>
                <div class="col-75">
                    <textarea name="Gehalt" placeholder="Gehalt"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="standort">Standort</label>
                </div>
                <div class="col-75">
                    <textarea name="Standort" placeholder="Standort"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="cat">Kategorie</label>
                </div>
                <div class="col-75">
                    <input type="number" name='category_id' placeholder="Kategorie_ID">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="comp">Unternehmen</label>
                </div>
                <div class="col-75">
                    <input type="number" name='company_id' placeholder='Company_ID'>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="usid">User</label>
                </div>
                <div class="col-75">
                    <input type="number" name='user_id' placeholder='User_ID'>
                </div>
            </div>
            <button class="ripbut" type="submit">Job Hinzufügen</button>
        </form>
    </div>
</div>
    <div class="form-wrapper">
        <h1 class="ublu">Kategorie Anlegen</h1>
        <div class="new-container">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-25">
                        <label for="cnm">Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="cbesch">Beschreibung</label>
                    </div>
                    <div class="col-75">
                        <textarea name="description"></textarea>
                    </div>
                </div>
                <button class="ripbut" type="submit">Kategorie erstellen</button>
            </form>
        </div>
    </div>
    <div class="form-wrapper">
        <h1 class="ublu">Unternehmen Anlegen</h1>
        <div class="new-container">
            <form action="{{ route('company.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-25">
                        <label for="firm">Firma</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="Firma" placeholder="Firma" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="adr">Adresse</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="Adresse" placeholder="Adresse" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="web">Webseite</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="Webseite" placeholder="Webseite" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="tel">Telefon</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="Telefon" placeholder="Telefon" required>
                    </div>
                </div>
                <button class="ripbut" type="submit">Unternehmen Hinzufügen</button>
            </form>
        </div>
    </div>
    <div class="form-wrapper">
        <h1 class="ublu">Benutzer Anlegen</h1>
        <div class="new-container">

            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-25">
                        <label for="unam">Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="name" placeholder="Name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="em">E-amil</label>
                    </div>
                    <div class="col-75">
                            <input type="text" name="email" placeholder="E-mail" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="pw">Passwort</label>
                    </div>
                    <div class="col-75">
                        <input type="password" name="password" placeholder="Passwort" required>
                    </div>
                </div>
                <button class="ripbut" type="submit">User Hinzufügen</button>
            </form>
        </div>
</div>
@endsection
