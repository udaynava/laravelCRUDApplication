{{--
-- ========================================================
-- users.blade.php
--
--  DESCRIPTION
--  This is the blade form for listing users info
--
--  TECHNICAL DOCUMENTATION
--  @document
--  
--  HISTORY
--
-- 2022-01-5 Uday - Created
-- ========================================================
--}}

@php
    $headLine = "Companies List";
@endphp

@extends('layouts.default')

@section('head')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
@stop

@section('content')
    <div class="container-fluid">
        <input type="button" class="btn btn-success" value="Add Company" onclick="addCompany()">

        <div class="table-responsive">
            <table id="companyTable" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Company ID</th>
                        <th>Title</th>
                        <th>Add Users</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                        <tr>
                            <td class="toUser" >{{$company['comp_id']}}</td>
                            <td class="toUser" >{{$company['title']}}</td>
                            <td><input type="button" class="btn btn-primary" value="Add Users" onclick="addUsersToComp({{ $company['comp_id'] }})"></td>
                            <td><input type="button" class="btn btn-warning" value="Edit" onclick="editCompany({{ $company['comp_id'] }})"></td>
                            <td><button type="button" id="deleteButton" data-comp_id="{{$company['comp_id']}}" class="btn btn-danger">Delete</button></td>
                            {{-- <td><button data-user_id="{{$user['user_id']}}" style="font-weight:normal;color:black">Delete</button></td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('footer')
    <script type="text/javascript" src="{{url('js/companies/companyTable.js')}}"></script>
@stop