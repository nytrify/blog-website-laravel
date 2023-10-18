@extends("layouts/main")

@section("container")

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="mb-5">
                <article>
                    <h2>{{ $post->title }}</h2>
                    Author: 
                    <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
                    <br>
                    <p>Category: 
                    <a href='/blog?category={{ $post->category->slug }}' class="text-decoration-none">{{ $post->category->name }}</a>
                    </p>
                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid" alt="...">
                    <article class="my-3">
                        {!! $post->body !!}
                    </article>
                </article>
            </div>
            <a href="/blog">Back To Blog Page</a>
        </div>
    </div>
</div>


@endsection

{{-- DI BAWAH INI MASS ASSIGNMENT BUAT KE DATABASE, TAPI HARUS ASSIGN VARIABLE KE $FILLABLE/$GUARDED DI MODEL DULU --}}

{{-- Post::create([
    'title' => 'Judul Ketiga',
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur et molestias commodi in nam, facilis voluptatem quibusdam',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur et molestias commodi in nam, facilis voluptatem quibusdam magni consequatur perferendis id non dolore tenetur illum cupiditate ratione? Blanditiis ullam obcaecati numquam error nesciunt dolorum et mollitia modi laborum vel delectus alias eius, vitae asperiores, laboriosam sint nihil beatae reiciendis ratione neque ea minus, exercitationem ipsam? </p> <p>quae veniam nulla eius provident sit odio distinctio, porro in laudantium. Aperiam maiores culpa vel nihil voluptate aspernatur exercitationem veniam libero, odio sapiente ab obcaecati ipsam quibusdam nobis odit accusamus provident sequi atque nulla, eos doloremque nesciunt, repellendus eaque? Et nam corporis tenetur. Dolore.</p>'
]) --}}