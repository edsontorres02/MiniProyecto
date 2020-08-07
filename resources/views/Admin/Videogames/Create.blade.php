@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create</h1>
                <form action="/admin/videogames/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="game">game</label>
                        <input class="form-control" type="text" game="game" id="game">
                    </div>
                    <div class="form-group">
                        <label for="platform">platform</label>
                        <input class="form-control" type="text" game="platform" id="platform">
                    </div>
                    <div class="form-group">
                        <label for="developer">developer</label>
                        <input class="form-control" type="text" game="developer" id="developer">
                    </div>
                    <div class="form-group">
                        <label for="genre">genre</label>
                        <input class="form-control" type="text" game="genre" id="genre">
                    </div>
                    <div class="form-group">
                        <label for="release_date">release_date</label>
                        <input class="form-control" type="text" game="release_date" id="release_date">
                    </div>
                    <div class="form-group">
                        <label for="metascore">metascore</label>
                        <input class="form-control" type="text" game="metascore" id="metascore">
                    </div>
                    <a href="/admin/videogames/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create</>
                    </form>
            </div>
        </div>
    </div>
@endsection