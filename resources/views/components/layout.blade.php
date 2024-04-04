@vite(['resources/css/app.css', 'resources/js/app.js'])
    <nav class="nav">
        <x-nav-link href="/" style="color: green">Home</x-nav-link>
        <x-nav-link href="/about">About</x-nav-link>
        <x-nav-link href="/contact">Contact</x-nav-link>
    </nav>
    @yield('content')

























