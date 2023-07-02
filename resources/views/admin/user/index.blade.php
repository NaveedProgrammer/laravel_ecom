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
                <h4>Users List</h4>
                &nbsp;&nbsp;
                <a href="{{ route('user.create') }}" class="btn btn-sm btn-flat btn-secondary">Add User</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Roles</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($users->count() > 0)
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($users as $item)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>
                                        @foreach ($item->roles as $item1)
                                            <span class="badge badge-primary p-1">{{$item1->title}}</span>
                                        @endforeach
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{ route('user.show', $item) }}"
                                            class="btn btn-info btn-flat btn-sm">View</a> &nbsp;
                                        <a href="{{ route('user.edit', $item) }}"
                                            class="btn btn-primary btn-flat btn-sm">Edit</a> &nbsp;
                                        <form action="{{ route('user.destroy', $item) }}"
                                            onclick="return confirm('Are You Sure ..?')" method="post">
                                            @csrf
                                            <button class="btn btn-danger btn-sm btn-flat">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3" class="text-center text-danger">No User Available</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
