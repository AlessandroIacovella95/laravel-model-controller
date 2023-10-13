
@extends('layouts.app')

@section('page-name', 'Homepage')

@section('main-content')
<section>
    <div class="container mt-5 text-center">
        <h1 class="mb-5">Laravel Models Controller</h1>
       <div class="row g-4">
        @foreach($movies as $movie)
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                  <h3 class="card-title">{{$movie->title}}</h3>
                  <h5 class="card-title">{{$movie->original_title}}</h5>
                  <p class="card-text">{{$movie->nationality}}</p>
                  <p class="card-text">{{$movie->date}}</p>
                  <p class="card-text">{{$movie->vote}}</p>
                </div>
            </div>
        </div>
        @endforeach
       </div>
    </div>
</section>
@endsection

