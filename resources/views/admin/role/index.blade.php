@extends('layout.admin.layout')
@section('adminContent')
    <div class="w-100 bg-white">
        <div class="card container-fluid bg-white">
            <div class="card-header bg-white">
                @if (session('success'))
                    <div class="alert alert-info">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <h4>Roles List</h4>
                &nbsp;&nbsp;
                <a href="{{ route('role.create') }}" class="btn btn-sm btn-flat btn-secondary">Add Role</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Permissions</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($roles->count() > 0)
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($roles as $item)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>
                                        @foreach ($item->permissions as $item1)
                                            <span class="badge badge-primary p-1">{{$item1->title}}</span>
                                        @endforeach
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{ route('role.show', $item) }}"
                                            class="btn btn-info btn-flat btn-sm">View</a> &nbsp;
                                        <a href="{{ route('role.edit', $item) }}"
                                            class="btn btn-primary btn-flat btn-sm">Edit</a> &nbsp;
                                        <form action="{{ route('role.destroy', $item) }}"
                                            onclick="return confirm('Are You Sure ..?')" method="post">
                                            @csrf
                                            <button class="btn btn-danger btn-sm btn-flat">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3" class="text-center text-danger">No Roles Available</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
