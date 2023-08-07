@extends('component.def')
@section('title', 'Logout?')

@section('container')
  <div class="mx-auto max-w-sm rounded-lg border border-gray-400 bg-gray-100 px-8 py-4 text-center">
    <h1 class="my-4 text-2xl font-semibold">Log Out Confirmation</h1>
    {{-- <p class="mb-6">Are you sure you want to log out?</p> --}}
    <p class="my-2">I-it's not like I want you to leave or anything, b-baka!</p>
    {{-- <p>B-Baka! D-Don't leave me!</p> --}}
    <form action="{{ route('logout') }}" class="mt-8" method="POST">
      @csrf
      <button type="submit"
        class="dark:focus:ring-gray-20 mb-2 mr-2 w-full rounded rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-base font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-50 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700">
        Logout
      </button>
    </form>
  </div>
@endsection
@php
  $hideNavbar = true;
@endphp
