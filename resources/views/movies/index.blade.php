@extends('layouts.main')

@section('title', '| List')

@section('content')
    <section id="movies">
        <div class="container">
            <ul class="list-unstyled">
                @forelse ($movies as $movie)
                    <li>@include('movies.card')</li>
                @empty
                    <li><h2 class="text-center">Nessun film trovato</h2></li>
                @endforelse
            </ul>
        </div>
    </section>
@endsection