@extends('component.def')
@section('header', 'Dashboard')
@section('title', 'Dashboard')
@section('container')
  <div class="flex justify-center px-4 py-8 sm:px-6 lg:px-8">
    <div class="w-full">
      <div class="px-4">
        <div class="bg-white p-5 text-left text-lg font-semibold text-gray-900 dark:bg-gray-800 dark:text-white">
          Our products
          <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of Flowbite products designed
            to help you work and play, stay organized, get answers, keep in touch, grow your business, and more.</p>
        </div>
        <div class="rounded-lg bg-white p-6 shadow-lg">
          <h2 class="mb-4 text-3xl font-semibold">Welcome, {{ Auth::user()->name ?? 'Asuka' }}!</h2>
          <p> Here you can view your class schedule, assignments, grades, and
            more.</p>
          <span
            class="mt-2 inline-block rounded-full bg-blue-500 px-2.5 py-1 text-xs font-medium text-white">{{ Auth::user()->role }}</span>
          <div class="mt-6">
            <p class="mb-3 text-lg leading-6">View?</p>
            <a href="" class="rounded bg-blue-500 px-2 py-1.5 text-sm text-white hover:bg-blue-600">Profile</a>
            <a href="" class="ml-2 rounded bg-blue-500 px-2 py-1.5 text-sm text-white hover:bg-blue-600">
              Assignments</a>
            <a href="" class="ml-2 rounded bg-blue-500 px-2 py-1.5 text-sm text-white hover:bg-blue-600">Grades</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
