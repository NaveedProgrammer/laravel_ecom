@extends('layout.admin.layout')
@section('adminContent')
    <div class="w-100 bg-white">
        <div class="card container-fluid bg-white">
            <div class="card-header bg-white">
                <h4>Permission</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $permission->id }}</td>
                            <td>{{ $permission->title }}</td>
                            <td class="d-flex">
                                <a href="{{ route('permission.show', $permission->id) }}"
                                    class="btn btn-info btn-flat btn-sm">View</a> &nbsp;
                                <a href="{{ route('permission.edit', $permission->id) }}"
                                    class="btn btn-primary btn-flat btn-sm">Edit</a> &nbsp;
                                <form action="{{ route('permission.destroy', $permission->id) }}"
                                    onclick="return confirm('Are You Sure ..?')" method="post">
                                    @csrf
                                    <button class="btn btn-danger btn-sm btn-flat">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <a href="{{ route('permission.index') }}" class="btn btn-lg btn-primary">Back</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
