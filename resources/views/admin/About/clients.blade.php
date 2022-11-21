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
                    <input type="text" class="form-control" value="{{old('name')}}" name="name" placeholder="ABC Group Ltd.">
                    @error('name')
                        <span class="text-danger">{{ $errors->first('url') }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label class="col-form-label" for="">Website / FB Page URL</label>
                    <input type="text" class="form-control" name="url" placeholder="https://www.website.com">
                    @error('url')
                        <span class="text-danger">{{ $errors->first('url') }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label for="image">Clients Logo</label>
                    <input type="file" id="image" cols="30" rows="5" value="{{old('logo')}}" placeholder="Clients Logo" name="logo" class="form-control input-file" >
                    @error('logo')
                        <strong class="text-danger">{{ $errors->first('logo') }}</strong>
                    @enderror
                </div>
                <div class="form-group col-md-2">
                    <label for="isActive">Status</label>
                    <select class="form-control" name="isActive">
                        <option value="1">Active</option>
                        <option value="0">In-active</option>
                    </select>
                    @error('logo')
                        <strong class="text-danger">{{ $errors->first('logo') }}</strong>
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
            <table class="table table-hover" id="client_table">
                <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Clients Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $client->name}}</td>
                        <td>{{ $client->isActive ? "Active" : "In-Active" }}</td>
                        <td>
                            <a  onclick="deleteClient({{ $client->id }})">
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
            $('#client_table').DataTable();
        });

        function deleteClient(id) {
            let url = "{{ route('admin.clients') }}"+"/delete/";
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
