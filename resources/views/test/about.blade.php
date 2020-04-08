@extends('test.app')

@section('pageTitle', 'About Us')

@section('section1')
@include('test.my')
    <h1>From About us</h1>
@endsection

@section('section2')
@include('test.my')
    <h1>From About us 2</h1>
@endsection