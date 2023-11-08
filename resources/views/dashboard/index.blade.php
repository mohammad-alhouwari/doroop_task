@extends('layoutsDashboard.master')

@section('title', 'dashboard')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                {{-- <div class="row mb-2 px-3">
                    <h4 class="page-title mr-auto p-2">المقالات</h4>

                    <a href="{{ route('blog.create') }}"><button class="btn btn-primary btn-lg">أضف مقال</button></a>
                </div> --}}
                <div class="row">


                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <div class="card-header row ">
                                <div class="col-md-6">
                                    <h4 class="card-title mr-auto ">جدول المقالات</h4>
                                    <p class="card-category mr-auto ">معلومات المقالات</p>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ route('blog.create') }}"><button
                                            class="btn btn-primary btn-lg ml-auto mr-1 d-block">أضف
                                            مقال</button></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="myTable" class=" table table-head-bg-primary table-striped  table-hover">
                                    <thead>
                                        <tr>
                                            <th>الصورة</th>
                                            <th>العنوان</th>
                                            <th>المقال</th>
                                            <th>الإجراءات</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($blogs as $blog)
                                            <tr>
                                                <td style="width: 120px;"><img src="{{ url($blog->image) }}" alt="img"
                                                        width="120px"></td>
                                                <td style="width: 15%;">{{ $blog->title }}</td>
                                               <td>{{ Illuminate\Support\Str::limit($blog->textContent, 170) }}</td>
                                                <td style="width: 20%;">
                                                    <a href="{{ route('blog.show', $blog->id) }}"
                                                        class="btn btn-success">عرض</a>
                                                    <a href="{{ route('blog.edit', $blog->id) }}"
                                                        class="btn btn-primary">تعديل</a>
                                                    <form action="{{ route('blog.destroy', $blog->id) }}" method="POST"
                                                        style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('هل أنت متأكد؟')">حذف</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    <tfoot>
                                        <th>الصورة</th>
                                        <th>العنوان</th>
                                        <th>المقال</th>
                                        <th>التفاعل</th>
                                    </tfoot>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'تمت العملية بنجاح',
                    text: `{{ session('success') }}`,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'حسناً'
                });
            </script>
        @endif
        @if (session('error'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'حدث خطأ',
                    text: `{{ session('error') }}`,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'حسناً'
                });
            </script>
        @endif
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @endsection
