@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete</h1>
                <form action="/admin/videogames/delete" method= "POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="videogameid" id="videogameid" value="{{ $videogame->_id }}">
                <div class="form-group">
                        <label for="game">game</label>
                        <input class="form-control" type="text" name="game" id="game" value="{{ $videogame->game }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="platform">platform</label>
                        <input class="form-control" type="int" name="platform" id="platform" value="{{ $videogame->platform }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="developer">developer</label>
                        <input class="form-control" type="int" name="developer" id="developer" value="{{ $videogame->developer }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="genre">genre</label>
                        <input class="form-control" type="int" name="genre" id="genre" value="{{ $videogame->genre }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="release_date">release_date</label>
                        <input class="form-control" type="int" name="release_date" id="release_date" value="{{ $videogame->release_date }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="metascore">metascore</label>
                        <input class="form-control" type="int" name="metascore" id="metascore" value="{{ $videogame->metascore }}" disabled>
                    </div>
                    <a href="/admin/videogames/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection