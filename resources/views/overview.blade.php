@extends('component.def')
@section('title', 'Overview')
@php
  $class = 'bg-gradient-to-r from-slate-100 to-sky-100';
@endphp
@section('container')
  <div class="py-8">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">
      Welcome to <span
        class="underline-offset-3 underline decoration-blue-400 decoration-8 dark:decoration-blue-600">Overview</span></h1>
    <p class="text-lg font-normal text-gray-500 lg:text-xl">Here's an overview of your school
      management.</p>
    <div class="mt-4">
      @guest
        <a href="{{ route('login') }}"
          class="inline-block rounded-full bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</a>
        <a href="{{ route('register') }}"
          class="inline-block rounded-full bg-sky-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-sky-800 focus:outline-none focus:ring-4 focus:ring-sky-300 dark:bg-sky-500 dark:hover:bg-sky-700 dark:focus:ring-blue-800">Register</a>
      @else
        <a href="{{ route('logout') }}"
          class="mt-2 inline-block rounded-full bg-red-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-400">Logout</a>
      @endguest
    </div>
  </div>

  <hr class="my-5 h-[0.1rem] w-full rounded bg-gradient-to-l from-gray-800 to-blue-500 md:my-4">
  {{-- <div class="mt-4 flex items-center space-x-4">
    <a href="{{ route('login') }}"
      class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2">
      Log In
    </a>
    <div class="text-sm text-gray-500">
      Don't have an account?
      <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
        Register
      </a>
    </div>
  </div> --}}

  <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
    <div class="max-w-sm rounded-lg border border-gray-200 bg-white p-6 shadow">
      <img class="h-10 w-10 object-cover"
        src="https://icons.veryicon.com/png/o/education-technology/online-education-background-management/student-management-4.png"
        alt="">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Total students</h5>
      <p class="font-normal text-gray-700">{{ $totalStudents }} students</p>
    </div>
    {{-- 
    <div class="rounded-lg bg-white p-6 shadow-md">
      <h3 class="text-lg font-semibold text-gray-900">Total Teachers</h3>
      <p class="mt-2 text-sm text-gray-500">{{ $totalTeachers }} teachers</p>
    </div>

    <div class="rounded-lg bg-white p-6 shadow-md">
      <h3 class="text-lg font-semibold text-gray-900">Total Subjects</h3>
      <p class="mt-2 text-sm text-gray-500">{{ $totalSubjects }} subjects</p>
    </div> --}}
  </div>
@endsection
