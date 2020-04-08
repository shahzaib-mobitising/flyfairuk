@extends('test.app')

@section('pageTitle', 'Home')

@section('section1')
@include('test.my')
    <p>This is home content</p>
@endsection

@section('section2')
@include('test.my')
    <p>This is home content 2</p>
@endsection

