<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link rel="stylesheet" href="{{ asset('dashboard/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{ asset('dashboard/css/ready.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/demo.css') }}">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    {{-- <link rel="stylesheet" href="{{ asset('dashboard/css/cropper.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.css'>

</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <div class="logo-header">
                <a href="{{ route('blog.index') }}" class="logo">
                    المقال الأصيل
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
            </div>
            <nav class="navbar navbar-header navbar-expand-lg">
                <div class="container-fluid">

                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
                                aria-expanded="false"> <img src="{{ url('dashboard/img/profile.jpg') }}" alt="user-img"
                                    width="36" class="img-circle"><span>
                                    {{ Auth::user()->name }}
                                </span></span> </a>

                            <ul class="dropdown-menu dropdown-user">
                                {{-- <div class="font-medium text-base text-gray-800 dropdown-item text-center">
                                    <x-responsive-nav-link :href="route('admen')" :active="request()->routeIs('admen')">
                                        {{ __('معلومات الحساب') }}
                                    </x-responsive-nav-link>
                                </div> --}}
                                {{-- <div class="font-medium text-base text-gray-800 dropdown-item text-center">
                                    {{ Auth::user()->name }}</div> --}}
                                <div class="font-medium text-sm text-gray-500 dropdown-item text-center">
                                    {{ Auth::user()->email }}</div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-responsive-nav-link :href="route('logout')" class="dropdown-item text-center"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        {{ __('تسجيل الخروج') }}
                                    </x-responsive-nav-link>
                                </form>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                    </ul>
                    {{-- <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
                        <div class="pt-2 pb-3 space-y-1">
                            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                {{ __('Dashboard') }}
                            </x-responsive-nav-link>
                        </div>
                    </div> --}}
                </div>
            </nav>
        </div>

        <div class="sidebar">
            <div class="scrollbar-inner sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="{{ url('dashboard/img/profile.jpg') }}">
                    </div>
                    <div class="info">
                        <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                            <span>
                                {{ Auth::user()->name }}
                                <span class="user-level">المشرف</span>
                            </span>
                        </a>
                        <div class="clearfix"></div>


                    </div>
                </div>

                <ul class="nav">
                    <li class="nav-item  {{ Route::is('blog.index') ? 'active' : '' }}">
                        <a href="{{ route('blog.index') }}">
                            <i class="la la-clipboard"></i>
                            <p>جميع المقالات</p>
                            <span class="badge badge-count">{{ $blogCount }}</span>
                        </a>
                    </li>

                    <li class="nav-item  {{ Route::is('blog.create') ? 'active' : '' }}">
                        <a href="{{ route('blog.create') }}">
                            <i class="la la-edit"></i>
                            <p>أضف مقال</p>
                        </a>
                    </li>
                    <li class="nav-item  {{ Route::is('contact.index') ? 'active' : '' }}">
                        <a href="{{ route('contact.index') }}">
                            <i class="la la-envelope-o"></i>
                            <p>جميع الإستفسارات</p>
                            <span class="badge badge-count">{{ $messageCount }}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
