@extends('layouts.app')

@section('title', 'Profile')

@section('navbar')
    @include('layouts.navbar')
@endsection


@section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('content')
@if (session('msg'))
<div class="alert alert-success">
    {{ session('msg') }}
</div>
@endif

@if (session('errors'))
<div class="alert alert-error font-bold">
    {{ $errors->getBag('default')->first('name') }}
</div>
@endif
<div class="flex flex-col justify-center h-screen ">
    <div class="w-full p-6 m-auto bg-white rounded-md shadow-md ring-2 ring-gray-800/50 lg:max-w-xl">
        <h1 class="text-3xl font-semibold text-center text-gray-700">Profile</h1>
        <form class="space-y-4" method="POST" action="{{ route('profileupdate') }}">
            @csrf
            <div>
                <label class="label">
                    <span class="text-base label-text">Name</span>
                </label>
                <input type="text" placeholder="Name" class="w-full input input-bordered bg-white border-gray-500" name="name" value="{{ $user->name }}"/>
            </div>
            <div>
                <label class="label">
                    <span class="text-base label-text">Email</span>
                    <span class="badge">readonly</span>
                </label>
                <input type="text" placeholder="Email Address" class="w-full input input-bordered bg-white border-gray-500" readonly value="{{ $user->email }}"/>
            </div>
            <div>
                <button class="btn btn-block">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
@endsection
