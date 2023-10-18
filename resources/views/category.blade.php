@extends('layouts/main')

@section('container')
<h1 class="row justify-content-center mb-3">{{ $title }} Page</h1>

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/blog" method="get">
      @if (request("category"))
        <input type="hidden" name="category" value="{{ request("category") }}">
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search.." name="searchPost" value="{{ request("searchPost") }}">
        <button class="btn btn-primary" type="submit" >Search</button>
      </div>
    </form>
  </div>
</div>

@if ($posts->count())
<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h3 class="card-title">
        <a class="text-decoration-none" href="/blog/{{ $posts[0]->slug}}">{{ $posts[0]->title }}</a>
      </h3>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <p>
        Author: 
        <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a>
        <br>
        Category: 
        <a href='/blog?category={{ $posts[0]->category->slug }}' class="text-decoration-none">{{ $posts[0]->category->name }}</a>
    </p>
    <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none">Read More</a>
      <p class="card-text"><small class="text-body-secondary">{{ $posts[0]->created_at->toDateString() }}</small></p>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
              <div class="position-absolute px-3 py-2 posts-category-title-tag">
                <a class="text-white text-decoration-none" href="/blog?category={{ $post->category->slug }}">
                  {{ $post->category->name }}
                </a>
              </div>
                <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3 class="card-title">
                    <a class="text-decoration-none" href="/blog/{{ $post->slug}}">{{ $post->title }}</a>
                  </h3>
                  <small class="text-muted">
                    Author: 
                    <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
                    <br>
                    Category: 
                    <a href='/blog?category={{ $post->category->slug }}' class="text-decoration-none">{{ $post->category->name }}</a>
                    <p class="card-text"><small class="text-body-secondary">{{ $post->created_at->toDateString() }}</small></p>
                  </small>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/blog/{{ $post->slug }}" class="text-decoration-none">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@else
<p class="text-center fs-4">No posts found.</p>
@endif

<div class="d-flex justify-content-center">
  {{ $posts->links() }}
</div>


@endsection