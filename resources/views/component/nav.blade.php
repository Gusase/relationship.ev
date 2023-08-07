<nav class="border-b border-b-gray-200 bg-white">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button"
          class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
          aria-controls="mobile-menu" id="mobile-menu-button" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
        <h2 class="ml-2 text-xl font-semibold leading-tight text-gray-800">@yield('header') </h2>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="hidden sm:block">
          <div class="flex h-16 space-x-4">
            @auth
              <!-- If user is authenticated -->
              @if (Auth::user()->role === 'admin')
                <div class="flex">
                  <div class="hidden sm:-my-px sm:flex">
                    {{-- rmeove b transparent --}}
                    <a href="{{ route('admin.dashboard') }}"
                      class="{{ Request::is('admin/dashboard') ? 'border-gray-500 text-gray-700' : 'border-transparent' }} inline-flex items-center border-b-4 px-1 pt-1 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out hover:border-gray-500 hover:text-gray-700 focus:border-gray-500 focus:text-gray-700 focus:outline-none">Dashboard</a>
                  </div>
                  <div class="hidden sm:-my-px sm:ml-5 sm:flex">
                    <a href="{{ route('admin.students.index') }}"
                      class="{{ Request::is('admin/students') || Request::is('admin/s/*') ? 'border-gray-500 text-gray-700' : 'border-transparent' }} inline-flex items-center border-b-4 px-1 pt-1 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out hover:border-gray-500 hover:text-gray-700 focus:border-gray-500 focus:text-gray-700 focus:outline-none">Students</a>
                  </div>
                  <div class="hidden sm:-my-px sm:ml-5 sm:flex">
                    <a href="{{ route('admin.teachers.index') }}"
                      class="{{ Request::is('admin/teachers') ? 'border-gray-500 text-gray-700' : 'border-transparent' }} inline-flex items-center border-b-4 px-1 pt-1 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out hover:border-gray-500 hover:text-gray-700 focus:border-gray-500 focus:text-gray-700 focus:outline-none">Teachers</a>
                  </div>
                </div>
              @elseif (Auth::user()->role === 'guru')
                <div class="hidden sm:-my-px sm:ml-5 sm:flex">
                  <a href="{{ route('teacher.dashboard') }}"
                    class="inline-flex items-center border-b-4 px-1 pt-1 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out hover:border-gray-500 hover:text-gray-700 focus:border-gray-500 focus:text-gray-700 focus:outline-none">Dashboard</a>
                </div>
                <div class="hidden sm:-my-px sm:ml-5 sm:flex">
                  <a href="{{ route('teacher.subjects.index') }}"
                    class="inline-flex items-center border-b-4 px-1 pt-1 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out hover:border-gray-500 hover:text-gray-700 focus:border-gray-500 focus:text-gray-700 focus:outline-none">Subjects</a>
                </div>
                <div class="hidden sm:-my-px sm:ml-5 sm:flex">
                  <a href="{{ route('teacher.assignments.index') }}"
                    class="inline-flex items-center border-b-4 px-1 pt-1 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out hover:border-gray-500 hover:text-gray-700 focus:border-gray-500 focus:text-gray-700 focus:outline-none">Assignments</a>
                </div>
              @elseif(Auth::user()->role === 'siswa')
                <div class="hidden sm:-my-px sm:ml-5 sm:flex">
                  <a href="{{ route('student.dashboard') }}"
                    class="{{ Request::is('s/dashboard') ? 'border-gray-500 text-gray-700' : 'border-transparent' }} inline-flex items-center border-b-4 px-1 pt-1 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out hover:border-gray-500 hover:text-gray-700 focus:border-gray-500 focus:text-gray-700 focus:outline-none">Dashboard</a>
                </div>
                <div class="hidden sm:-my-px sm:ml-5 sm:flex">
                  <a href="{{ route('student.assignments.index') }}"
                    class="{{ Request::is('s/assignments') ? 'border-gray-500 text-gray-700' : 'border-transparent' }} inline-flex items-center border-b-4 px-1 pt-1 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out hover:border-gray-500 hover:text-gray-700 focus:border-gray-500 focus:text-gray-700 focus:outline-none">Assignments</a>
                </div>
                <div class="hidden sm:-my-px sm:ml-5 sm:flex">
                  <a href="{{ route('student.profile') }}"
                    class="{{ Request::is('s/profile') ? 'border-gray-500 text-gray-700' : 'border-transparent' }} inline-flex items-center border-b-4 px-1 pt-1 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out hover:border-gray-500 hover:text-gray-700 focus:border-gray-500 focus:text-gray-700 focus:outline-none">Profile</a>
                </div>
                <div class="hidden sm:-my-px sm:ml-5 sm:flex">
                  <a href="{{ route('student.grades') }}"
                    class="{{ Request::is('s/grades') ? 'border-gray-500 text-gray-700' : 'border-transparent' }} inline-flex items-center border-b-4 px-1 pt-1 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out hover:border-gray-500 hover:text-gray-700 focus:border-gray-500 focus:text-gray-700 focus:outline-none">Grades</a>
                </div>
              @endif
            @endauth

            {{-- <a href="/profile"
              class="rounded-md px-3 py-2 text-sm font-medium text-gray-500 hover:bg-gray-700 hover:text-white">Your
            profile</a> --}}
          </div>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <!-- Profile dropdown -->
        <div class="relative ml-3">
          <div>
            <div
              class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
              id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">Open user menu</span>
              {{-- <img class="h-8 w-8 rounded-full"
                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                alt=""> --}}

              <div id="avatarButton"
                class="relative inline-flex h-10 w-10 cursor-pointer select-none items-center justify-center overflow-hidden rounded-full bg-gray-100 dark:bg-gray-600">
                <span class="font-medium text-gray-600 dark:text-gray-300" id="avatarButton">
                  {{ strtoupper(substr(Auth::user()->username, 0, 1)) }}
                </span>
              </div>


              <!-- Dropdown menu -->
              <div id="userDropdown"
                class="absolute right-0 top-[130%] z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:divide-gray-600 dark:bg-gray-700">
                <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                  <div class="text-base">{{ Auth::user()->name }}</div>
                  <div class="truncate font-medium capitalize text-gray-50">{{ Auth::user()->role }}</div>
                </div>
                <div class="py-1">
                  <a href="{{ route('logout') }}"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                    out</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-500 hover:bg-gray-700 hover:text-white" -->
  <div class="hidden sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-4 pb-3 pt-2">
      @auth
        <!-- If user is authenticated -->
        @if (Auth::user()->role === 'admin')
          <a href="{{ route('admin.dashboard') }}"
            class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Dashboard</a>
          <a href="{{ route('admin.students.index') }}"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-500 hover:bg-gray-700 hover:text-white">Students</a>
          <a href="{{ route('admin.teachers.index') }}"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-500 hover:bg-gray-700 hover:text-white">Teachers</a>
        @elseif (Auth::user()->role === '<guru></guru>')
          <a href="{{ route('teacher.dashboard') }}"
            class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Dashboard</a>
          <a href="{{ route('teacher.subjects.index') }}"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-500 hover:bg-gray-700 hover:text-white">Subjects</a>
          <a href="{{ route('teacher.assignments.index') }}"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-500 hover:bg-gray-700 hover:text-white">Assignments</a>
        @elseif(Auth::user()->role === 'siswa')
          <a href="{{ route('student.dashboard') }}"
            class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Dashboard</a>
          <a href="{{ route('student.assignments.index') }}"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-500 hover:bg-gray-700 hover:text-white">Assignments</a>
          <a href="{{ route('student.profile') }}"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-500 hover:bg-gray-700 hover:text-white">Profile</a>
          <a href="{{ route('student.grades') }}"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-500 hover:bg-gray-700 hover:text-white">Grades</a>
        @endif
      @endauth
    </div>
  </div>
</nav>
