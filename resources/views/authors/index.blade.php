@extends('layouts.scaffold')
@section('content')
<div style="margin-left: 18%; " class="container mt-5">
<table class="table table-bordered table-hover bg-light">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{($user->id)}}</td>
                <td>{{($user->name)}}</td>
                <td>{{($user->email)}}</td>
                <td>{{($user->role->name)}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection