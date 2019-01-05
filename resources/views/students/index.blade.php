@extends('layouts.app')

@section('content')
    <div class="container">
        <h1> {{ $title }}</h1>
        <a href="{{ route('students.create')}}">Create Student</a>

        @include('students.partials.table',['users'=>$students])
    </div>
@endsection