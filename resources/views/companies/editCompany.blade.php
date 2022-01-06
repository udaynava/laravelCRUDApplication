{{--
-- ========================================================
-- editCompany.blade.php
--
--  DESCRIPTION
--  This is the blade form for editing a company
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
    $headLine = "Edit Company";
@endphp

@extends('layouts.default')

@section('head')
@stop

@section('content')
    <div class="container">
        <p class="lead text-center">Edit Company</p>
        <div class="form-area">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('companies/' . $company->comp_id) }}">
                {{ csrf_field() }}
                <br style="clear:both">
                @include('companies.companyForm', ['submitButton' => 'Save'])
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