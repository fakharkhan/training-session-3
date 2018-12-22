@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Create Role</h1>
                <form method="POST" action="{{ route('roles.insert') }}">
                    @csrf


                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control"  placeholder="Role Name" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{ route('roles.index') }}" role="button" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
