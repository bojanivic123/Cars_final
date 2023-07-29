@extends("layout.default")

@section("content")
    <img src={{ $car->image }}>
    <p>{{ $car->producer }} {{ $car->title }}</p>
@endsection

