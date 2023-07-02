@extends('layout.admin.layout')
@section('adminContent')
    <div class="w-100 bg-white">
        <div class="card container-fluid bg-white">
            <div class="card-header bg-white">
                <h4>Add Permissions</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('permission.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Permission Title</label>
                        <input type="text" class="form-control" placeholder="permission title" name="title">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="bnt btn-flat btn-success btn-lg w-25" value="Save Permission">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection