@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Edit Book</h1>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{route('book.update',[$book])}}">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" placeholder="Enter Book title" class="form-control" name="book_title" value="{{old('book_title',$book->title)}}">
                        </div>
                        <div class="form-group">
                            <label>ISBN</label>
                            <input type="text" placeholder="Enter Book ISBN" class="form-control" name="book_isbn" value="{{old('book_isbn',$book->isbn)}}">
                        </div>
                        <div class="form-group">
                            <label>Pages</label>
                            <input type="text" placeholder="Enter Book pages number" class="form-control" name="book_pages" value="{{old('book_pages',$book->pages)}}">
                        </div>
                        <div class="form-group">
                            <label>Description</label><br>
                            <textarea name="book_short_description" id="editor" placeholder="Enter short description of the Book">{{old('book_short_description',$book->short_description)}}</textarea>
                        </div>
                        <div class="form-group">
                        <label>Book Author</label><br>
                            <select name="author_id">
                            <option value="0">Select Author</option>
                                @foreach ($authors as $author)
                                <option value="{{$author->id}}" @if($author->id == old('author_id', $book->author_id)) selected @endif>
                                    {{$author->name}} {{$author->surname}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        @csrf
                        <button type="submit" class="btn btn-primary btn-sm">SAVE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    tinymce.init({
        selector: '#editor'
    });
</script>
@endsection
