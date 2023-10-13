
@extends('layouts.app')

@section('page-name', 'Homepage')

@section('main-content')
<section>
    <div class="container my-5 text-center">
        <h1 class="mb-5">Laravel Models Controller</h1>
       <div class="row g-4">
        @foreach($movies as $movie)
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                  <h3 class="custom card-title border-bottom mb-3 pb-3">{{$movie->title}}</h3>
                  <h5 class="card-title"><span class="fw-bold me-1 text-danger">Original title:</span> {{$movie->original_title}}</h5>
                  <p class="card-text fw-bold">{{$movie->nationality}}</p>
                  <p class="card-text"><span class="fw-bold me-1 text-danger"> Date:</span> {{$movie->date}}</p>
                  <p class="card-text"><span class="fw-bold me-1 text-danger"> Vote:</span>{{$movie->vote}}</p>
                </div>
            </div>
        </div>
        @endforeach
       </div>
    </div>
</section>
@endsection

