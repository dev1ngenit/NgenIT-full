@extends('backend.master')
@section('content')

      <!-- /# Sidebar -->
   @include('backend.sidebar');
   <!-- /# Header -->
   @include('backend.header');
   
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
               
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Edit Category</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form class="" action="{{ url('update/category/'.$data->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label>Name</label>
                                                <input type="text" name="title" value="{{ $data->title }}"  class="form-control">
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <img src="{{ asset('storage/Category/'.$data->image) }}" width="400px" alt="">
                                                <input type="file" name="image" class="form-control" placeholder="Upload your image">
                                            </div>
                                            <button type="submit" class="btn btn-info ml-3">Update Category</button>
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
