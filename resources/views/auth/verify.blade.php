@extends('layouts.app')

@section('title', 'Verify')

@section('content')
    <div class="py-6">
        <div class="px-4 xl:px-8">
            <h3 class="text-gray-900 text-xl">Email Verify</h3>
            <p class="text-gray-600 mt-1">{{ __('Verify Your Email Address') }}</p>
        </div>
        @if (session('resent'))
            <notify
                :entries="{{
                    json_encode([
                        'id' => \Illuminate\Support\Str::uuid(),
                        'title' => 'Email sent',
                        'description' => 'A fresh verification link has been sent to your email address.'
                    ])
                }}"
            ></notify>
        @endif

        <div class="mt-5 sm:overflow-x-auto sm:overflow-y-hidden">
            <div class="px-4 xl:px-8">
                <div class="px-4 py-3 w-full rounded shadow-lg border border-gray-300 bg-white">
                    <p class="leading-normal">
                        {{ __('Before proceeding, please check your email for a verification link.') }}
                    </p>

                    <p class="leading-normal mt-6">
                        {{ __('If you did not receive the email') }},
                        <a class="text-blue-500 hover:text-blue-700 no-underline cursor-pointer"
                           onclick="event.preventDefault(); document.getElementById('resend-verification-form').submit();"
                        >
                            {{ __('click here to request another') }}
                        </a>.
                    </p>

                    <form id="resend-verification-form" method="POST" action="{{ route('verification.resend') }}" class="hidden">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
