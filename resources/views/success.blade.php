@extends('layouts.main')
@section('content')
    @include('includes.header')
    <div class="container d-flex justify-content-center bg-light p-4 m-4 rounded">
        <div class="alert alert-success">
            <h1>Thank you for your feedback</h1>
            <button class="btn btn-primary" onclick="window.location.href='/'">New Feedback</button>
        </div>
    </div>
@endsection
