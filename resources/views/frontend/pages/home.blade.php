@extends('frontend.layouts.master')
@section('frontend_title')
    Home Page
@endsection

@section('frontend_content')
    @include('frontend.pages.widget.slider')
    @include('frontend.pages.widget.feature')
    @include('frontend.pages.widget.countdown')
    @include('frontend.pages.widget.best-seller')
    @include('frontend.pages.widget.latest-product')
    @include('frontend.pages.widget.testmonial')
@endsection
