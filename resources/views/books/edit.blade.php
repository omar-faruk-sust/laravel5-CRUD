@extends('template')

@section('content')
<h1>Edit Book</h1>
<hr/>
<!--{!! Form::open(['method' => 'PATCH', 'url' => 'books/' . $book->id]) !!}-->
{!! Form::model($book, ['method' => 'PATCH', 'action' => ['BookController@update', $book->id] ]) !!}

    @include('errors.form_error')
    @include('books.form', ['submitTextButton' => 'Edit book'])
    
{!! Form::close() !!}

@stop