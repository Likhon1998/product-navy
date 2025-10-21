<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="flex flex-col h-screen">

        <!-- Header -->
        <header class="bg-white shadow flex items-center justify-between pl-5 pr-4 py-2 border-b border-gray-200 relative">
            <!-- Left Section: Logo (same width as sidebar) -->
            <div class="w-48 flex items-center justify-center bg-white">
                <img src="{{ asset('assets/images/logo.png') }}" 
                     alt="Logo"
                     class="h-12 w-auto object-contain">
            </div>

            <!-- Right Section: User -->
            <div class="relative mr-2"> {{-- Moved slightly left --}}
                <button id="userMenuButton" 
                        class="flex items-center space-x-2 text-[#081f3c] focus:outline-none">
                    <span class="text-sm text-gray-600">Hi,</span>
                    <span class="font-semibold text-sm">{{ Auth::user()->name ?? 'Accounts Admin' }}</span>
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name ?? 'Accounts Admin') }}" 
                         class="h-7 w-7 rounded-full border border-gray-300" 
                         alt="User Avatar">
                </button>

                <!-- Dropdown Menu -->
                <div id="userDropdown" 
                     class="hidden absolute right-0 mt-2 w-40 bg-white text-gray-700 rounded-lg shadow-md border border-gray-100 text-sm z-50">
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded-t-lg">Profile</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" 
                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 rounded-b-lg">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </header>

        <!-- Body Layout -->
        <div class="flex flex-1 overflow-hidden">
            
            <!-- Sidebar -->
            <aside class="w-48 bg-[#081f3c] text-white flex flex-col">
                <nav class="flex-1 p-3 space-y-1 text-sm mt-2">
                    <a href="{{ route('admin.dashboard') }}" 
                       class="block py-2 px-3 rounded-lg transition 
                              {{ request()->routeIs('admin.dashboard') ? 'bg-[#758BC9] text-white' : 'hover:bg-blue-800' }}">
                        Dashboard
                    </a>
                    <a href="{{ route('admin.products.index') }}" 
                       class="block py-2 px-3 rounded-lg transition 
                              {{ request()->routeIs('admin.products.*') ? 'bg-[#758BC9] text-white' : 'hover:bg-blue-800' }}">
                        Products
                    </a>
                </nav>
            </aside>

            <!-- Main Content -->
            <main class="flex-1 p-4 overflow-y-auto">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- JS for Dropdown -->
    <script>
        const userButton = document.getElementById('userMenuButton');
        const userDropdown = document.getElementById('userDropdown');

        userButton.addEventListener('click', (e) => {
            e.stopPropagation();
            userDropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', (e) => {
            if (!userButton.contains(e.target) && !userDropdown.contains(e.target)) {
                userDropdown.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
