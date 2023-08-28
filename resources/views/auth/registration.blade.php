@extends('layouts.app')

@section('title', 'Page Title')

@section('navbar')
    @include('layouts.navbar')
@endsection


@section('sidebar')
    @include('layouts.sidebar')
@endsection

@push('styles')
@endpush

@push('scripts')
@endpush

@section('content')
<div class="max-w-[400px] mx-auto w-full">
    <div class="flex flex-col items-center mt-[5vh]">
        <h2 class="mb-5 text-gray-900 font-mono font-bold text-xl">Sign In</h2>
        <form action={{ route('registration.save')}} method="post">
            @csrf
            <input type="text" class="@error('name') is-invalid @enderror w-full px-6 py-3 mb-2 border border-slate-600 rounded-lg font-medium " id="name" name="name" value="{{ old('name') }}" placeholder="Name" value=""/>
            @if ($errors->has('name'))
                <span class="text-base text-center text-orange-600 font-bold">{{ $errors->first('name') }}</span>
            @endif

            <input type="email" class="@error('email') is-invalid @enderror w-full px-6 py-3 mb-2 border border-slate-600 rounded-lg font-medium " id="email" name="email" value="{{ old('email') }}" placeholder="Email" value=""/>
            @if ($errors->has('email'))
                <span class="text-base text-center text-orange-600 font-bold">{{ $errors->first('email') }}</span>
            @endif
            <input type="password" class="w-full px-6 py-3 mb-2 border border-slate-600 rounded-lg font-medium " placeholder="Password" value="" name="password" id="password"/>
            <input type="password" class="w-full px-6 py-3 mb-2 border border-slate-600 rounded-lg font-medium " placeholder="Confirm password" name="password_confirmation" id="password_confirmation" value=""/>
            @if ($errors->has('password'))
                <span class="text-base font-bold text-center text-orange-600">{{ $errors->first('password') }}</span>
            @endif
            <button class="bg-slate-500 hover:bg-slate-700 text-white text-base rounded-lg py-2.5 px-5 transition-colors w-full text-[19px]">Register</button>
        </form>
        <p class="text-center mt-3 text-[14px]">Already have an account?
            <a href="/login" class="text-gray-600">Log In</a>
        </p>
    </div>
</div>



@endsection


