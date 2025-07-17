<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: https://ogp.me/ns#">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name',"Triumphant World Ministry ")}} | Faith Community & Spiritual Growth</title>

        <meta name="description" content="Triumphant World Ministry is a Christ-centered church community focused on spiritual growth.Join Triumphant World Ministry for worship services, spiritual guidance, and community outreach.">
        <meta name="keywords" content="Triumphant World Ministry, Prophet John Darko, worship in Kumasi, prayerful church in Ghana, Bible study, spiritual healing, Christian fellowship, prophetic ministry">
         <meta name="author" content="Triumphant World Ministry">

         <!-- Canonical URL -->
        <link rel="canonical" href="{{ url()->current() }}">

         <!-- Open Graph / Social Media Meta Tags -->
        <meta property="og:title" content="Triumphant World Ministry | Faith Community & Spiritual Growth">
        <meta property="og:description" content="Join our welcoming church community for worship, spiritual guidance, and meaningful fellowship.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('images/church-logo.png') }}">
        <meta property="og:site_name" content="Triumphant World Ministry">

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Triumphant World Ministry">
        <meta name="twitter:description" content="Experience powerful worship and biblical teachings at Triumphant World Ministry.">
        <meta name="twitter:image" content="{{ asset('images/church-logo.png') }}">

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon.ico">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon.ico">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />



        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Church",
                "name": "Triumphant World Ministry",
                "url": "https://triumphantworldministry.org",
                "logo": "https://triumphantworldministry.org/image/logo.png",
                "sameAs":[
                    https://facebook.com/john.j.darko
                ],
                 "address": {
                    "@type": "P.O.Box Ks 12480, Adum-Kumasi,Ghana",
                    "streetAddress": "Ahodwo-Daban Rd.",
                    "addressLocality": "Kwanwoma",
                    "addressRegion": "Ashanti",
                    "postalCode": "00233",
                    "addressCountry": "GH"
                },
                    "contactPoint": [{
                    "@type": "ContactPoint",
                    "telephone": "+233-24-114-1511",
                    "contactType": "Ministry Office",
                    "areaServed": "GH",
                    "availableLanguage": ["English"]
                }]
            }
        </script>


        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans">
