<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title', 'Nextgen Store')</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --bg: #faf8f5; --fg: #1a1a1a; --muted: #6b6b6b;
            --secondary: #f0ebe3; --border: #e5e0d6; --card: #ffffff; --accent: #c9b99a;
        }
        body { font-family: 'Inter', system-ui, sans-serif; background: var(--bg); color: var(--fg); -webkit-font-smoothing: antialiased; }
        .font-display { font-family: 'Instrument Serif', serif; font-weight: 400; letter-spacing: -0.01em; }
        .text-muted { color: var(--muted); }
        .bg-secondary { background: var(--secondary); }
        .bg-card { background: var(--card); }
        .border-default { border-color: var(--border); }
        .bg-fg { background: var(--fg); }
        .text-bg { color: var(--bg); }
        
        /* Accordion Logic */
        .accordion-content { max-height: 0; overflow: hidden; transition: max-height 0.3s ease, padding 0.3s ease; }
        details[open] .accordion-content { max-height: 500px; padding-bottom: 1.25rem; }
        details > summary { list-style: none; cursor: pointer; }
        details[open] .plus-icon { display: none; }
        details:not([open]) .minus-icon { display: none; }
        
        /* States */
        .size-btn.active { background: var(--fg); color: var(--bg); border-color: var(--fg); }
        .thumb.active { outline: 2px solid var(--fg); outline-offset: 2px; opacity: 1; }
        .thumb { opacity: 0.6; transition: opacity 0.2s; }
        .fade-img { animation: fade 0.4s ease; }
        @keyframes fade { from { opacity: 0; transform: scale(1.02); } to { opacity: 1; transform: scale(1); } }
    </style>
</head>
<body>

    @include('partials.navbar')

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 py-8 lg:py-12">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>