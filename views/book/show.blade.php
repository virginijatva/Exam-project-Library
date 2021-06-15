@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Book: {{$book->title}}</h1></div>
                <div class="card-body">
                    <ul class="list-group ">
                   
                        <li class="list-group-item list-group-item-dark">Title: {{$book->title}} </li>
                        <li class="list-group-item list-group-item-dark">ISBN: {{$book->isbn}}</li>
                        <li class="list-group-item list-group-item-dark">Pages: {{$book->pages}}</li>
                        <li class="list-group-item list-group-item-dark">Author: {{$book->bookAuthor->name}} {{$book->bookAuthor->surname}}</li>
                        <li class="list-group-item list-group-item-dark">Description: {!!$book->short_description!!}</li>
                        
                    
                    </ul>
                    <a href="{{route('book.edit',[$book])}}" class="btn btn-primary mt-4">
                        Edit
                    </a>
                    <a href="{{route('book.pdf',[$book])}}" class="btn btn-primary mt-4">
                        Save as PDF
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection