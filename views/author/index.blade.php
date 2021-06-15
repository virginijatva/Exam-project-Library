@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Authors List</h1>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                
                                <th scope="col">@sortablelink('name')</th>
                                <th scope="col">@sortablelink('surname')</th>
                                <th scope="col">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($authors as $author)
                            <tr>
                                <td>{{$author->name}}</td>
                                <td>{{$author->surname}}</td>
                                <td> <a href="{{route('author.edit',[$author])}}" class="btn btn-primary btn-sm" style="margin-bottom: 10px;">Edit</a>
                                    <form method="POST" action="{{route('author.destroy', $author)}}">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete {{$author->name}} {{$author->surname}} from the Authors list?')">DELETE</button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
