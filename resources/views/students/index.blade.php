@extends('layouts.master')

@section('title','Students list')

@section('css')
    <style>

    </style>
@endsection


@section('heading')
    <h1>Students List</h1>
@endsection

@section('content')


    @include('students.partials.table',['users'=>$users])

    @include('students.partials.table',['users'=>$students])

@endsection