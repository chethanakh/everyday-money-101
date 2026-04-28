{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&amp;family=Public+Sans:ital,wght@0,100..900;1,100..900&amp;display=swap"
        rel="stylesheet" />
    <!-- Icons -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="bg-surface text-on-surface font-body selection:bg-primary-fixed-dim selection:text-on-primary-fixed">
    <!-- TopNavBar -->
    <x-navbar/>
    <main class="pt-24 pb-20 max-w-7xl mx-auto px-8">
        @yield('content')
    </main>
    <x-footer/>
</body>

</html> --}}

<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>404 - Page Not Found | The Digital Curator</title>
    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&amp;family=Public+Sans:ital,wght@0,100..900;1,100..900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-background": "#191c1e",
                        "inverse-surface": "#2d3133",
                        "tertiary": "#5a2e2d",
                        "secondary-fixed": "#d5e3fc",
                        "on-surface": "#191c1e",
                        "on-primary-container": "#a0cfb7",
                        "on-error": "#ffffff",
                        "primary-fixed-dim": "#a2d1b9",
                        "error-container": "#ffdad6",
                        "on-secondary-fixed-variant": "#3a485b",
                        "on-secondary-fixed": "#0d1c2e",
                        "surface-container-lowest": "#ffffff",
                        "primary-fixed": "#bdedd4",
                        "secondary-container": "#d5e3fc",
                        "on-surface-variant": "#414944",
                        "surface-container-highest": "#e0e3e5",
                        "inverse-primary": "#a2d1b9",
                        "tertiary-fixed": "#ffdad8",
                        "primary": "#154231",
                        "surface": "#f7f9fb",
                        "surface-dim": "#d8dadc",
                        "tertiary-container": "#754443",
                        "on-primary-fixed": "#002115",
                        "surface-container-high": "#e6e8ea",
                        "on-primary-fixed-variant": "#224f3c",
                        "background": "#f7f9fb",
                        "on-error-container": "#93000a",
                        "on-secondary": "#ffffff",
                        "secondary": "#515f74",
                        "on-tertiary-fixed": "#341010",
                        "surface-container": "#eceef0",
                        "on-secondary-container": "#57657a",
                        "tertiary-fixed-dim": "#f8b6b4",
                        "outline": "#717973",
                        "on-tertiary-fixed-variant": "#683a39",
                        "surface-bright": "#f7f9fb",
                        "secondary-fixed-dim": "#b9c7df",
                        "outline-variant": "#c0c8c2",
                        "inverse-on-surface": "#eff1f3",
                        "surface-container-low": "#f2f4f6",
                        "surface-tint": "#3b6753",
                        "on-primary": "#ffffff",
                        "on-tertiary-container": "#f6b4b2",
                        "on-tertiary": "#ffffff",
                        "primary-container": "#2e5a47",
                        "surface-variant": "#e0e3e5",
                        "error": "#ba1a1a"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "fontFamily": {
                        "headline": ["Newsreader"],
                        "body": ["Public Sans"],
                        "label": ["Public Sans"]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Public Sans', sans-serif;
        }

        .font-serif {
            font-family: 'Newsreader', serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-surface text-on-surface min-h-screen flex flex-col">
    <x-navbar/>
    <main class="flex-grow flex items-center justify-center pt-24 pb-12 px-6">
        <div class="max-w-4xl w-full grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
            <div class="md:col-span-7 space-y-8">
                <div>
                    <span
                        class="label-md uppercase tracking-[0.2em] text-secondary font-semibold text-xs mb-4 block">Status
                        Code: @yield('code')</span>
                    <h1 class="font-serif text-8xl md:text-9xl text-primary leading-none tracking-tighter">
                        @yield('code')
                    </h1>
                    <h2 class="font-serif text-3xl md:text-5xl text-on-surface mt-4 tracking-tight">
                        Lost in the Ledger?
                    </h2>
                </div>
                <p class="text-secondary text-lg leading-relaxed max-w-md">
                    It seems the financial insight you're looking for isn't here. Let's get you back to the main archive
                    to resume your growth.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <a class="inline-flex items-center justify-center bg-gradient-to-br from-primary to-primary-container text-on-primary px-8 py-4 rounded-md font-medium shadow-sm hover:opacity-90 transition-all active:scale-95"
                        href="{{ route('blog.home') }}">
                        Return to Home Page
                    </a>
                    <div class="relative group flex-grow max-w-xs">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-secondary group-focus-within:text-primary transition-colors">search</span>
                        <input
                            class="w-full bg-surface-container-low border-none rounded-full py-4 pl-12 pr-4 focus:ring-2 focus:ring-primary/20 text-on-surface"
                            placeholder="Search topics..." type="text" />
                    </div>
                </div>

                <div class="pt-8 border-t border-outline-variant/15">
                    <p class="text-xs uppercase tracking-widest text-secondary font-bold mb-4">Popular Collections</p>
                    <div class="flex flex-wrap gap-3">
                        <a class="px-4 py-2 bg-surface-container-lowest rounded-full text-primary border border-outline-variant/15 hover:bg-surface-container-high transition-colors text-sm font-medium"
                            href="#">Investing</a>
                        <a class="px-4 py-2 bg-surface-container-lowest rounded-full text-primary border border-outline-variant/15 hover:bg-surface-container-high transition-colors text-sm font-medium"
                            href="#">Budgeting</a>
                        <a class="px-4 py-2 bg-surface-container-lowest rounded-full text-primary border border-outline-variant/15 hover:bg-surface-container-high transition-colors text-sm font-medium"
                            href="#">Savings</a>
                        <a class="px-4 py-2 bg-surface-container-lowest rounded-full text-primary border border-outline-variant/15 hover:bg-surface-container-high transition-colors text-sm font-medium"
                            href="#">Estate Planning</a>
                    </div>
                </div>
            </div>

            <div class="md:col-span-5 relative hidden md:block">
                <div class="aspect-[4/5] rounded-xl overflow-hidden bg-surface-container-high relative">
                    <img alt="404 visual" class="w-full h-full object-cover grayscale mix-blend-multiply opacity-80"
                        data-alt="Minimalist high-end office desk with an open leather ledger, a fountain pen, and soft morning shadows across textured paper"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDINlKRHiA03cE4xOdOeNzOWW9CJyV8mmMngXz4pb6hCso8DQen06u8tRntrzMxYEk-JXDryzX2SQlVEOJ3XwwDKU-9ncciMWI3H5KCFQurrA4iW-4FJ5T0BH3I7tU1ulHIu4BEtXalYRIvF-IXH2-sG-Wd_0E2oE56GuZ5bqcXZIfdBxCd2U-_3qgXRviVIPnYbSvecpywMZaRUoWU-PU7vLOe_IcUvUhUipiViFjjugwGhLmGCwqb05o3JVb6c4XdyepDkMy679BA" />
                    <div class="absolute inset-0 bg-primary/5"></div>
                </div>

                <div
                    class="absolute -bottom-6 -left-12 p-8 bg-tertiary-container text-on-tertiary-container rounded-xl shadow-xl max-w-[280px]">
                    <span class="material-symbols-outlined mb-2 block">priority_high</span>
                    <p class="font-serif italic text-lg leading-snug">
                        "The best investment you can make is in yourself."
                    </p>
                    <p class="mt-4 text-xs font-bold uppercase tracking-widest opacity-80">— Wisdom Archive</p>
                </div>
            </div>
        </div>
    </main>
    <x-footer/>
</body>

</html>
