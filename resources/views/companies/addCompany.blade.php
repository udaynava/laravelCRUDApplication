{{--
-- ========================================================
-- addUser.blade.php
--
--  DESCRIPTION
--  This is the blade form for adding new company
--
--  TECHNICAL DOCUMENTATION
--  @document
--  
--  HISTORY
--
-- 2022-01-06 Uday - Created
-- ========================================================
--}}

@php
    $headLine = "Add New Company";
@endphp

@extends('layouts.default')

@section('head')
@stop

@section('content')
    <div class="container">
        <div class="form-area">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('companies/add') }}">
                {{ csrf_field() }}
                <br style="clear:both">
                @include('companies.companyForm', ['submitButton' => 'Add'])
            </form>
        </div>
        @if ($errors->any())
            <div class="w-4/8 m-auto text-center">
                @foreach ($errors->all() as $error)
                    <li class="text-red-500 list-none">
                        {{ $error }}
                    </li>
                @endforeach
            </div>
        @endif
    </div>
@stop