@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create</h1>
                <form action="/admin/dogs/create" method="POST">
                @csrf
                <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="sex">Sex</label>
                        <input class="form-control" type="text" name="sex" id="sex">
                    </div>
                    <div class="form-group">
                        <label for="breed">Breed</label>
                        <input class="form-control" type="text" name="breed" id="breed">
                    </div>
                    <div class="form-group">
                        <label for="color">Color</label>
                        <input class="form-control" type="text" name="color" id="color">
                    </div>
                    <div class="form-group">
                        <label for="size">Size</label>
                        <input type="number" name="size" id="size" class="form-control">
                    </div>
                    <a href="/admin/dogs/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create</>
                    </form>
            </div>
        </div>
    </div>
@endsection