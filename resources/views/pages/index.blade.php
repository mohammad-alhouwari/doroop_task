@extends('layouts.master')

@section('title', 'Home Page')

@section('content')
    <div id="main">
        {{-- @dd($blogs[0]) --}}
        <!-- Featured Post -->
        @if ($blogs[0])
            <article class="post featured">
                <header class="major">
                    <span class="date">{{ $blogs[0]->created_at }}</span>
                    <h2><a href="#">{{ $blogs[0]->title }}</a></h2>
                    <p>{{ Illuminate\Support\Str::limit($blogs[0]->textContent, 200) }}</p>
                </header>
                <a href="#" class="image main"><img src="{{ url($blogs[0]->image) }}" alt="" /></a>
                <ul class="actions">
                    <li><a href="{{ route('viewBlog', $blogs[0]->id) }}" class="button big">الخبر الكامل</a></li>
                </ul>
            </article>
        @endif
        <!-- Posts -->
        <section class="posts">
            @foreach ($blogs as $blog)
                @if ($blog != $blogs[0])
                    <article>
                        <header>
                            <span class="date">{{ $blog->created_at }}</span>
                            <h2><a href="#">{{ $blog->title }}</h2>
                        </header>
                        <a href="#" class="image fit"><img src="{{ url($blog->image) }}" alt="" /></a>
                        <p>{{ Illuminate\Support\Str::limit($blog->textContent, 150) }}</p>
                        <ul class="actions">
                            <li><a href="{{ route('viewBlog', $blog->id) }}" class="button">الخبر الكامل</a></li>
                        </ul>
                    </article>
                @endif
            @endforeach
        </section>

        <!-- Footer -->
        <footer>
            <div class="pagination">
                {{ $blogs->links('vendor.pagination.custom') }}
            </div>
        </footer>

    </div>

@endsection
