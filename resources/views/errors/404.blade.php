@extends('layouts.app')

@section('title', 'Page Not Found')

@section('content')
    <div class="flex flex-col items-center justify-center h-screen text-center">
        <h1 class="text-6xl font-bold text-red-600">404</h1>
        <p class="text-xl text-gray-700">Oops! The page you are looking for does not exist.</p>
        <a href="{{ url('/') }}" class="mt-4 px-6 py-2 bg-blue-600 text-white rounded-lg">Go Home</a>
    </div>
@endsection
