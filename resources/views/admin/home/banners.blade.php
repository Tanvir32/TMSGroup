@extends('admin.layouts.admin_layout')
@section('title','Companies')
@section('content_header','Hero Banners')
@section('content')
<div class="row">
    <div class="col-md-12 card">
        <div class="card-body">
            @if (Session::has('product_added'))
                <div class="alert alert-success">
                    {{ Session::get('product_added') }}
                </div>
            @endif
            <form class="form row" method="POST" action="{{route('admin.banner.create')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-3">
                    <label class="col-form-label" for="">Company Name</label>
                    <input type="text" class="form-control" value="{{old('name')}}" name="name" placeholder="Promo Banner">
                    @error('name')
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @enderror
                </div>

                <div class="form-group col-md-3">
                    <label for="image">Banner Image  <i class="text-danger">953x248</i></label>
                    <input type="file" id="image" cols="30" rows="5" value="{{old('banner')}}" placeholder="Clients Logo" name="banner" class="form-control input-file" >
                    @error('banner')
                        <strong class="text-danger">{{ $errors->first('banner') }}</strong>
                    @enderror
                </div>
                <div class="form-group col-md-2">
                    <label for="isActive">Status</label>
                    <select class="form-control" name="isActive">
                        <option value="1">Active</option>
                        <option value="0">In-active</option>
                    </select>
                    @error('isActive')
                        <strong class="text-danger">{{ $errors->first('isActive') }}</strong>
                    @enderror
                </div>
                <div class="form-group col-md-1">
                    <button type="submit" href="" class="btn  btn-success mt-4">Save</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card col-md-12 mt-3">
        <div class="card-body">
            <table class="table table-hover" id="banner_table">
                <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Banner Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($banners as $banner)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $banner->name}}</td>
                        <td>{{ $banner->isActive ? "Active" : "In-Active" }}</td>
                        <td>
                            <a  onclick="deleteCompany({{ $banner->id }})">
                                <i class="fas fa-trash-alt text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#banner_table').DataTable();
        });

        function deleteCompany(id) {
            let url = "{{ route('admin.banner.create') }}"+"/delete/";
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location.href=(url+id);
                    } else {
                        swal("Everything is safe!");
                    }
                });
        }
    </script>
@endpush
