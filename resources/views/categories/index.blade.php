@extends('layout.shared')

@section('title', 'Kategorien')

@section('content')
<h1 class="all">Alle Kategorien</h1>
<div class="table-wrapper">
    <table class="restable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Beschreibung</th>
                <th>Aktionen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->Name }}</td>
                    <td>{{ $category->Beschreibung}}</td>
                    <td class="actions">
                        <form action="{{ route('categories.show', $category->id) }}" method="GET" style="display:inline;">
                            @csrf
                            <button class="ripbut" type="submit">Anzeigen</button>
                        </form>
                        <form action="{{ route('categories.edit', $category->id) }}" method="GET" style="display:inline;">
                            @csrf
                            <button class="ripbut" type="submit">Bearbeiten</button>
                        </form>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bist du sicher, dass du diesen Job löschen möchtest?');">
                            @csrf
                            <button class="ripbut" type="submit">Löschen</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Paginierungslinks -->
    <div class="pagi">
        {{ $categories->links() }}
    </div>
</div>
@endsection
