@extends('admin.layouts.admin_layout')
@section('title','Clients')
@section('content_header','Our Clients')
@section('content')
<div class="row">
    <div class="col-md-12 card">
        <div class="card-body">
            @if (Session::has('product_added'))
                <div class="alert alert-success">
                    {{ Session::get('product_added') }}
                </div>
            @endif
            <form class="form row" method="POST" action="{{route('admin.clients')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-3">
                    <label class="col-form-label" for="">Clients Name</label>
                    <input type="text" class="form-control" value="{{old('logo')}}" name="name" placeholder="ABC Group Ltd.">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label class="col-form-label" for="">Website URL</label>
                    <input type="text" class="form-control" name="url" placeholder="https://www.website.com">
                    @error('url')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label for="image">Clients Logo</label>
                    <input type="file" id="image" cols="30" rows="5" value="{{old('image')}}" placeholder="Clients Logo" name="image" class="form-control input-file" >
                    @error('logo')
                        <strong class="text-danger">{{ $errors->first('image') }}</strong>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <button type="submit" href="" class="btn  btn-success mt-4">Save</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card col-md-12 mt-3">
        <div class="card-body">
            <table class="table table-hover" id="client_table">
                <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Clients Name</th>
                        <th>Logo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>ABC Group</td>
                        <td><img src="" alt="logo"></td>
                        <td>
                            <a class="text-info mr-3" href=""><i class="fa fa-edit"></i></a>
                            <a class="text-danger" href=""><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
    
@endsection

@push('script')
    <script>
        $(document).ready( function () {
        $('#client_table').DataTable();
    } );
    </script>
@endpush