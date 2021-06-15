@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Edit Author</h1>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{route('author.update',$author)}}">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Enter Author name" name="author_name" value="{{old('author_name',$author->name)}}">
                        </div>
                        <div class="form-group">
                            <label>Surame</label>
                            <input type="text" class="form-control" placeholder="Enter Author surname" name="author_surname" value="{{old('author_surname',$author->surname)}}">
                        </div>
                        @csrf
                        <button type="submit" class="btn btn-primary btn-sm">EDIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
