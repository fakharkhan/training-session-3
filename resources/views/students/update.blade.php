@extends('layouts.app')

@section('content')



    <div class="container">
        <h1> {{ $title }}</h1>

        @include('_error_alerts')

        <form action="{{ route('students.update',$student) }}" method="post" enctype="multipart/form-data">
            @csrf()
            @method('PUT')

            @text('name'=>'name','value'=>$student->name)
            @text('name'=>'email','value'=>$student->email)
            @text('name'=>'phone','value'=>$student->phone)

            <input type="file" name="photo" />

            <button type="submit">
                Save
            </button>
        </form>
    </div>
@endsection