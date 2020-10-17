@extends('layout/main')

@section('title','Project Laravel Book')

@section('container')
  <div class="container">
      <div class="row">
          <div class="col-8">
              <h1 class="mt-3">Hello, Book!</h1>

              <a href="/book/create" class="btn btn-primary my-3">Tambah Buku</a>

            <ul class="list-group">
                @foreach($book as $buku)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$buku->title}}
                    <a href="/book/{{$buku->id}}" class="badge badge-info">detail</a>
                </li>
                @endforeach
            </ul>
          </div>
      </div>
  </div>
@endsection