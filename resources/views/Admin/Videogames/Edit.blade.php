@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit</h1>
                <form action="/admin/videogames/edit" method= "POST">
                @csrf
                <input type="hidden" name="videogameid" id="videogameid" value="{{ $videogame->_id }}">
                <div class="form-group">
                        <label for="game">game</label>
                        <input class="form-control" type="text" name="game" id="game" value="{{ $videogame->game }}">
                    </div>
                    <div class="form-group">
                        <label for="platform">platform</label>
                        <input class="form-control" type="text" name="platform" id="platform" value="{{ $videogame->platform }}">
                    </div>
                    <div class="form-group">
                        <label for="developer">developer</label>
                        <input class="form-control" type="text" name="developer" id="developer" value="{{ $videogame->developer }}">
                    </div>
                    <div class="form-group">
                        <label for="genre">genre</label>
                        <input class="form-control" type="text" name="genre" id="genre" value="{{ $videogame->genre }}">
                    </div>
                    <div class="form-group">
                        <label for="release_date">release_date</label>
                        <input class="form-control" type="text" name="release_date" id="release_date" value="{{ $videogame->release_date }}">
                    </div>
                    <div class="form-group">
                        <label for="metascore">metascore</label>
                        <input class="form-control" type="text" name="metascore" id="metascore" value="{{ $videogame->metascore }}">
                    </div>
                <a href="/admin/videogames/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection