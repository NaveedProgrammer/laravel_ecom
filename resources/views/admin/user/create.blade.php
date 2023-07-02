@extends('layout.admin.layout')
@section('adminContent')
    <div class="w-100 bg-white">
        <div class="card container-fluid bg-white">
            <div class="card-header bg-white">
                <h4>Add Roles</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" placeholder="User Name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" placeholder="abc@exapmle.xyz" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="* * * * * *" name="password">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" placeholder="+92 3021120550" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="permission_title">Roles</label>
                        <select id="choices-multiple-remove-button" name="roles[]" placeholder="Select Roles" multiple>
                            @foreach ($roles as $item)
                                    <option value="{{$item->id}}">{{$item->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="bnt btn-flat btn-success btn-lg w-25" value="Save Role">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection