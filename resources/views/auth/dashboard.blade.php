@extends('layouts.app')

@section('title', 'Page Title')

@section('navbar')
    @include('layouts.navbar')
@endsection


@section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('content')
    DASHBOARD
    <?php
    echo Auth::check();
    ?>
@endsection

@section('script')
@endsection
