
@extends('layouts.base')

@section('content')

<main>
    <div class="container">
        <div class="movies">
            @foreach ($movies as $movie)
                <div class="card">
                    <img src="{{$movie->poster}}" alt="{{$movie->title}}">
                    <ul class="info">
                        <li class="title">
                           {{$movie->title}} ({{$movie->anno}})
                        </li>
                        <li class="genere">
                          <span>Generi:</span> {{$movie->genere}}
                        </li>
                        <li class="regista">
                            <span>Regista:</span> {{$movie->regista}}
                        </li>
                        <li class="durata">
                            <span>Durata:</span> {{$movie->durata}}min
                        </li>
                        <li class="trama">
                            <span>Descrizione:</span> {{$movie->trama}}
                        </li>
                    </ul>
                    <div class="pop-corn"><span>🍿</span>{{$movie->vote}}</div>
                </div>
            @endforeach
        </div>
    </div>
</main>
    
@endsection