{{--
-- ========================================================
-- default.blade.php
--
--  DESCRIPTION
--  This is the blade form for default layouts
--
--  TECHNICAL DOCUMENTATION
--  @document
--  
--  HISTORY
--
-- 2022-01-5 Uday - Created
-- ========================================================
--}}

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">
        {{-- @include('layouts.head') --}}
        @yield('head')
        <title>Laravel CRUD</title>
    </head>
    <body>
        <div class="content-container">
            <div id="main" class="row">
                @if ("" != $headLine)
                    <h1 style="padding-top: 2px; padding-bottom: 2px;">{{$headLine}}</h1>
                    <hr/>
                @endif
                @yield('content')
            </div>
        </div>
    </body>
</html>
<footer>
    @include('layouts.common_js')
    @yield('footer')
</footer>