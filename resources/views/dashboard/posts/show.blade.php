@extends("dashboard.layouts.main")

@section("container")
<div class="container">
    <div class="row my-5">
        <div class="col-lg-8">
            <div class="mb-5">
                <article>
                    <h2>{{ $post->title }}</h2>
                    <a href="/dashboard/posts" class="btn btn-success">Back to my posts</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit post</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method("delete")
                        @csrf
                        <button class="btn btn-danger border-0" onclick="return confirm('Are you sure you want to delete this post?')">
                          Delete
                        </button>
                      </form>
                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid mt-3" alt="...">
                    <article class="my-3">
                        {!! $post->body !!}
                    </article>
                </article>
            </div>
            <a href="/dashboard/posts">Back to dashboard</a>
        </div>
    </div>
</div>

@endsection