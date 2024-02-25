<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', 'Wealth Guardian') }}
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Meta SEO -->
    <meta name="title" content="WealthGuardian - Your Personal Finance Tracker">
    <meta name="description" content="Take control of your finances with WealthGuardian, a powerful and intuitive Personal Finance Tracker app. Track income, manage expenses, and set realistic budgets effortlessly">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="VIX">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('img/icons/favicon.ico')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/icons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/icons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('site.webmanifest')}}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex items-center justify-center overflow-scroll text-white font-inter" style="background: #edf2f7;">
    <section class="fixed top-0 left-0 z-50 w-64 h-full p-4 transition-transform bg-purple-700 sidebar-menu">
        <a href="{{route('main')}}" class="flex items-center pb-4 border-b border-b-white">
            <img src="{{asset('img/logo.png')}}" class="h-6 mr-3 border rounded-md sm:h-9" alt="{{ config('app.name') }} Logo" />
            {{ config('app.name') }}
        </a>
        <ul class="mt-4">
            <li class="mb-1 group">
                <a href="{{route('admin.dashboard')}}" class="flex border-b font-semibold items-center py-2 px-4 text-white hover:bg-white hover:text-purple-700 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class="mr-3 text-lg ri-home-2-line"></i>
                    <span class="text-sm">
                        Dashboard
                    </span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{route('admin.users')}}" class="flex font-semibold border-b  items-center py-2 px-4 text-white hover:bg-white hover:text-purple-700 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <i class='mr-3 text-lg bx bx-user'></i>
                    <span class="text-sm">
                        Users
                    </span>
                </a>
            </li>
        </ul>
    </section>

    <div class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
        <nav class="sticky top-0 left-0 z-30 flex items-center px-6 py-2 bg-purple-700 shadow-md shadow-black/5">
            <ul class="flex items-center ml-auto">
                <button id="fullscreen-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="m-2 rounded-sm fill-white hover:fill-purple-700 hover:bg-gray-100" viewBox="0 0 24 24">
                        <path d="M5 5h5V3H3v7h2zm5 14H5v-5H3v7h7zm11-5h-2v5h-5v2h7zm-2-4h2V3h-7v2h5z"></path>
                    </svg>
                </button>

                <li class="ml-3 dropdown">
                    <button type="button" class="flex items-center dropdown-toggle">
                        <div class="p-2 text-left text-white rounded-md md:block hover:text-purple-700 hover:bg-gray-50">
                            <h2 class="text-sm font-semibold ">
                                {{ auth()->user()->name }}
                            </h2>
                            <p class="text-xs">
                                Administrator
                            </p>
                        </div>
                    </button>
                    <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                        <li>
                            <form method="POST" action="{{route("logout")}}">
                                <button type="submit" role="menuitem" class="flex w-full items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-purple-700 hover:bg-gray-50 cursor-pointer">
                                    Log Out
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <main>
            <div class="p-6">
                {{ $slot }}
            </div>
        </main>
    </div>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const fullscreenButton = document.getElementById('fullscreen-button');

        fullscreenButton.addEventListener('click', toggleFullscreen);

        function toggleFullscreen() {
            if (document.fullscreenElement) {
                document.exitFullscreen();
            } else {
                document.documentElement.requestFullscreen();
            }
        }

    </script>

    <script>
        // start: Popper
        const popperInstance = {}
        document.querySelectorAll('.dropdown').forEach(function(item, index) {
            const popperId = 'popper-' + index
            const toggle = item.querySelector('.dropdown-toggle')
            const menu = item.querySelector('.dropdown-menu')
            menu.dataset.popperId = popperId
            popperInstance[popperId] = Popper.createPopper(toggle, menu, {
                modifiers: [{
                        name: 'offset'
                        , options: {
                            offset: [0, 8]
                        , }
                    , }
                    , {
                        name: 'preventOverflow'
                        , options: {
                            padding: 24
                        , }
                    , }
                , ]
                , placement: 'bottom-end'
            });
        })
        document.addEventListener('click', function(e) {
            const toggle = e.target.closest('.dropdown-toggle')
            const menu = e.target.closest('.dropdown-menu')
            if (toggle) {
                const menuEl = toggle.closest('.dropdown').querySelector('.dropdown-menu')
                const popperId = menuEl.dataset.popperId
                if (menuEl.classList.contains('hidden')) {
                    hideDropdown()
                    menuEl.classList.remove('hidden')
                    showPopper(popperId)
                } else {
                    menuEl.classList.add('hidden')
                    hidePopper(popperId)
                }
            } else if (!menu) {
                hideDropdown()
            }
        })

        function hideDropdown() {
            document.querySelectorAll('.dropdown-menu').forEach(function(item) {
                item.classList.add('hidden')
            })
        }

        function showPopper(popperId) {
            popperInstance[popperId].setOptions(function(options) {
                return {
                    ...options
                    , modifiers: [
                        ...options.modifiers
                        , {
                            name: 'eventListeners'
                            , enabled: true
                        }
                    , ]
                , }
            });
            popperInstance[popperId].update();
        }

        function hidePopper(popperId) {
            popperInstance[popperId].setOptions(function(options) {
                return {
                    ...options
                    , modifiers: [
                        ...options.modifiers
                        , {
                            name: 'eventListeners'
                            , enabled: false
                        }
                    , ]
                , }
            });
        }
        // end: Popper



        // start: Tab
        document.querySelectorAll('[data-tab]').forEach(function(item) {
            item.addEventListener('click', function(e) {
                e.preventDefault()
                const tab = item.dataset.tab
                const page = item.dataset.tabPage
                const target = document.querySelector('[data-tab-for="' + tab + '"][data-page="' + page + '"]')
                document.querySelectorAll('[data-tab="' + tab + '"]').forEach(function(i) {
                    i.classList.remove('active')
                })
                document.querySelectorAll('[data-tab-for="' + tab + '"]').forEach(function(i) {
                    i.classList.add('hidden')
                })
                item.classList.add('active')
                target.classList.remove('hidden')
            })
        })
        // end: Tab



        // start: Chart
        new Chart(document.getElementById('order-chart'), {
            type: 'line'
            , data: {
                labels: generateNDays(7)
                , datasets: [{
                        label: 'Active'
                        , data: generateRandomData(7)
                        , borderWidth: 1
                        , fill: true
                        , pointBackgroundColor: 'rgb(59, 130, 246)'
                        , borderColor: 'rgb(59, 130, 246)'
                        , backgroundColor: 'rgb(59 130 246 / .05)'
                        , tension: .2
                    }
                    , {
                        label: 'Completed'
                        , data: generateRandomData(7)
                        , borderWidth: 1
                        , fill: true
                        , pointBackgroundColor: 'rgb(16, 185, 129)'
                        , borderColor: 'rgb(16, 185, 129)'
                        , backgroundColor: 'rgb(16 185 129 / .05)'
                        , tension: .2
                    }
                    , {
                        label: 'Canceled'
                        , data: generateRandomData(7)
                        , borderWidth: 1
                        , fill: true
                        , pointBackgroundColor: 'rgb(244, 63, 94)'
                        , borderColor: 'rgb(244, 63, 94)'
                        , backgroundColor: 'rgb(244 63 94 / .05)'
                        , tension: .2
                    }
                , ]
            }
            , options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        function generateNDays(n) {
            const data = []
            for (let i = 0; i < n; i++) {
                const date = new Date()
                date.setDate(date.getDate() - i)
                data.push(date.toLocaleString('en-US', {
                    month: 'short'
                    , day: 'numeric'
                }))
            }
            return data
        }

        function generateRandomData(n) {
            const data = []
            for (let i = 0; i < n; i++) {
                data.push(Math.round(Math.random() * 10))
            }
            return data
        }

    </script>
</body>
</html>
