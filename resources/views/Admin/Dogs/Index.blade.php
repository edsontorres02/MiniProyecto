@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Dogs</h1>
                <a class="text-right" href="/admin/dogs/create">Create New</a>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">sex</th>
                        <th scope="col">breed</th>
                        <th scope="col">color</th>
                        <th scope="col">size</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($dogs as $dog)
                    <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $dog->name }}</td>
                        <td>{{ $dog->sex }}</td>
                        <td>{{ $dog->breed }}</td>
                        <td>{{ $dog->color }}</td>
                        <td>{{ $dog->size }}</td>
                        <td>
                            <a href="/admin/dogs/{{ $dog->_id }}">Details</a> |
                            <a href="/admin/dogs/edit/{{ $dog->_id }}">Edit</a> |
                            <a href="/admin/dogs/delete/{{ $dog->_id }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection