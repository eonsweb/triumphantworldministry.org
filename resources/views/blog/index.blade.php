@extends("layout.app")

@section("page-title","Blog")
@section("page-subtitle","Discover articles that inform, uplift, and challenge")

@section('content')
    @include("layout.header")
    @include("blog.blog")
@endsection
