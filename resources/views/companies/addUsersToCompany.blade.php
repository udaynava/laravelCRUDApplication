{{--
-- ========================================================
-- addUserstoCompany.blade.php
--
--  DESCRIPTION
--  This is the blade form for linking users to company
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
    $headLine = "Add Users to \"" . $company['title'] . "\"";
@endphp

@extends('layouts.default')

@section('head')
@stop

@section('content')
    <div class="container">
        <div class="form-area">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('companies/usersToComp/' . $company['comp_id']) }}">
                {{ csrf_field() }}
                <br style="clear:both">
                @include('companies.usersToCompanyForm', ['submitButton' => 'Add'])
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

{{-- <script src="{{url('js/companies/addUser.js')}}"></script> --}}