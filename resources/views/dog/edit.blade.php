@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Dogs</h1>
                <hr>
            </div>
            <div class="card-body">
                <form action="{{Route('dog.update',$dog->id)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">Owner</label>
                    <input type="text" name="owner" class="form-control" value="{{$dog->owner}}"/>
                    </div>
                    <div class="form-group">
                        <label for="name">Dog</label>
                        <input type="text" name="dog" class="form-control" value="{{$dog->dog}}"/>
                    </div>
                    <div class="form-group">
                        <label for="name">Dog 2</label>
                        <input type="text" name="dog2" class="form-control" value="{{$dog->dog2}}"/>
                    </div>
                    <div class="form-group">
                        <label for="name">Description</label>
                        <input type="text" name="description" class="form-control" value="{{$dog->description}}"/>
                    </div>
                    <input type="submit" value="Edit" class="btn btn-primary">
                </form>
            </div>
            <div class="card-footer">
                <a href="{{Route('dog.index')}}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
@endsection
