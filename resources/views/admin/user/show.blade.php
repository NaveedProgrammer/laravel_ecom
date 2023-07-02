@extends('layout.admin.layout')
@section('adminContent')
    <div class="w-100 bg-white">
        <div class="card container-fluid bg-white">
            <div class="card-header bg-white">
                <h4>Role</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Roles</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>
                                @foreach ($user->roles as $user1)
                                    <span class="badge badge-primary p-1">{{$user1->title}}</span>
                                @endforeach
                            </td>
                            <td class="d-flex">
                                <a href="{{ route('user.show', $user) }}"
                                    class="btn btn-info btn-flat btn-sm">View</a> &nbsp;
                                <a href="{{ route('user.edit', $user) }}"
                                    class="btn btn-primary btn-flat btn-sm">Edit</a> &nbsp;
                                <form action="{{ route('user.destroy', $user) }}"
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
