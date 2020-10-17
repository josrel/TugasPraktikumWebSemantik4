@extends('layout/main')

@section('title','Project Laravel Category')

@section('container')
  <div class="container">
      <div class="row">
          <div class="col-8">
              <h1 class="mt-3">Hello, Category!</h1>

              <a href="/category/create" class="btn btn-primary my-3">Tambah Category</a>

            <ul class="list-group">
                @foreach($categories as $cat)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$cat->name}}
                    <a href="/category/{{$cat->id}}" class="badge badge-info">detail</a>
                </li>
                @endforeach
            </ul>
          </div>
      </div>
  </div>
@endsection