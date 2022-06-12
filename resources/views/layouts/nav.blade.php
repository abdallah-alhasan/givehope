<!DOCTYPE html>
<html lang="en">

<head>
    <title>GiveHope &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link href="{{ url('https://fonts.googleapis.com/css?family=Overpass:300,400,500|Dosis:400,700') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/animate.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('css/aos.css') }}">
    <link rel="stylesheet" href="{{ url('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ url('css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ url('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ url('css/fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">GiveHope</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item "><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="/how-it-works" class="nav-link">How It Works</a></li>
          <li class="nav-item"><a href="{{ route('categories.show', 1) }}" class="nav-link">Donate</a></li>
          {{-- <li class="nav-item"><a href="{{ route('categories.show', $category->id) }}" class="nav-link">Donate</a></li> --}}
          <li class="nav-item"><a href="/gallery" class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
