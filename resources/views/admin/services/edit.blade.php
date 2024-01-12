@extends('layouts.master_app')
@section('title')
Create Service
@endsection
@push('page_header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create Service</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Create Service</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endpush
@section('content')
<form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Service Info</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Service Title</label>
                        <input type="text" name="title" value="{{ $service->title }}" class="form-control" id="title"
                            placeholder="Enter Service Title">
                    </div>
                    <div class="form-group">
                        <label for="description">Service Description</label>
                        <input type="text" name="description" value="{{ $service->description }}" class="form-control" id="description"
                            placeholder="Enter Service description">
                    </div>

                </div>
                <!-- /.card-body -->

            </div>

        </div>
        <div class="col-md-4">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Upload Avatar</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <div class="card-body">
                    <div class="form-group">
                        <img src="{{ asset('storage/uploads/'.$service->image) }}" width="100%" alt="">
                        <label for="upload_file">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="upload_file">
                                <input type="hidden" name="old_image" value="{{ $service->image }}">
                                <label class="custom-file-label" for="upload_file">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="status" class="form-check-input" id="status" {{
                            $service->status==1?'checked':'' }}
                        >
                        <label class="form-check-label" for="status">Status</label>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-success btn-block">Save</button>
                    <a href="{{ route('admin.services') }}" class="btn btn-danger btn-block">Cancel</a>
                </div>

            </div>
        </div>
    </div>
</form>
@endsection
