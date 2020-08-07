@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Details</h1>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><b>{{ $dog->name}}</b></h4>
                        <p class="card-text"><b>Size:  </b> {{ $dog->size }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Sex: </b> {{ $dog->sex }}</li>
                        <li class="list-group-item"><b>Breed: </b> {{ $dog->breed }}</li>
                        <li class="list-group-item"><b>Color: </b> {{ $dog->color }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="/admin/dogs/" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Back</a>
                        <a href="/admin/dogs/edit/{{ $dog->_id }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Edit</a>
                        <a href="/admin/dogs/delete/{{ $dog->_id }}" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
