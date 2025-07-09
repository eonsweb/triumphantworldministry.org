@extends("layout.app")

@section("page-title","Prayer Request")
@section("page-subtitle","Share your prayer needs with our church community")

@section('content')
    @include("layout.header")
    @include("prayer-request.prayer-request-form")
@endsection
