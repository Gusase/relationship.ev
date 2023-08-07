@extends('component.def')
@section('title', 'Login')

@section('container')
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="{{ route('login') }}" method="POST">
        @csrf
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in</h2>
        @error('invalid')
          <div class="mt-1 border-2 border-transparent border-l-red-600 bg-red-50 py-1 pl-2 text-sm text-red-600">
            {{ $message }}
          </div>
        @enderror
        <div>
          <label for="text" class="block font-sans leading-6 text-gray-900">Username <span aria-hidden="true"
              class="text-red-600" title="This field is required">*</span></label>
          <div class="mt-2">
            <input id="text" name="username" type="text" autocomplete="text" autofocus=""
              value="{{ old('username') }}"
              class="@error('username') ring-red-600 border-red-500 @enderror block w-full rounded-md border-0 px-2.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
          @error('username')
            <div class="mt-1 text-sm text-red-600">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block font-sans leading-6 text-gray-900">Password <span aria-hidden="true"
                class="text-red-600" title="This field is required">*</span></label>
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password"
              class="@error('password') ring-red-600 border-red-500 @enderror block w-full rounded-md border-0 px-2.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
          @error('password')
            <div class="mt-1 text-sm text-red-600">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div>
          <button type="submit"
            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
            in</button>
        </div>
      </form>

      <p class="mt-10 text-center text-sm text-gray-500">
        Not a member?
        <a href="/register" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign up!!</a>
      </p>
    </div>
  </div>
@endsection
