@extends('images.layout')
@section('content')
    <form action="{{route('images.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
