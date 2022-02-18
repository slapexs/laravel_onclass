@extends('layouts.argon')
@section('content')

<div class="form-group">
    <label for="usr">Name:</label>
    <input type="text" class="form-control" id="usr" value="{{$name}}">
    <label for="sur">SureName:</label>
    <input type="text" class="form-control" id="sur" value="{{$surname}}">
</div>

@endsection