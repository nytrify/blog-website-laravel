@extends('layouts/main')

@section('container')
<h1 class="row justify-content-center mb-4">{{ $title }} Page</h1>

<div class="container">
    <div class="row">
        @foreach($categories as $category)
        <div class="col-md-4">
            <a href="/blog?category={{ $category->slug }}">
                <div class="card bg-dark text-bg-dark">
                    <img src="https://source.unsplash.com/500x500/?{{ $category->name }}" class="card-img-top" alt="...">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                      <h5 class="card-title text-center flex-fill fs-3 category-page-name-tag p-3">{{ $category->name }}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection