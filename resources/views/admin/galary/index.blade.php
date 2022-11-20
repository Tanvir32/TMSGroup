@extends('admin.layouts.admin_layout')
@section('content')

@php
    $url = route('admin.galary',$project->id);
@endphp




   <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add New Image</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{ route('admin.galary.add',$project->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body row">
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Image Title</label>
                    <input type="text"
                        class="form-control @error('title')
                        is-invalid
                    @enderror"
                        name="title" placeholder="Enter title">


                    @error('title')
                        <span class="text-red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-6">
                    <label for="inputFile">Galary Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input @error('image')
                        is-invalid
                    @enderror" id="inputFile">
                            <label class="custom-file-label" for="inputFile">Choose file</label>
                        </div>

                    </div>
                    @error('image')
                        <span class="text-red">{{ $message }}</span>
                    @enderror
                </div>
                
                
            </div>

            <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

    </div>
  

    
    </form>
    </div>



    <div class="container-fluid row">

        @foreach ($galaries as $galary )
            <div class="col-3">
            <div class="card ">
                <img class="card-img-top img-fluid" style="height:220px; object-fit:cover;" src="{{ asset("frontend/assets/img/galary")."/".$galary->project_image }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title mb-2">{{ $project->title }}</h5>
                    <form action="{{ $url."/".$galary->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="image_title" class="form-control mb-3" value="{{ $galary->image_title }}">
                    <input type="file" name="project_image" id="" class="form-control mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ $url."/".$galary->id }}" class="btn btn-danger">Delete</a>
                    </form>
                </div>
            </div>
        </div>
        @endforeach

        
        

    </div>

@endsection
