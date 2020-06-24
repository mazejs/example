@extends('layouts.error')

@section('title', __('Server Error'))

@section('content')
    <div class="flex min-h-screen">
        <div class="w-full flex items-center justify-center">
            <div class="m-8">
                <div class="text-black text-5xl md:text-15xl font-black">500 - {{ __('Server Error') }}</div>
                <p class="text-grey-darker text-2xl md:text-3xl font-light mb-8 leading-normal">{{ __('Server Error') }}</p>
                <a href="{{ app('router')->has('home') ? route('home') : url('/') }}"
                   class="bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-3 px-4 rounded focus:outline-none focus:shadow-outline"
                >Go Home</a>
            </div>
        </div>
    </div>
@endsection
