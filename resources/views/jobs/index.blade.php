@extends('layout.shared')

@section('title', 'Jobs')

@section('content')
    <h1 class="all">Alle Jobs</h1>
    <div class="table-wrapper">
        <table class="restable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titel</th>
                    <th>Beschreibung</th>
                    <th>Gehalt</th>
                    <th>Standort</th>
                    <th>Aktionen</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jobs as $job)
                    <tr>
                        <td>{{ $job->id }}</td>
                        <td>{{ $job->Titel }}</td>
                        <td>{{ $job->Beschreibung }}</td>
                        <td>{{ $job->Gehalt }}</td>
                        <td>{{ $job->Standort}}</td>
                        <td class="actions">
                            <form action="{{ route('jobs.show', $job->id) }}" method="GET" style="display:inline;">
                                @csrf
                                <button class="ripbut" type="submit">Anzeigen</button>
                            </form>
                            <form action="{{ route('jobs.edit', $job->id) }}" method="GET" style="display:inline;">
                                @csrf
                                <button class="ripbut" type="submit">Bearbeiten</button>
                            </form>
                            <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bist du sicher, dass du diesen Job löschen möchtest?');">
                                @csrf
                                @method('DELETE')
                                <button class="ripbut" type="submit">Löschen</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Paginierungslinks -->
        <div class="pagi">
            {{ $jobs->links() }}
        </div>
    </div>


@endsection
