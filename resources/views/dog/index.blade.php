@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Your Dogs</h1><hr>
                <a href="{{Route('dog.create')}}" class="btn btn-secondary">Add New</a>
            </div>
            <table cladd="table table-triped">
                <thead>
                    <tr>
                        <td><h3>Owner</h3></td>
                        <td><h3>Dog</h3></td>
                        <td><h3>Dog 2</h3></td>
                        <td><h3>Description</h3></td>
                        <td colspan="2"><h3>Actions</h3></td>
                    </tr>
                </thead>

                @foreach($dogs as $dog)
                <tr>
                    <td>{{$dog->owner}}</td>
                    <td>{{$dog->dog}}</td>
                    <td>{{$dog->dog2}}</td>
                    <td>{{$dog->description}}</td>
                    <td>
                        <a style="color:white" href="{{Route('dog.edit',$dog->id)}}" class="btn btn-info" role="button">Modify</a></td>
                    <td>
                        <form action="{{route('dog.destroy', $dog->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input
                                type="submit"
                                value="Delete"
                                class="btn btn-danger"
                            >
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
