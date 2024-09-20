@extends('layout.shared')

@section('title', 'Unternehmen')

@section('content')

<h1 class="all">Alle Unternehmen</h1>
<div class="table-wrapper">
    <table class="restable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Firma</th>
                <th>Adresse</th>
                <th>Webseite</th>
                <th>Telefon</th>
                <th>E-Mail</th>
                <th>Aktionen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->id }}</td>
                    <td>{{ $company->Firma }}</td>
                    <td>{{ $company->Adresse }}</td>
                    <td>{{ $company->Webseite }}</td>
                    <td>{{ $company->Telefon}}</td>
                    <td>{{ $company->Email}}</td>
                    <td class="actions">
                        <form action="{{ route('companies.show', $company->id) }}" method="GET" style="display:inline;">
                            @csrf
                            <button class="ripbut" type="submit">Anzeigen</button>
                        </form>
                        <form action="{{ route('companies.edit', $company->id) }}" method="GET" style="display:inline;">
                            @csrf
                            <button class="ripbut" type="submit">Bearbeiten</button>
                        </form>
                        <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bist du sicher, dass du diesen Job löschen möchtest?');">
                            @csrf
                            @method('DELETE')
                            <button class="ripbut" type="submit">Löschen</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Paginierungslinks -->
<div>
    {{ $companies->links() }}
</div>

@endsection
