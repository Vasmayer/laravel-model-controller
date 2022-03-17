@extends('layouts.main')
@section('content')
    <h1 class="text-center">MOVIES</h1>
    <div class="container d-flex flex-wrap">
      @foreach ($movies as $movie)
      <div class="card w-25 m-3 text-center">
        <div class="card-body">
          @include('includes.card')
          <a href="{{route('movie',['id' => $movie->id ])}}" class="card-link">Dettaglio</a>
        </div>
      </div>
      @endforeach
    </div>
 @endsection