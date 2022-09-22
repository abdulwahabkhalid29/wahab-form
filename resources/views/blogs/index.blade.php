@extends('layouts.scaffold')
@section('content')
<style>
    body{
        background:lightgray;
    }
</style>
<div style="margin-left: 18%; " class="container mt-5">
<h1 class="text-danger"><b> BLOGS </b></h1>
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('blogs.create')}}"><button class="btn btn-info float-right mb-5">Add More Data</button></a>
        </div>
        @if(Session::has('success'))
        <div class="col-md-12">
            <div class="alert alert-primary">{{Session::get('success')}}</div>
        </div>
        @endif
    </div>
    <table class="table table-bordered table-hover bg-light">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
            <tr>
                <td>{{($blog->id)}}</td>
                <td>{{($blog->name)}}</td>
                <td>
                    @if($blog->status == 1)
                    <span class="bg-success p-2">Active</span>
                    @else
                    <span class="bg-danger p-2">Deactive</span>
                    @endif
                </td>
                <td>
                    <a href="{{route('blogs.edit',$blog->id)}}"><img src="{{asset('assets/img/b_edit.png')}}" alt="b_edit"> Edit</a>
                    &nbsp;|&nbsp;
                    <a href="{{route('blogs.delete',$blog->id)}}"><img src="{{asset('assets/img/b_drop.png')}}" alt="b_drop"> Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection                     