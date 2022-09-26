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
                                <h4>Create Catagory</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form class="row" action="{{ route('addCategory') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Enter value...">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control" placeholder="Upload your image">
                                        </div>

                                        <button type="submit" class="btn btn-info ml-3">Add Category</button>
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

 