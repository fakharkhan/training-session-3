@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{ $roles->count() }} Roles</h1>
                <a href="{{ route('roles.create') }}" role="button" class="btn btn-info">Add Role</a>
                <div class="p-lg-2"></div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10%;">Id</th>
                        <th style="width: 70%;">Name</th>
                        <th style="width: 10%;">Edit</th>
                        <th style="width: 10%;">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                @can('update',$role)
                                <a href="{{ route('roles.edit',$role->id) }}" role="button" class="btn btn-info">Edit</a>
                                @endcan
                            </td>
                            <td>
                                <form method="POST" action="{{ route('roles.delete',$role->id) }}" role="form">
                                    @csrf

                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
