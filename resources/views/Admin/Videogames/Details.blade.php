@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Details</h1>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><b>{{ $videogame->game}}</b></h4>
                        <p class="card-text"><b>platform: </b> {{ $videogame->platform }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>developer: </b> {{ $videogame->developer }}</li>
                        <li class="list-group-item"><b>genre: </b> {{ $videogame->genre }}</li>
                        <li class="list-group-item"><b>release_date: </b> {{ $videogame->release_date }}</li>
                        <li class="list-group-item"><b>metascore: </b> {{ $videogame->metascore }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="/admin/videogames/" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Back</a>
                        <a href="/admin/videogames/edit/{{ $videogame->_id }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Edit</a>
                        <a href="/admin/videogames/delete/{{ $videogame->_id }}" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
