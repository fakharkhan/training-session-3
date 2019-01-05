@extends('layouts.app')

@section('content')



    <div class="container">
        <h1> {{ $title }}</h1>

        @include('_error_alerts')

        <form action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
            @csrf()

            @text('name'=>'name')
            @text('name'=>'email')
            @text('name'=>'phone')

            <input type="file" name="photo" />

            <button type="submit">
                Save
            </button>
        </form>
    </div>
@endsection