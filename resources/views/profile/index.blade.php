@extends('component.def')
@section('title', 'Student | ' . $student->username)
@php
  $class = 'bg-gradient-to-r from-slate-100 to-sky-100';
@endphp
@section('header')
  <h2 class="text-xl font-semibold capitalize leading-tight text-gray-800">{{ $student->username }}</h2>
@endsection

@section('container')
  <div class="flex justify-center px-4 py-8 sm:px-6 lg:px-8">
    
    <div class="w-full max-w-md">
      <div class="overflow-hidden rounded-lg bg-white shadow-md">
        <div class="relative">
          <img class="h-40 w-full object-cover sm:h-48"
            src="https://placehold.co/800x400/000000/FFFFFF.webp?text={{ Str::ucfirst($student->username) }}"
            alt="Image of {{ $student->username }}">
          <div class="absolute left-0 top-0 p-2">
            <span
              class="inline-block rounded bg-gray-800 px-4 py-2 text-lg font-semibold uppercase tracking-wide text-white">{{ $student->studentClasses->class }}
            </span>
          </div>
        </div>
        <div class="relative -mt-16 px-4 pb-4">
          <div class="rounded-lg border bg-white p-6 shadow">
            <img class="mx-auto mb-3 h-16 w-16 rounded-full object-cover md:h-20 md:w-20"
              src="https://placehold.co/800x400/000000/FFFFFF.webp?text={{ Str::ucfirst(lcfirst(mb_substr($student->username, 0, 1))) }}"
              alt="Foto Profil">
            <div class="text-center">
              <h1 class="text-3xl font-semibold">{{ $student->name }}</h1>
              <p class="mt-2 text-lg text-gray-600">{{ "@$student->username" }}</p>
            </div>
            <div class="mt-8">
              <h2 class="text-xl font-semibold">About Me</h2>
              <span class="mt-2 block">Note</span>
              <p class="border-2 border-transparent border-b-gray-200 pb-2">
                {{ $student->profile->notes ?? ' ~ Just living life to the fullest 🌟' }}
              </p>
              @if ($student->profile && $student->profile->hobbies)
                @foreach ($student->profile->hobbies as $hobby)
                  <span
                    class="text-capitalize mt-3.5 inline-flex cursor-pointer items-center justify-center rounded-md bg-blue-50 px-2 py-1 text-sm font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10 hover:bg-blue-400 hover:text-white">{{ $hobby }}</span>
                @endforeach
              @else
                <span
                  class="mt-3.5 inline-flex border-2 border-transparent border-l-blue-500 px-2 py-1 text-sm text-blue-700">
                  No exciting hobbies here😴
                </span>
              @endif

            </div>
            <div class="mt-3">
              <h2 class="text-xl font-semibold">Kontak</h2>
              <ul class="mt-2 text-gray-600">
                <li>
                  <span class="font-semibold">📧 Email:</span> {{ $student->email }}
                </li>
                <li>
                  <span class="font-semibold">📞 Telepon:</span> {{ $student->profile->phone_number ?? 'N/A' }}
                </li>
                <li>
                  <span class="font-semibold">🏠 Alamat:</span> {{ $student->profile->address ?? 'N/A' }}
                </li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
