@extends('template')

@section('content')
<h1>Create Book</h1>
<hr/>
{!! Form::open(['url' => 'books']) !!}
    <!-- include is used for render partial view errors/form_error.blade.php and books/form.blade.php -->
    @include('errors.form_error')
    @include('books.form', ['submitTextButton' => 'Add book'])
  
 {!! Form::close() !!}

@stop