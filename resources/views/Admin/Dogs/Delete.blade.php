@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete</h1>
                <form action="/admin/dogs/delete" method= "POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="dogid" id="dogid" value="{{ $dog->_id }}">
                <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name" value="{{ $dog->name }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="sex">Sex</label>
                        <input class="form-control" type="text" name="sex" id="sex" value="{{ $dog->sex }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="breed">Breed</label>
                        <input class="form-control" type="text" name="breed" id="breed" value="{{ $dog->breed }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="color">Color</label>
                        <input class="form-control" type="text" name="color" id="color" value="{{ $dog->color }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="size">Size</label>
                        <input class="form-control" type="number" name="size" id="size" value="{{ $dog->size }}" disabled>
                    </div>
                    <a href="/admin/dogs/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection