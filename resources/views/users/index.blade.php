@extends('layouts.app')

@section('title', 'Users')

@section('breadcrumb')
    <breadcrumb :entries="{{ $breadcrumb }}"></breadcrumb>
@endsection

@section('content')
    <div class="py-6">
        <div class="px-4 xl:px-8">
            <h3 class="text-gray-900 text-xl">Users</h3>
            <p class="text-gray-600 mt-1"></p>
        </div>

        <div class="mt-5 sm:overflow-x-auto sm:overflow-y-hidden">
            <div class="px-0 pb-5 md:px-4 xl:px-8">
                <div class="p-3 md:p-6 w-full rounded-0 md:rounded-lg shadow-lg border border-gray-300 bg-white">
                    <user-index></user-index>
                </div>
            </div>
        </div>
    </div>
@endsection
