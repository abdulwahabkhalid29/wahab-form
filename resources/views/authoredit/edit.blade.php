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
            <form action="{{route('authoredit.update')}}"  method="POST" >
                @csrf
                <div class="row">
                <div class="col-md-12 mt-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="">
                </div>
                <div class="col-md-12 mt-3">
                    <label for="authorimg">Thumbnail</label>
                    <input type="file" name="image" class="form-control" value="">
                </div>
                <div class="col-md-12 mt-3">
                    <label for="about">About</label>
                    <textarea name="about" cols="20" rows="4" onKeyPress class="form-control"></textarea>
                </div>
                <div class="col-md-12 mt-3">
                    <label for="facebook">Facebook</label>
                    <input type="text" name="facebook" class="form-control" value="">
                </div>
                <div class="col-md-12 mt-3">
                    <label for="google">Google</label>
                    <input type="text" name="google" class="form-control" value="">
                </div>
                <div class="col-md-12 mt-3">
                    <label for="twitter" >Twitter</label>
                    <input type="text" name="twitter"  class="form-control" value="">
                </div>
                <div class="col-md-12 mt-3">
                    <label for="linkin">Linkin</label>
                    <input type="text" name="linkin" class="form-control" value="">
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