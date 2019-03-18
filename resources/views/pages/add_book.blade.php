@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="page-title">
            Adding a book
        </div><br/>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br/>
        @endif
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif
        <form method="post" action="{{url('books')}}">
            {{csrf_field()}}
            <div class="row">
                <div class="form-group col-md-4 col-md-offset-4">
                    <label for="name">Title:</label>
                    <input type="text" class="form-control" name="title">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 col-md-offset-4">
                    <label for="price">Author:</label>
                    <input type="text" class="form-control" name="author">
                </div>
            </div>
            <div class="row">
                 <div class="form-group col-md-4 col-md-offset-4">
                     <button type="submit" class="btn btn-success">Add Book</button>
                 </div>
            </div>
        </form>
    </div>
@endsection