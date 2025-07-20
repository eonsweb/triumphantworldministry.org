@extends("layout.app")

@section("page-title","church Leadership")
@section("page-subtitle","Faithful stewards of God's flock: Honoring those who lead us spiritually")

@section('content')
    @include("layout.header")
    @include("about.founders")
    @include("about.other-pastors")
    @include("about.deacon")

@endsection
