<!-- component -->
<div class="max-w-[400px] mx-auto w-full">
    <div class="flex flex-col items-center mt-[5vh]">
        <h2 class="mb-5 text-gray-900 font-mono font-bold text-xl">Sign Up</h2>
        <form action="{{ route('login.process') }}" method="post">
            @csrf
            <input type="email" class="w-full px-6 py-3 mb-2 border border-slate-600 rounded-lg font-medium  @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Email">
            @if ($errors->has('email'))
            <span class="text-base font-bold text-center text-orange-600">{{ $errors->first('email') }}</span>
            @endif
            <input type="password" class="w-full px-6 py-3 mb-2 border border-slate-600 rounded-lg font-medium  @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
            <button class="bg-slate-500 hover:bg-slate-700 text-white text-base rounded-lg py-2.5 px-5 transition-colors w-full text-[19px]">Log In</button>
        </form>
        <p class="text-center mt-3 text-[14px]">Dont have an account?
            <a href="/registration" class="text-gray-600">Register</a>
        </p>
    </div>
</div>
