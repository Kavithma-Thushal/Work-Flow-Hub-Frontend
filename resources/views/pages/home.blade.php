@extends('layouts.app')

@section('title', 'Home')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection

@section('content')
    <h1>Welcome to Work Flow Hub</h1>
@endsection

@section('custom-js')
    <script src="{{ asset('assets/js/home.js') }}"></script>
@endsection
