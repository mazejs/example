@extends('layouts.guest')

@section('title', 'Send password reset link')

@section('content')
    <div class="container py-24 mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-sm">
                <div class="w-full max-w-sm md:max-w-full">

                    @if (session('status'))
                        <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                        <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                            {{ __('Reset Password') }}
                        </div>

                        <form class="w-full p-6" method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="flex flex-wrap mb-6">
                                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                                    {{ __('E-Mail Address') }}:
                                </label>

                                <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <div class="flex flex-wrap">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <p class="w-full text-xs text-center text-grey-dark mt-3">
                    Don't need to reset your password?
                    <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('login') }}">
                        {{ __('Back to login') }}
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection
