@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Edit Role</h1>
                <form action="{{ route('roles.update',$role->id) }}" method="POST">

                    @csrf

                    @method('PUT')


                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{ $role->name }}" class="form-control"  placeholder="Role Name" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{ route('roles.index') }}" role="button" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
