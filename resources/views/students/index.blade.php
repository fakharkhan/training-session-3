@extends('layouts.app')

@section('content')
    <div class="container">
        <h1> {{ $title }}</h1>
        @can('create-student')
            <a href="{{ route('students.create')}}">Create Student</a>
        @endcan

        @include('students.partials.table',['users'=>$students])
    </div>
@endsection