@extends('admin.layouts.admin_layout')
@section('content')




    <div class="card">
        <div class="card-header">
            <div class="card-title d-flex justify-content-between w-100 align-content-center">
                <h2 class="">All Projects</h2>
                <a type="button" href="{{ route('admin.projects.add') }}" class="btn btn-primary text-white ">Add New
                    Project</a>
            </div>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                <div class="row">
                    <div class="col-sm-12">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Project Name</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Galary</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $project->title }}</td>
                                        <td>{{ $project->description }}</td>
                                        <td><a class="btn btn-sm btn-info" href="{{ route('admin.galary',[$project->id]) }}">Galary</a></td>
                                        <td>
                                            @if ($project->status == 'Completed')
                                                <span class="badge badge-success">{{ $project->status }}</span>
                                            @endif
                                            @if ($project->status == 'Running')
                                                <span class="badge badge-warning">{{ $project->status }}</span>
                                            @endif
                                            @if ($project->status == 'Proposed')
                                                <span class="badge badge-primary">{{ $project->status }}</span>
                                            @endif
                                            @if ($project->status == 'Disabled')
                                                <span class="badge badge-danger">{{ $project->status }}</span>
                                            @endif

                                        </td>
                                        <td>
                                            <a href="{{ route('admin.projects.edit', $project->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a  onclick="deleteProject({{ $project->id }})">
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
        </div>
        <!-- /.card-body -->
    </div>

@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });

        function deleteProject(id) {
            let url = "{{ route('admin.projects') }}"+"/delete/";
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
