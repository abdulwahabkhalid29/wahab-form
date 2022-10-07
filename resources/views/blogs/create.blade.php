@extends('layouts.scaffold')
@section('content')
<style>
    body{
        background-color:lightgrey;
    }
</style>
    <div style="margin-left: 18%;" class="container mt-3">
        <a href="{{ route('blogs.index') }}" class="btn btn-info  float-right"><b>VIEW ALL</b></a>
        <form class="mt-5" action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data" novalidate>
            @csrf
                    <div class="mt-5 card">
                <div class="card-header">
                    <h2 class="text-center"><b>CREATE BLOG</b> </h2>
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-12 mt-3">
                            <label for="category_id">category</label>
                            <select name="category_id" class="form-control">
                                <option value="">Please Select</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" {{ old("category_id") == $category->id ? "selected" : "" }} >{{$category->name}}</option>
                                @endforeach
                            </select>
                            <small class="text-danger">@error ('category_id') {{ $message }} @enderror</small>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" value="{{old('title')}}">
                            <small class="text-danger">@error ('title') {{ $message }} @enderror</small>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="image">Thumbnail</label>
                            <input type="file" class="form-control" name="image" value="{{old('image')}}">
                            <small class="text-danger">@error ('image') {{ $message }} @enderror</small>
                        </div>

                          
                        <div class="col-md-12 mt-3">
                            <label for="short_description">short_description</label>
                            <textarea name="short_description" cols="30" rows="7" onKeyPress class="form-control">{{old('short_description')}}</textarea>
                            <small class="text-danger">@error ('short_description') {{ $message }} @enderror</small>                            
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="long_description">long_description</label>
                            <textarea name="long_description" id="long_description" cols="30" rows="7" onKeyPress class="form-control">{{old('long_description')}}</textarea>
                            <small class="text-danger">@error ('long_description') {{ $message }} @enderror</small>                            
                        </div>
                       
                    </div>
                    <button class="btn btn-primary mt-3 btn-block" type="submit"><b>SUBMIT</b></button>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('scripts')
<script src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.1/tinymce.min.js"></script>
<script>
    tinymce.init({ selector:'#long_description' });
</script>
@endpush