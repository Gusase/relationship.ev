@extends('component.def')
@section('container')
  {{-- {{ dd($student->profile) }} --}}

  <section class="mx-auto max-w-lg">
    <header class="text-lg font-medium text-gray-900">
      <h2>{{ __('Profile Information') }}</h2>
      <p class="mt-1 text-sm text-gray-600">{{ __("Update your account's profile information and email address.") }}</p>
    </header>

    <form method="POST" action="" class="mt-6 space-y-6" id="profile-form" preserve-scroll>
      @csrf
      @method('PUT')

      <div class="rounded-sm border border-gray-200 bg-yellow-50 p-1.5 px-6 shadow-sm sm:px-3.5">
        <p class="text-xs leading-6 text-gray-900">{{ __('Preview still not available') }}</p>
      </div>
      {{-- @if ($user->avatar)
        <img src="{{ asset('storage/' . $user->avatar) }}" alt="{{ $user->name }}"
          class="mb-2 h-24 w-24 rounded-full object-cover" />
      @else
        <img class="h-24 w-24 rounded-full object-cover object-top"
          src="https://www.citypng.com/public/uploads/preview/black-user-member-guest-icon-31634946589seopngzc1t.png?v=2023072117" />
      @endif --}}

      <!-- ... -->

      <div class="mb-2">
        <label for="birthdate" class="block text-sm font-medium leading-6 text-gray-900">{{ __('Birthdate') }}</label>
        <input id="birthdate" name="birthdate" type="date"
          class="mt-1 block w-full rounded-md border-gray-300 py-1.5 sm:text-sm sm:leading-6">
      </div>

      <div class="mb-2">
        <label for="phone_number"
          class="block text-sm font-medium leading-6 text-gray-900">{{ __('Phone Number') }}</label>
        <input id="phone_number" name="phone_number" type="tel" value="{{ $student->profile->phone_number }}"
          class="mt-1 block w-full rounded-md border-gray-300 p-1.5 sm:text-sm sm:leading-6">
      </div>

      <div class="mb-2">
        <label for="parent_name"
          class="block text-sm font-medium leading-6 text-gray-900">{{ __('Parent Phone') }}</label>
        <input id="parent_name" name="parent_name" type="text" value="{{ $student->profile->parent_phone }}"
          class="mt-1 block w-full rounded-md border-gray-300 p-1.5 sm:text-sm sm:leading-6">
      </div>

      <div class="mb-2">
        <label for="guardian_name"
          class="block text-sm font-medium leading-6 text-gray-900">{{ __('Guardian Name') }}</label>
        <input id="guardian_name" name="guardian_name" type="text"
          class="mt-1 block w-full rounded-md border-gray-300 p-1.5 sm:text-sm sm:leading-6">
      </div>

      <div class="mb-2">
        <label for="guardian_phone"
          class="block text-sm font-medium leading-6 text-gray-900">{{ __('Guardian Phone') }}</label>
        <input id="guardian_phone" name="guardian_phone" type="tel"
          class="mt-1 block w-full rounded-md border-gray-300 p-1.5 sm:text-sm sm:leading-6">
      </div>

      <div class="mb-2">
        <label for="hobbies" class="mb-2 block text-sm font-medium leading-6 text-gray-900">{{ __('Hobbies') }}</label>
        @foreach ($student->profile->hobbies as $hobby)
          <label class="inline-flex items-center">
            <input type="checkbox" name="hobbies[]" value="{{ $hobby }}"
              {{ in_array($hobby, $student->profile->hobbies) ? 'checked' : '' }}
              class="rounded border-gray-300 text-blue-500 focus:ring-blue-500">
            <span class="ml-2 text-sm text-gray-700">{{ ucfirst($hobby) }}</span>
          </label>
        @endforeach
      </div>

      <div class="mb-2">
        <label for="notes" class="block text-sm font-medium leading-6 text-gray-900">{{ __('Notes') }}</label>
        <textarea id="notes" name="notes" rows="3"
          class="mt-1 block w-full rounded-md border-gray-300 p-1.5 sm:text-sm sm:leading-6">{{ $student->profile->notes }}</textarea>
      </div>

      <!-- ... -->

      <div class="flex items-center gap-4">
        <button type="submit"
          class="rounded bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-indigo-500 focus-visible:ring-offset-2">
          {{ __('Save') }}
        </button>

        @if (session('status') === 'profile-updated')
          <p class="text-sm text-gray-600">
            {{ __('Saved.') }}
          </p>
        @endif
      </div>
    </form>
  </section>
@endsection()
