<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Not Found</title>
</head>

<body>
  <main
    class="grid min-h-screen place-items-center bg-gradient-to-br from-blue-500 to-purple-400 px-6 py-24 sm:py-32 lg:px-8">
    <div class="text-center">
      <h1 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-5xl">404 - Page Not Found</h1>
      <p class="mt-6 text-base leading-7 text-slate-50">Gomenasai, but it seems we couldn't find the page you're looking
        for.</p>
      <div class="mt-10 flex items-center justify-center gap-x-6">
        <a href="{{ route('dashboard') }}"
          class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Kaero</a>
        <a href="#"
          class="rounded-md border border-slate-50 px-3.5 py-2.5 text-sm font-semibold text-slate-100 hover:bg-slate-200 hover:text-gray-800 focus:outline-none focus-visible:border-indigo-600 focus-visible:ring">
          Contact Senpai for help <span aria-hidden="true">&rarr;</span>
        </a>
      </div>
    </div>
  </main>
</body>

</html>
