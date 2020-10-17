@extends('layout.main')

@section('title', 'Form Tambah Buku')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Tambah Data Buku</h1>

            <form method="post" action="/book">
                @csrf
                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="text" class="form-control" id="isbn" placeholder="Masukan nomor ISBN" name="isbn">
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Masukan title" name="title">
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" placeholder="Masukan author" name="author">
                </div>
                <div class="form-group">
                    <label for="publisher">Publisher</label>
                    <input type="text" class="form-control" id="publisher" placeholder="Masukan publisher" name="publisher">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" placeholder="Masukan description" name="description">
                </div>
                <div class="form-group">
                    <label for="category_id">Category Id</label>
                    <input type="text" class="form-control" id="category_id" placeholder="Masukan category id" name="category_id">
                </div>
                <div class="form-group">
                    <label for="cover">Cover</label>
                    <input type="text" class="form-control" id="cover" placeholder="Masukan cover" name="cover">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection