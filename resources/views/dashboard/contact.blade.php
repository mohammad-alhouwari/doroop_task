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
                                <div class="col-md-12">
                                    <h4 class="card-title mr-auto ">جدول الإستفسارات</h4>
                                    <p class="card-category mr-auto ">جميع الرسائل</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="myTable" class=" table table-head-bg-primary table-striped  table-hover">
                                    <thead>
                                        <tr>
                                            <th>الإسم</th>
                                            <th>البريد الإلكتروني</th>
                                            <th>الإستفسار</th>
                                            <th>التفاعل</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($Messages as $message)
                                            <tr>
                                                <td style="width: 15%;">{{ $message->name }}</td>
                                                <td style="width: 15%;">{{ $message->email }}</td>
                                                <td>{{ Illuminate\Support\Str::limit($message->message, 170) }}</td>
                                                <td style="width: 10%;">
                                                    <a class="btn btn-primary" href = "mailto:{{ $message->email }}">إبعث
                                                        رد</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    <tfoot>
                                        <th>الإسم</th>
                                        <th>البريد الإلكتروني</th>
                                        <th>الإستفسار</th>
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
