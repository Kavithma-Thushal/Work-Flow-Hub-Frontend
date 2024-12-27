@extends('layouts.app')

@section('title', 'Dashboard')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="text-center">
            <h1>Welcome to Work Flow Hub!</h1>
        </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{ asset('assets/js/home.js') }}"></script>
@endsection
