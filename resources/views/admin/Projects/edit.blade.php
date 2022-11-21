@extends('admin.layouts.admin_layout')
@section('content')



    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add New Project</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{ route('admin.projects.edit',$project->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body row">
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Project Title</label>
                    <input type="text" value="{{ $project->title }}"
                        class="form-control @error('title')
                        is-invalid
                    @enderror"
                        name="title" placeholder="Enter title">


                    @error('title')
                        <span class="text-red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-6">
                    <label for="inputFile">Project Thumbnail</label>
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
                <div class="form-group col-6">
                    <label for="exampleInputPassword1">Project Description</label>
                    <textarea type="text" class="form-control @error('description')
                        is-invalid
                    @enderror" name="description"
                        placeholder="Enter Project Details">{{ $project->description }}</textarea>
                    @error('description')
                        <span class="text-red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-6">
                    <label for="exampleInputPassword1">Project Status</label>
                    <select class="form-control @error('status')
                        is-invalid
                    @enderror" name="status" id="">
                        @foreach ($project_status as $status)
                            @if ($status == $project->status)
                                <option value="{{ $status }}" selected>{{ $status }}</option>
                            @else
                            <option value="{{ $status }}">{{ $status }}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('status')
                        <span class="text-red">{{ $message }}</span>
                    @enderror
                </div>
            </div>


    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
    </form>
    </div>




@endsection


@push('script')

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#test").click(function() {
            let title = $('input[type=text][name=title]').val();



            // ajax
            $.ajax({
                type: "POST",
                url: "{{ route('admin.projects.save') }}",
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(res) {
                    swal("Success", "Data saved successfully.", "success");
                },
                error: function(err) {
                    let errorMsg = '';
                    Object.entries(err.responseJSON.errors).forEach(([key, value]) => errorMsg += "\n" +
                        value);


                    swal("Error", '' + errorMsg, "error");

                }
            });
        });
    </script>


@endpush
