@extends('layoutsDashboard.master')

@section('title', 'addBlog')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">المقال</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header text-center">
                                <h1 class="h1">{{ $blog->title }}</h1>
                            </div>
                            <div class="card-body">
                                <div class="card-header text-center">
                                    <img src="{{ url($blog->image) }}" alt="img" width="70%" />
                                </div>
                                <div class="card-header text-center">
                                    <p>
                                        {{ $blog->textContent }}
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <a href="{{ route('blog.index') }}" class="btn btn-info">رجوع</a>
                                <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-primary">تعديل</a>
                                <form action="{{ route('blog.destroy', $blog->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('هل أنت متأكد؟')">حذف</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
