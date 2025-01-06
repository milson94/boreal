<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boreal LDA</title>
    <!-- Include Tailwind CSS -->
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="fixed w-full bg-white shadow-md z-50">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <img src="{{ asset('images/logo_boreal.png') }}" alt="Boreal LDA" class="h-16">
            </div>
            
            <div class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}" class="hover:text-blue-600">HOME</a>
                <a href="{{ route('about') }}" class="hover:text-blue-600">QUEM SOMOS</a>
                <a href="{{ route('services') }}" class="hover:text-blue-600">PROJECOES</a>
                <a href="{{ route('projects') }}" class="hover:text-blue-600">AREAS</a>
                <a href="{{ route('pages') }}" class="hover:text-blue-600">VALORES</a>
                <a href="{{ route('blog') }}" class="hover:text-blue-600">BLOG</a>
                <a href="{{ route('contact') }}" class="hover:text-blue-600">CONTACT</a>
            </div>
            
            <!-- Mobile menu button -->
            <button class="md:hidden" onclick="toggleMobileMenu()">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden">
            <!-- Mobile menu items here -->
        </div>
    </nav>
    
    @yield('content')

    <!-- Include your JavaScript -->
    @vite('resources/js/app.js')
</body>
</html>