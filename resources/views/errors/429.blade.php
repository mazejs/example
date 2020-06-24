@extends('layouts.error')

@section('title', __('Too Many Requests'))

@section('content')
    <div class="flex min-h-screen">
        <div class="w-full flex items-center justify-center">
            <div class="m-8">
                <div class="text-black text-5xl md:text-15xl font-black">429 - {{ __('Too Many Requests') }}</div>
                <p class="text-grey-darker text-2xl md:text-3xl font-light mb-8 leading-normal">{{ __($exception->getMessage() ?: 'You have too many attempts, please try again later.') }}</p>
                <a href="{{ app('router')->has('login') ? route('login') : url('/') }}"
                   class="bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-3 px-4 rounded focus:outline-none focus:shadow-outline"
                >Login</a>
            </div>
        </div>
    </div>
@endsection
