@extends('layouts.app')

@section('title', 'Dashboard')

@section('custom-css')
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}"/>
@endsection

@section('content')
    <h1>Welcome to Work Flow Hub</h1>
@endsection

@section('custom-js')
    <script src="{{asset('assets/js/login.js')}}"></script>
@endsection
