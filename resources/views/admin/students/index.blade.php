@extends('component.def')
@section('title', 'All Student')
@php
  $class = 'bg-gradient-to-r from-indigo-50 to-sky-50';
@endphp
@section('header')
  <h2 class="text-xl font-semibold capitalize leading-tight text-gray-800">All student</h2>
@endsection
@section('container')
  <section class="absolute inset-x-0 top-0">
    <div class="relative rounded-none dark:bg-gray-800 md:rounded">
      <div class="absolute inset-0 z-0 h-full w-full bg-gradient-to-b from-blue-700 via-blue-800 to-transparent"></div>
      <div class="z-3 relative mx-auto max-w-screen-xl px-4 py-8 text-center lg:py-16">
        <h1
          class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
          Ugh, fine, listen up!
        </h1>
        <p class="mb-8 px-12 text-sm font-normal text-gray-500 dark:text-gray-200 sm:px-16 lg:px-48 lg:text-lg">
          Here's where you handle those students. We're dealing with their data and all that for "long-term value."
          So, bring order to this chaos. Not that we care, of course.
        </p>
      </div>
    </div>
  </section>

  <div class="mt-44 grid grid-cols-1 gap-4 md:mt-64 md:grid-cols-2">
    <div class="rounded-lg border border-gray-200 bg-gray-50 p-8 shadow dark:border-gray-700 dark:bg-gray-800 md:p-10">
      <h2 class="mb-2 text-2xl font-extrabold text-gray-900 dark:text-white">Register another student, seriously</h2>
      <p class="mt-2 text-base font-medium text-gray-300">Like you're not already overwhelmed with
        {{ $students->count() }} of them...</p>
      <a href="#"
        class="mt-3 inline-flex w-full items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto">
        Register
        <svg class="ml-2 h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
          viewBox="0 0 14 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 5h12m0 0L9 1m4 4L9 9" />
        </svg>
      </a>
    </div>
    <div class="rounded-lg border border-gray-200 bg-gray-50 p-8 shadow dark:border-gray-700 dark:bg-gray-800 md:p-10">
      <h2 class="mb-2 text-2xl font-extrabold text-gray-900 dark:text-white">Editing student info
      </h2>
      <p class="mt-2 font-medium text-gray-300">Are you sure you remember how to do this? Whatever, fix their data or
        whatever.</p>
      <form class="mt-3 flex items-center">
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full">
          <input type="text" id="simple-search" name="s"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
            placeholder="Search student name..." required>
        </div>
        <button type="submit"
          class="ml-2 rounded-lg border border-blue-700 bg-blue-700 p-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
          </svg>
          <span class="sr-only">Search</span>
        </button>
      </form>
    </div>
  </div>
@endsection

{{-- <ul role="list" class="grid grid-cols-1 gap-4 divide-y divide-gray-100 md:grid-cols-3">
    @foreach ($students as $siswa)
      <a href="{{ route('profile.show', str_replace('.', '-', $siswa->username)) }}">
        <li
          class="flex cursor-pointer justify-between gap-x-6 rounded bg-white p-3 py-5 shadow hover:bg-gray-50 hover:shadow-md">
          <div class="flex items-center space-x-4">
            <img class="h-10 w-10 rounded-full"
              src="https://placehold.co/300x300/000000/FFFFFF.webp?text={{ Str::ucfirst(lcfirst(mb_substr($siswa->username, 0, 1))) }}"
              alt="">
            <div class="font-medium">
              <div class="capitalize">{{ $siswa->name }}</div>
              <div class="text-sm text-gray-500">Angkatan
                {{ $siswa->created_at->format('Y') . ' / ' . $siswa->created_at->addYear()->format('Y') }}
              </div>
            </div>
          </div>
        </li>
      </a>
    @endforeach
  </ul> 
  <div class="mt-5 w-full border border-transparent border-t-gray-500 p-3">
    <div class="flex w-full justify-between">
      {{ $students->links() }}
    </div>
  </div> --}}
