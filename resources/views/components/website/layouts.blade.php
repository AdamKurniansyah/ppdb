<!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>PENERIMAAN PESERTA DIDIK BARU - YAYASAN BUSYRI AL ALI MOJOKERTO</title>
    <style>
    :root {
        --gradient: linear-gradient(45deg, #85FFBD 0%, #FFFB7D 100%);
    }
    .min-h-full {
        min-height: 100vh;
        background-color: #eaeaea;
        background-image: var(--gradient);
        background-size: 200%;
        animation: gradient-animation 9s infinite alternate;
    }
    @keyframes gradient-animation {
        0% {
        background-position: left;
        }
        100% {
        background-position: right;
        }
    }
    </style>
</head>
<body class="h-full">
<div class="min-h-full">
    <div class="mx-auto max-w-7xl justify-center py-1">
        <div class="relative rounded-xl bg-opacity-60 bg-slate-100">
            <x-website.partials.header></x-website.partials.header>
            <x-website.partials.navbar></x-website.partials.navbar>
            <main>
                <div class="mx-auto max-w-7xl px-5 py-8 sm:px-6 lg:px-12">
                    @if (session()->has('successLogin'))
                    <div class="rounded-xl justify-center py-3 my-2 text-sm text-center text-slate-50 bg-green-500 bg-opacity-50">
                        {{ session('successLogin') }}
                    </div>
                    @endif
                    @if (session()->has('successResetPassword'))
                    <div class="rounded-xl justify-center py-3 my-2 text-sm text-center text-slate-50 bg-green-500 bg-opacity-50">
                        {{ session('successResetPassword') }}
                    </div>
                    @endif
                    {{ $slot }}
                    <x-website.partials.footer></x-website.partials.footer>
                </div>
            </main>
        </div>
    </div>
</div>
</body>
</html>