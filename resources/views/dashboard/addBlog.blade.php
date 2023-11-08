@extends('layoutsDashboard.master')

@section('title', 'addBlog')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                {{-- <div class="row mb-2 px-3">
                    <h4 class="page-title mr-auto p-2"> مقال جديد من هنا</h4>
                    <a href="{{ route('blog.index') }}"><button class="btn btn-primary btn-lg">جميع المقالات</button></a>
                </div> --}}
                <div class="row">
                    <div class="col-md-12 mb-4">

                        <div class="card">
                            <div class="card-header py-0">
                                {{-- <div class="card-title">املأ النموذج</div> --}}
                                <div class="row px-3">
                                    <h4 class="page-title mr-auto p-2 mt-3">املأ النموذج لمقال جديد من هنا </h4>
                                    <a href="{{ route('blog.index') }}"><button class="btn btn-primary btn-lg">جميع
                                            المقالات</button></a>
                                </div>
                            </div>
                            <form action="{{ route('blog.store') }}" enctype="multipart/form-data" method="POST"
                                class="formBlog">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group has-success">
                                        <label for="successInput">العنوان</label>
                                        <input type="text" id="successInput" value="" class="form-control"
                                            name="title" placeholder="العنوان" required>
                                    </div>
                                    <main class="page">
                                        <h4>ارفع الصورة</h4>
                                        <!-- input file -->
                                        <div class="box">
                                            <input type="file" id="file-input" accept="image/*">
                                        </div>
                                        <!-- leftbox -->
                                        <div class="box-2">
                                            <div class="result"></div>
                                        </div>
                                        <!--rightbox-->
                                        <div class="box-2 img-result hide">
                                            <!-- result of crop -->
                                            <img id="myImage" class="cropped" src="" alt="">
                                        </div>
                                        <!-- input file -->
                                        <div class="box">
                                            <div class="options hide">
                                                <input type="number" class="img-w" value="300" min="100"
                                                    max="1200" />
                                            </div>
                                            <!-- save btn -->
                                            <div id="oldImage" style="display: none;"></div>
                                            <button class="btn save hide">تأكيد الصورة</button>
                                            <input type="hidden" name="image_data" id="image_data" />
                                        </div>
                                    </main>
                                    <div class="form-group">
                                        <label for="comment">محتوى المقال</label>
                                        <textarea name="blog" class="form-control" id="comment" rows="5" required></textarea>
                                    </div>
                                </div>
                                <div class="card-action text-center">
                                    <button type="submit" class="btn btn-success hide" id="uploadButton">ارفع
                                        المقال</button>
                                    <a href="{{ route('blog.index') }}" class="btn btn-info">رجوع</a>
                                </div>
                            </form>
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
