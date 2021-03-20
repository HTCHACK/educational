@extends('admin.layouts.body')
@section('title')
    <title>Administration</title>
@endsection
@section('content')

    <div class="main-panel">
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:;">Table List</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <a  href="{{route('courses.index')}}" class="btn btn-warning">Back</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">

                                    <form method="POST" action="{{ route('courses.update',$course->id) }}" class="form-group"
                                        enctype="multipart/form-data">

                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="Name" value="{{$course->name}}"
                                                name="name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="Author" value="{{$course->author}}"
                                                name="author">
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <textarea class="form-control" name="description"  placeholder="description" cols="80"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <img src="{{ asset('storage/' . $course->image) }}" width="100px" height="70px">
                                            <label for="exampleFormControlFile1" style="border: 2px solid #9C27B0;border-radius:3px;padding:0.4rem 1rem">Choose Image Max Size 2MB</label>
                                            <input id="exampleFormControlFile1" type="file" name="image" class="form-control-file" title="{{$course->image}}">
                                        </div>
                                        <div class="form-group">
                                            <embed src="{{ asset('storage/' . $course->file) }}" width="100px" height="70px" />
                                            <label for="example" style="border: 2px solid #9C27B0;border-radius:3px;padding:0.4rem 1rem">Choose File Max Size 20MB</label>
                                            <input id="example" type="file" name="file" class="form-control-file" title="{{$course->file}}">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection