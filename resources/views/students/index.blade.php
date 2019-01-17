@extends('layouts.app')

@section('content')
    <div class="container">
        <h1> {{ $title }}</h1>
        @can('create',\App\Student::class)
            <a href="{{ route('students.create')}}">Create Student</a>
        @endcan

        @include('students.partials.table',['students'=>$students])
    </div>
@endsection