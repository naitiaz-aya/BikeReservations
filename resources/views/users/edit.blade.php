@extends('layouts.app')

@section('content')

<div class="container">
  <form action="{{ route( 'updateUser', ['id' => $users->id])}}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <h2>Add Question</h2>
    <div class="row">
      <div class="col">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" value="{{ $users->name }}" id="name">
        </div>
      </div>
      
    </div>


    <div class="row">
      <div class="col">
        <div class="form-group">
          <label for="role">Role </label>
          <input type="text" class="form-control" name="role" id="role"></input>
        </div>
      </div>
    </div>
    

    </div>

    <button type="submit" class="btn btn-dark">Submit</button>
  </form>
</div>
@endsection