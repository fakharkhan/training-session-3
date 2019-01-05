@extends('layouts.app')

@section('content')

    <div class="container">
        <h1> {{ $title }}</h1>
        <form action="{{ route('students.store') }}" method="post">
            @csrf()

            @text('name'=>'name')
            @text('name'=>'email')
            @text('name'=>'phone')

            <button type="submit">
                Save
            </button>
        </form>
    </div>
@endsection