@extends('layouts.main')

@section('content')

@include('user.banner')

@include('user.bglight') <!-- .bg-light -->

@include('user.doctor') <!-- .page-section -->

@include('user.latestnews') <!-- .page-section -->

@include('user.appointment') <!-- .page-section -->

@endsection
