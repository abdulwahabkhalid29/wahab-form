@extends('layouts.scaffold')
@section('content')
<style>
    body{
        background-color: lightgray;
    }
    label{
        color:black;
    }
</style>
<div style="margin-left: 18%;" class="container mt-5">
<div class="container mt-5">
    <div class="row">
            @if(Session::has('error'))
            <div class="col-md-12">
                <div class="alert alert-danger">{{Session::get('error')}}</div>
            </div>
            @endif
           
    </div>
    <div class="card">
        <h5 class="card-header text-center  text-dark " > <b>ADD NEW authorupdate</b></h5>
        <div class="card-body ">
        <form action="{{route('profile.update' )}}"  method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                <div class="col-md-12 mt-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{(auth()->user()->name)}}">
                    <small class="text-danger">@error ('name') {{ $message }} @enderror</small>
                </div>
                <div class="col-md-12 mt-3">
                    <label for="thumbnail">Thumbnail</label>
                    <input type="file" name="thumbnail" class="form-control" >
                    @if(!empty(auth()->user()->thumbnail))  
                        <img src="{{asset('upload/thumbnail/'.$user->thumbnail)}}" alt="" width="200px" class="img-thumbnail mt-3">
                    @endif
                    <small class="text-danger">@error ('thumbnail') {{ $message }} @enderror</small>
                </div>
                <div class="col-md-12 mt-3">
                    <label for="about">About</label>
                    <textarea name="about" cols="20" rows="4" onKeyPress class="form-control">{{(auth()->user()->about)}}</textarea>
                    <small class="text-danger">@error ('about') {{ $message }} @enderror</small>
                </div>
                <div class="col-md-12 mt-3">
                    <label for="facebook">Facebook</label>
                    <input type="text" name="facebook" class="form-control" value="{{(auth()->user()->facebook)}}">
                    <small class="text-danger">@error ('facebook') {{ $message }} @enderror</small>
                </div>
                <div class="col-md-12 mt-3">
                    <label for="google">Google</label>
                    <input type="text" name="google" class="form-control" value="{{(auth()->user()->google)}}">
                    <small class="text-danger">@error ('google') {{ $message }} @enderror</small>
                </div>
                <div class="col-md-12 mt-3">
                    <label for="twitter" >Twitter</label>
                    <input type="text" name="twitter"  class="form-control" value="{{(auth()->user()->twitter)}}">
                    <small class="text-danger">@error ('twitter') {{ $message }} @enderror</small>
                </div>
                <div class="col-md-12 mt-3">
                    <label for="linkedin">LinkedIn</label>
                    <input type="text" name="linkedin" class="form-control" value="{{(auth()->user()->linkedin)}}">
                    <small class="text-danger">@error ('linkedin') {{ $message }} @enderror</small>
                </div>
                    <div class="mt-3 col-md-12 mt-3">
                        <button type="submit" class="btn btn-primary btn-block ">ADD NEW</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
</div>
</div>
@endsection