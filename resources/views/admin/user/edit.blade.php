@extends('layout.admin.layout')
@section('adminContent')
    <div class="w-100 bg-white">
        <div class="card container-fluid bg-white">
            <div class="card-header bg-white">
                <h4>Edit User</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('user.update',$user->id) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" value="{{$user->name}}" placeholder="User Name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" value="{{$user->email}}" placeholder="abc@exapmle.xyz" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" value="{{$user->password}}" placeholder="* * * * * *" name="password">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" value="{{$user->phone}}" placeholder="+92 3021120550" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="permission_title">Roles</label>
                        <select id="choices-multiple-remove-button" name="roles[]" value="{{$user->name}}" placeholder="Select Roles" multiple>
                            @foreach ($roles as $item)
                                <option value="{{ $item->id }}" {{ in_array($item->id, old('roles', $user->roles->pluck('id')->toArray())) ? 'selected' : '' }}>
                                    {{ $item->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="bnt btn-flat btn-success btn-lg w-25" value="Update Role">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection