<!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>FORGOT PASSWORD</title>
    <style>
    :root {
        --gradient: linear-gradient(45deg, #85FFBD 0%, #FFFB7D 100%);
    }
    .min-h-full {
        min-height: 100vh;
        background-color: #eaeaea;
        background-image: var(--gradient);
        background-size: 150%;
        animation: gradient-animation 5s infinite alternate;
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
      <main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-3 lg:px-8">
        <div class="text-center">
          <p class="text-base font-semibold text-indigo-600">Anda lupa Password?</p>
          <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">silahkan verifikasi melalui email</h1>
          <p class="mt-6 text-base leading-7 text-gray-600">masukkan email pada kolom dibawah ini</p>
          <form action="/forgot-password-act" method="post">
            @csrf
            <div class="mt-2 px-10 flex items-center justify-center">
              <input type="email" name="email" placeholder="ketik disini" class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 px-3 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            @error('email')
              <small>{{ $message }}</small>
            @enderror
            <div class="mt-10 flex items-center justify-center gap-x-6">
              <button type="submit" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xl hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Kirim</button>
            </div>
          </form>
          @if (session()->has('successSend'))
          <div class="card flex w-full rounded-xl justify-center py-3 my-2 text-sm text-center text-slate-50 bg-green-500 bg-opacity-50">
              {{ session('successSend') }}
          </div>
          @endif
        </div>
      </main>
    </div>
</body>
</html>