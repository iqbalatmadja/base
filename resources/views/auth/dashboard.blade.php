@extends('layouts.app')

@section('title', 'Page Title')

@section('navbar')
    @include('layouts.navbar')
@endsection


@section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('content')
    DASHBOARD<br/>
    @if(Auth::check())
        <p>{{ Auth::user()->name }}</p>
        <a class="font-bold hover:text-red-500" href="{{ route('logout') }}">LOGOUT</a>
    @else
        <a href="{{ route('login') }}">LOGIN</a>
    @endif

@endsection

@section('script')
@endsection
