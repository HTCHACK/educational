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
                                <a  href="{{route('teachers.index')}}" class="btn btn-warning">Back</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">

                                    <form method="POST" action="{{ route('teachers.update',$teacher->id) }}" class="form-group"
                                        enctype="multipart/form-data">

                                        @csrf
                                        @method('put')
                                        <div class="form-group">{{ $teacher->fullname }}
                                            <input type="text" class="form-control"  placeholder="Enter file Name"
                                                name="name">
                                        </div>
                                        <div class="form-group">{{ $teacher->profession }}
                                            <input type="text" class="form-control"  placeholder="Enter file Name"
                                                name="profession">
                                        </div>
                                        <div class="form-group">{{ $teacher->facebook }}
                                            <input type="text" class="form-control"  placeholder="Enter file Name"
                                                name="facebook">
                                        </div>
                                        <div class="form-group">{{ $teacher->telegram }}
                                            <input type="text" class="form-control"  placeholder="Enter file Name"
                                                name="telegram">
                                        </div>
                                        <img src="{{ asset('storage/' . $teacher->image) }}" width="100px" height="70px">
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1" style="border: 2px solid #9C27B0;border-radius:3px;padding:0.4rem 1rem">Choose Image</label>
                                            <input id="exampleFormControlFile1" type="file" name="image" class="form-control-file" title="exampleFormControlFile1">
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