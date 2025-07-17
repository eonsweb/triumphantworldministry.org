@extends("layout.app")

@section("page-title","Who We Are")
@section("page-subtitle","Building authentic relationships centered on Christ: Discover our mission, our values, and our story")

@section('content')
    @include("layout.header")
    @include("about.menifesto")
    @include("about.tenets")
@endsection
