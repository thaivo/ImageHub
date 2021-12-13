@extends('images.layout')

@section('content')
{{--    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addImageModal">Add image</button>--}}
<a class="btn btn-primary" href="{{route('images.create')}}">Add an image</a>
    @foreach($images as $image)
    <img src="{{asset('storage/'.$image->image)}}">
    @endforeach

@endsection
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script>

</script>
