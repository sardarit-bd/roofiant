<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Dashboard' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <link rel="stylesheet" href="{{ asset('css/mycss.css') }}">
</head>

<body class="bg-slate-100 text-slate-800 antialiased">

    <div class="flex h-screen overflow-hidden">

        <!-- Sidebar -->
        @include('components.dashboard.sidebar')

        <!-- Mobile overlay -->
        <div id="sidebar-overlay" class="fixed inset-0 bg-black/50 z-10 hidden md:hidden" onclick="closeSidebar()">
        </div>

        <!-- Main column -->
        <div class="flex flex-col flex-1 w-full min-w-0 overflow-hidden">

            <!-- Header -->
            <header class="z-10 h-16 bg-slate-900 shadow-md shrink-0">
                <div class="flex items-center justify-between h-full px-6">

                    <!-- Mobile hamburger -->
                    <button onclick="openSidebar()"
                        class="p-1 mr-5 -ml-1 rounded-md md:hidden text-slate-300 hover:text-white focus:outline-none"
                        aria-label="Menu">
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <!-- Search input -->
                    <div class="flex justify-center flex-1 lg:mr-32">
                    </div>

                    <!-- Right side -->
                    <ul class="flex items-center flex-shrink-0 space-x-6">
                        <li class="relative">
                            <form action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="border-1 border-slate-300 flex items-center gap-2 px-3 py-2 rounded-lg text-sm font-medium text-slate-300 hover:bg-white/10 hover:text-white transition-colors duration-150">
                                    <i class="fas fa-sign-out-alt w-4 text-center shrink-0"></i>
                                    <span>Logout</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </header>

            <!-- Page content -->
            <main class="flex-1 overflow-y-auto">
                <div class="p-6 mx-auto">
                    {{ $slot }}
                </div>
            </main>

        </div>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebar-overlay');

        function openSidebar() {
            sidebar.classList.remove('hidden');
            overlay.classList.remove('hidden');
        }

        function closeSidebar() {
            sidebar.classList.add('hidden');
            overlay.classList.add('hidden');
        }

        window.addEventListener('resize', () => {
            if (window.innerWidth >= 768) {
                sidebar.classList.remove('hidden');
                overlay.classList.add('hidden');
            } else {
                sidebar.classList.add('hidden');
            }
        });
    </script>

</body>

</html>
