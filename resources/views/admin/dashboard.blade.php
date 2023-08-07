@extends('component.def')
@section('title', 'Dashboard')
@php
  $class = 'bg-gradient-to-br from-blue-50 to-sky-100';
@endphp
@section('header')
  <h2 class="text-xl font-semibold capitalize leading-tight text-gray-800">Dashboard</h2>
@endsection
@section('container')
  <section class="absolute inset-x-0 top-0">
    <div class="relative mb-4 overflow-hidden rounded-none dark:bg-gray-800 md:rounded">
      <div class="absolute inset-0 z-0 h-full w-full bg-gradient-to-b from-blue-700 via-blue-800 to-transparent"></div>
      <div class="z-3 relative mx-auto max-w-screen-xl px-4 py-8 text-center lg:py-16">
        <h1
          class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
          Ah, so you're the admin, huh?
          {{-- Welcome {{ Auth::user()->name }}! --}}
        </h1>
        <p class="mb-8 text-sm font-normal text-gray-500 dark:text-gray-200 sm:px-16 lg:px-48 lg:text-lg">
          The hub of power? This is where you control everything. <br /> Go on make things happen. Not like we're
          impressed or anything.
        </p>
      </div>
    </div>
  </section>

@endsection
