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
                <h4>Permissions List</h4>
                &nbsp;&nbsp;
                <a href="{{ route('permission.create') }}" class="btn btn-sm btn-flat btn-secondary">Add Permission</a>
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
                        @if ($permissions->count() > 0)
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($permissions as $kay => $item)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('permission.show', $item) }}"
                                            class="btn btn-info btn-flat btn-sm">View</a> &nbsp;
                                        <a href="{{ route('permission.edit', $item) }}"
                                            class="btn btn-primary btn-flat btn-sm">Edit</a> &nbsp;
                                        <form action="{{ route('permission.destroy', $item) }}"
                                            onclick="return confirm('Are You Sure ..?')" method="post">
                                            @csrf
                                            <button class="btn btn-danger btn-sm btn-flat">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3" class="text-center text-danger">No Permissions Available</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
