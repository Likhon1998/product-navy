@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-2xl font-semibold text-gray-800 mb-2">
        Welcome, {{ Auth::user()->name }}
    </h2>
    <p class="text-gray-600 mb-6">You are in the Admin Dashboard.</p>
</div>
@endsection
