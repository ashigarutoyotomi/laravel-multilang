<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('main.comp_name')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <link href="https://vjs.zencdn.net/7.15.4/video-js.css" rel="stylesheet" />
    <!-- Video.js base CSS -->
    <link href="https://unpkg.com/video.js@7/dist/video-js.min.css" rel="stylesheet" />

    <!-- City -->
    <link href="https://unpkg.com/@videojs/themes@1/dist/city/index.css" rel="stylesheet" />
    <style>
        video {
            width: 100%;
        }
    </style>
</head>

<body>
    <ul class="nav">
        <h1>@lang('main.comp_name')</h1>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">{{__('main.home')}}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about">@lang('main.about')</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contacts">@lang('main.contacts')</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin" tabindex="-1" aria-disabled="true">@lang('main.admin_panel')</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/photos" tabindex="-1" aria-disabled="true">photos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/videos" tabindex="-1" aria-disabled="true">videos</a>
        </li>
        <li class="nav-item">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    @lang('main.lang')
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="/setlang/en">English</a></li>
                    <li><a class="dropdown-item" href="/setlang/kg">Кыргызча</a></li>
                    <li><a class="dropdown-item" href="/setlang/ru">русский</a></li>
                </ul>
            </div>
        </li>
    </ul>
