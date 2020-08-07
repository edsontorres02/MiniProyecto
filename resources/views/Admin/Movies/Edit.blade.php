@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit</h1>
                <form action="/admin/movies/edit" method= "POST">
                @csrf
                <input type="hidden" name="movieid" id="movieid" value="{{ $movie->_id }}">
                <div class="form-group">
                        <label for="Title">Title</label>
                        <input class="form-control" type="text" name="Title" id="Title" value="{{ $movie->Title }}">
                    </div>
                    <div class="form-group">
                        <label for="Year">Year</label>
                        <input class="form-control" type="int" name="Year" id="Year" value="{{ $movie->Year }}">
                    </div>
                    <div class="form-group">
                        <label for="IMDb">IMDb</label>
                        <input class="form-control" type="int" name="IMDb" id="IMDb" value="{{ $movie->IMDb }}">
                    </div>
                    <div class="form-group">
                        <label for="Directors">Directors</label>
                        <input class="form-control" type="int" name="Directors" id="Directors" value="{{ $movie->Directors }}">
                    </div>
                    <div class="form-group">
                        <label for="Runtime">Runtime</label>
                        <input type="number" name="Runtime" id="Runtime" class="form-control" value="{{ $movie->Runtime }}">
                    </div>
                <a href="/admin/movies/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection