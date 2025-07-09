@extends("../layout/app")

@section('content')
        <!-- Header -->
        @include("home.home-header")


        <!-- Prayer request Bar -->
        @include("home.prayer-request")

        <!-- Welcome Section -->
        @include("home.welcome")

        <!-- Upcoming Events -->
        @include("home.upcoming-events")

        <!-- cta book Section -->
        @include("home.book-cta")

        <!-- Weekly Activies Section-->
        @include("home.weekly-activities")

        <!-- Ministries Section -->
        @include("home.ministries")
@endsection
