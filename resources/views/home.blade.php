@extends('layouts.app')

@section('title', 'Library')

@section('content')

    <div class="container py-5">
        <div class="row ">
            @foreach($movies as $movie)
            <div class="col-3 p-3">
                <div class="card h-100">
                    <img src="https://picsum.photos/200/300" class="card-img-top" alt="{{$movie->title}}, poster">
                    <ul class="card-body list-unstyled">
                        <li>
                            <h4 class="card-title">Titolo del film: {{ $movie->title }} </h4>
                        </li>
                        <li>
                            <h5>Titolo originale: {{ $movie->original_title }} </h5>
                        </li>
                        <li>
                            <h6>Lingua originale: {{ $movie->nationality }} </h6>
                        </li>
                        <li>
                            <h6>Data di uscita: {{ $movie->date }} </h6>
                        </li>
                        <li>
                            <h6>Voto: {{ $movie->vote }} </h6>
                        </li>
                    </ul>
                </div>
            </div>
    

            @endforeach
        </div>

    </div>

@endsection