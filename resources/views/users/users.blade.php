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
-- 2022-01-05 Uday - Created
-- ========================================================
--}}

@php
    $headLine = "User List";
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
        <input type="button" class="btn btn-success" value="Add User" onclick="addUser()">

        <div class="table-responsive">
            <table id="userTable" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user['user_id']}}</td>
                            <td>{{$user['name']}}</td>
                            <td>{{$user['email']}}</td>
                            <td><input type="button" class="btn btn-warning" value="Edit" onclick="editUser({{ $user['user_id'] }})"></td>
                            <td><button type="button" id="deleteButton" data-user_id="{{$user['user_id']}}" class="btn btn-danger">Delete</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('footer')
    <script type="text/javascript" src="{{url('js/users/userTable.js')}}"></script>
@stop
