@extends('component.def')
@section('title', 'Register')
@section('container')
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign up</h2>
        <div>
          <label for="text" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
          <div class="mt-2">
            <input id="text" name="name" type="text" autocomplete="text" required
              class="block w-full rounded-md border-0 px-2.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div>
          <label for="text" class="mt-2 block text-sm font-medium leading-6 text-gray-900">Username</label>
          <div class="mt-1">
            <input id="text" name="username" type="text" autocomplete="text" required
              class="block w-full rounded-md border-0 px-2.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="mt-2 block text-sm font-medium leading-6 text-gray-900">Password</label>
          </div>
          <div class="mt-1">
            <input id="password" name="password" type="password" autocomplete="current-password" required
              class="block w-full rounded-md border-0 px-2.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            @error('password')
              {{ $massages }}
            @enderror
          </div>
        </div>
        <div>
          <label for="role" class="mt-2 block text-sm font-medium leading-6 text-gray-900">Role</label>
          <div class="mt-1">
            <select name="role" id="role"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500">
              <option value="">Select Role</option>
              @foreach ($roles as $role)
                <option value="{{ $role }}">{{ ucfirst($role) }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="mt-3">
          <button type="submit"
            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
            up</button>
        </div>
      </form>

      <p class="mt-10 text-center text-sm text-gray-500">
        Already member?
        <a href="/login" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign in!!</a>
      </p>
    </div>
  </div>
@endsection
