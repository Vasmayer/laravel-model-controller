@extends('layouts.main')
@section('content')
    <h1 class="text-center">MOVIE</h1>
    <div class="container d-flex flex-wrap">
      <div class="card w-50 text-center m-auto">
        <div class="card-body">
          @include('includes.card')
        </div>
      </div>
    </div>
@endsection