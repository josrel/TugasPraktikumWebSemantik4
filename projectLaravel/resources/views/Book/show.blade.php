@extends('layout/main')

@section('title','Project Laravel Detail Book')

@section('container')
  <div class="container">
      <div class="row">
          <div class="col-8">
              <h1 class="mt-3">Hello,Detail Book!</h1>

              <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Title : {{$book->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Author : {{$book->author}}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Publisher : {{$book->publisher}}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Category ID : {{$book->category_id}}</h6>
                    <p class="card-text">Description : {{$book->description}}</p>
                    <p class="card-text">Cover : {{$book->cover}}</p>
                    <a href="{{$book->id}}/edit" class="btn btn-primary">Edit</a>
                    <form action="{{$book->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
                </div>
          </div>
      </div>
  </div>
@endsection