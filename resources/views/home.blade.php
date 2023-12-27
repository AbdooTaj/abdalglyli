@extends('layouts.app')

@section('content')
    <style>
        /* Custom CSS for the navbar */
        .navbar {
            direction: rtl;
            background-color: #ffffff;
            height: 70px;
            padding: 10px;
        }

        .navbar-brand {
            font-family: "Arial", sans-serif;
            font-size: 24px;
            font-weight: bold;
            color: #000000;
        }

        .navbar-nav .nav-link {
            font-family: "Arial", sans-serif;
            font-size: 16px;
            color: #000000;
            margin-left: 20px;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">الصفحة الرئيسية</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">جديدنا <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">تخفيضات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ملابس نسائية</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">الأطفال</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">منحنى</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">أزياء رجالية</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">أحذية نسائية</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ملابس داخلية ونوم</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">منزل ومطبخ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">مجوهرات وإكسسوارات نسائية</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">الجمال والصحة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">الأطفال والأمومة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">الرياضة والهواء الطلق</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">حقائب وأمتعة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">المنزل والخياطة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">الإلكترونيات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">الألعاب والألعاب</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">أدوات وتحسين المنزل</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">مستلزمات المكتب والمدرسة</a>
                </li>
                <li class="nav-item">