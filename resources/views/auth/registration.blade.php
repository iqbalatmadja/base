@extends('layouts.app')

@section('title', 'Page Title')

@section('navbar')
    @include('layouts.navbar')
@endsection


@section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('content')
    @include('auth.registrationform')
@endsection

@section('script')
const appData = () => {
    return {
        percent: 0,

        appInit() {
            // source: https://codepen.io/A_kamel/pen/qBmmGKJ
            window.addEventListener('scroll', () => {
                let winScroll = document.body.scrollTop || document.documentElement.scrollTop,
                    height = document.documentElement.scrollHeight - document.documentElement.clientHeight;

                this.percent = Math.round((winScroll / height) * 100);
            });
        },
    };
};

@endsection
