<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <header>
        @include('layouts.partials.header')
    </header>
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
         @include('layouts.partials.sidebar')
        <div id="main-content" class="relative w-full max-w-screen-2xl mx-auto h-full overflow-y-auto lg:ml-64 bg-gray-50 dark:bg-gray-900">
          <main>
           @yield('content')
          </main>
         @include('layouts.partials.footer')
        </div>
      
      </div>
</body>
</html>