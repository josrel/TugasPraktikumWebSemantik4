@extends('layout/main')

@section('title','Project Laravel Detail Category')

@section('container')
  <div class="container">
      <div class="row">
          <div class="col-8">
              <h1 class="mt-3">Hello,Detail Category!</h1>
              <div class="card">
                <div class="card-body">
                    <h5 class="card-title">ID : {{$category->id}}</h5>
                    <p class="card-text">Name : {{$category->name}}</p>
                    <a href="{{$category->id}}/edit" class="btn btn-primary">Edit</a>
                    <form action="{{$category->id}}" method="post" class="d-inline">
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