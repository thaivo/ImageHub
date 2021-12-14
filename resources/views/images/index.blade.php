@extends('images.layout')

@section('content')
    <main>
        <div>
            <h1>
                Images Store
            </h1>
        </div>
        <a class="btn btn-primary" href="{{route('images.create')}}">Add an image</a>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($images as $image)
                <div class="col">
                    <div class="card">
                        <img src="{{asset('storage/'.$image->image)}}" class="card-img-top">
{{--                        <div class="card-body">--}}
{{--                            <h2>--}}
{{--                                card-title--}}
{{--                            </h2>--}}
{{--                            <p>--}}
{{--                                description--}}
{{--                            </p>--}}
{{--                        </div>--}}
                    </div>
                </div>

            @endforeach
        </div>

    </main>
{{--    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addImageModal">Add image</button>--}}
@endsection


<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script>

</script>
