@extends('admin.layouts.admin_layout')
@section('content')


    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Project</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('admin.projects.save') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body row">
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Project Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Enter title">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputFile">Project Thumbnail</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="thumbnail" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      
                    </div>
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Project Description</label>
                    <textarea type="text" class="form-control"  name="description" placeholder="Enter Project Details"></textarea>
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Project Status</label>
                    <select class="form-control" name="status" id="">
                      <option value="" disabled selected>Select Project Status</option>
                      <option value="Completed">Completed</option>
                      <option value="Disabled">Disabled</option>
                      <option value="Running">Running</option>
                      <option value="Proposed">Proposed</option>
                    </select>
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

@endsection