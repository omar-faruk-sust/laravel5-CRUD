@extends('template')
<div class="col-md-1"></div>
<div class="col-md-8">
<h1>Welcome to my bookshop</h1>
<p><a href="{{ url('/books/create') }}">Create new</a></p>
@section('content')
    @if ($booksList->count())
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>ISBN</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Language</th>
                    <th colspan="3" align="center">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php $i=0; ?>
                @foreach ($booksList as $book)
                    <?php $i++; ?>
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $book->isbn }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td>@if ($book->language==1){{'English'}} @else{{'Spanish'}}
                        @endif</td>
                    <td><a class="btn btn-primary" href="{{ url('/books', $book->id)}}">Read</a></td>
                    <!--<td><a class="btn btn-primary" href="{{ action('BookController@show', [$book->id])}}">Read</a></td>-->
                    <!--<td><a class="btn btn-primary" href="/books/{{$book->id}}">Read</a></td>-->
                    <td><a class="btn btn-warning" href="{{ url('/books/'.$book->id.'/edit')}}">Update</a></td>
                    <td><a class="btn btn-danger" href="{{ action('BookController@destroy', $book->id) }}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <center>
        {!!$booksList->render()!!}
     </center>
    @else
        There are no book in the book list
    @endif
</div>
<div class="col-md-2"></div>
@stop