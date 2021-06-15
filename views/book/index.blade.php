@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Books List</h1>
                    <form action="{{route('book.index')}}" method="GET">
                        <fieldset class="form-group border p-3">
                            <legend class="w-auto px-2">Filter by:</legend>
                            <select name="author_id" class="form-select form-select-sm" style="margin-bottom:10px;">
                                <option value="0">Select Author</option>
                                @foreach ($authors as $author)
                                <option value="{{$author->id}}" @if($author_id==$author->id) selected @endif>{{$author->name}} {{$author->surname}}</option>
                                @endforeach
                            </select>

                            <div class="">
                                <button class="btn btn-light  mb-2">Filter</button>
                                <a href="{{route('book.index')}}" class="btn btn-light  mb-2">Reset</a>
                            </div>
                    </form>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">@sortablelink('title')</th>
                                <th scope="col">ISBN</th>
                                <th scope="col">@sortablelink('pages')</th>
                                <th scope="col">Author Name</th>
                                <th scope="col">Author Surname</th>
                                <th scope="col">Description</th>
                                <th scope="col">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($books as $book)
                            <tr>
                                <td>{{$book->title}}</td>
                                <td>{{$book->isbn}}</td>
                                <td>{{$book->pages}}</td>
                                <td>{{$book->bookAuthor->name}}</td>
                                <td>{{$book->bookAuthor->surname}}</td>
                                <td><a href="{{route('book.show',$book)}}" class="btn btn-primary btn-sm" style="margin-bottom: 10px;">Show</a></td>
                                <td> <a href="{{route('book.edit',[$book])}}" class="btn btn-primary btn-sm" style="margin-bottom: 10px;">Edit</a>
                                    <form method="POST" action="{{route('book.destroy', [$book])}}">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete {{$book->title}} from the Books list?')">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                            
                            @empty
                            <li class="list-group-item">
                            <div class="list-bin">
                                <div class="list-title">
                                    There are no books in the Library by this Author.
                                </div>
                            </div>
                        </li>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
