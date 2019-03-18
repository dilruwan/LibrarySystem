@extends('layouts.default')

@section('content')
    <div class="page-title">
        Book List
        <a class="btn btn-primary pull-right" href="/books/add">Add Book</a>
    </div><br/>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection