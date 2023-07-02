@extends('layout.admin.layout')
@section('adminContent')
    <div class="w-100 bg-white">
        <div class="card container-fluid bg-white">
            <div class="card-header bg-white">
                <h4>Edit Role</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('role.update',$role->id) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Role Title</label>
                        <input type="text" class="form-control" value="{{$role->title}}" placeholder="role title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="permission_title">Permissions</label>
                        <select id="choices-multiple-remove-button" name="permissions[]" placeholder="Select Permissions" multiple>
                            @foreach ($permissions as $item)
                                <option value="{{ $item->id }}" {{ in_array($item->id, old('permissions', $role->permissions->pluck('id')->toArray())) ? 'selected' : '' }}>
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