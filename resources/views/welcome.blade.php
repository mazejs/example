@extends('layouts.guest')

@section('title', 'Welcome')

@section('content')
    <div class="flex min-h-screen">
        <div class="w-full flex items-center justify-center">
            <p class="text-6xl text-gray-600">{{ config('app.name') }}</p>
        </div>
    </div>
@endsection
