@extends('layouts.master')

@section('title', 'Home Page')

@section('content')
    <!-- Main -->
    <div id="main">

        <!-- Post -->
        <section class="post">
            <header class="major">
                <span class="date">{{ $blog->created_at }}</span>
                <h1>{{ $blog->title }}</h1>
            </header>
            <div class="image main"><img src="{{ url($blog->image) }}" alt="" /></div>
            <p>{{ $blog->textContent }}</p>
        </section>

    </div>
@endsection
