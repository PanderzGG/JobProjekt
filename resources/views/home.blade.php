@extends('layout.shared')

@section('title', 'Willkommen')

@section('content')
    <div class="home-wrapper">
        <div class="search-container">
            <input type="text" placeholder="Jobs, Unternehmen...">
            <input class="ripbut"  type="submit" placeholder="Suchen">
        </div>
        <div class="content-wrapper">
            <div class="grid-item" id="item1">
                <div class="grid-content" id="item{{ $randomId1 }}">
                    @if($job1)
                    <div class="jtitle">
                        <h1>{{ $job1->Titel }}</h1>
                    </div>
                    <div class="jdesc">
                            <p>{{ $job1->Beschreibung }}</p>
                            <p>Gehalt: {{ $job1->Gehalt }}</p>
                            <p>Standort: {{ $job1->Standort }}</p>
                    </div>
                    @else
                        <p>Kein Job mit dieser ID gefunden.</p>
                    @endif
                </div>
            </div>
            <div class="grid-item" id="item2">
                <div class="grid-content" id="item{{ $randomId2 }}">
                    @if($job2)
                            <div class="jtitle">
                                <h1>{{ $job2->Titel }}</h1>
                            </div>
                            <div class="jdesc">
                                <p>{{ $job2->Beschreibung }}</p>
                                <p>Gehalt: {{ $job2->Gehalt }}</p>
                                <p>Standort: {{ $job2->Standort }}</p>
                            </div>
                    @else
                        <p>Kein Job mit dieser ID gefunden.</p>
                    @endif
                </div>
            </div>
            <div class="grid-item" id="item3">
                <div class="grid-content" id="item{{ $randomId3 }}">
                    @if($job3)
                            <div class="jtitle">
                                <h1>{{ $job3->Titel }}</h1>
                            </div>
                            <div class="jdesc">
                                <p>{{ $job3->Beschreibung }}</p>
                                <p>Gehalt: {{ $job3->Gehalt }}</p>
                                <p>Standort: {{ $job3->Standort }}</p>
                            </div>
                    @else
                        <p>Kein Job mit dieser ID gefunden.</p>
                    @endif
                </div>
            </div>
            <div class="grid-item" id="item4">
                <div class="grid-content" id="item{{ $randomId4 }}">
                    @if($job4)
                            <div class="jtitle">
                                <h1>{{ $job4->Titel }}</h1>
                            </div>
                            <div class="jdesc">
                                <p>{{ $job4->Beschreibung }}</p>
                                <p>Gehalt: {{ $job4->Gehalt }}</p>
                                <p>Standort: {{ $job4->Standort }}</p>
                            </div>
                    @else
                        <p>Kein Job mit dieser ID gefunden.</p>
                    @endif
                </div>
            </div>
            <div class="grid-item" id="item5">
                <div class="grid-content" id="item{{ $randomId5 }}">
                    @if($job5)
                            <div class="jtitle">
                                <h1>{{ $job5->Titel }}</h1>
                            </div>
                            <div class="jdesc">
                                <p>{{ $job5->Beschreibung }}</p>
                                <p>Gehalt: {{ $job5->Gehalt }}</p>
                                <p>Standort: {{ $job5->Standort }}</p>
                            </div>
                    @else
                        <p>Kein Job mit dieser ID gefunden.</p>
                    @endif
                </div>
            </div>
            <div class="grid-item" id="item6">
                <div class="grid-content" id="item{{ $randomId6 }}">
                    @if($job6)
                            <div class="jtitle">
                                <h1>{{ $job6->Titel }}</h1>
                            </div>
                            <div class="jdesc">
                                <p>{{ $job6->Beschreibung }}</p>
                                <span><p>Gehalt: {{ $job6->Gehalt }}</p></span>
                                <span><p>Standort: {{ $job6->Standort }}</p></span>
                            </div>
                    @else
                        <p>Kein Job mit dieser ID gefunden.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
