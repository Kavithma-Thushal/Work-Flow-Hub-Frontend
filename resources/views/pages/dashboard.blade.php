@extends('layouts.app')

@section('title', 'Dashboard')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/styles/dashboard.css') }}">
@endsection

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="text-center">
            <h1>Welcome to Work Flow Hub!</h1>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/scripts/dashboard.js') }}"></script>
@endsection
