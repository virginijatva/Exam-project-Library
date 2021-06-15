@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Add a New Author</h1>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{route('author.store')}}">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" placeholder="Enter Author name" class="form-control" name="author_name" value="{{old('author_name')}}">
                        </div>
                        <div class="form-group">
                            <label>Surname</label>
                            <input type="text" placeholder="Enter Author surname" class="form-control" name="author_surname" value="{{old('author_surname')}}">
                        </div>
                        @csrf
                        <button type="submit" class="btn btn-primary btn-sm">ADD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
