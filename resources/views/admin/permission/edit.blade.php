@extends('layout.admin.layout')
@section('adminContent')
    <div class="w-100 bg-white">
        <div class="card container-fluid bg-white">
            <div class="card-header bg-white">
                <h4>Edit Permission</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('permission.update',$permission->id) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Permission Title</label>
                        <input type="text" class="form-control" value="{{$permission->title}}" placeholder="permission title" name="title">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="bnt btn-flat btn-success btn-lg w-25" value="Update Permission">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection