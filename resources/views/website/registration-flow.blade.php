<!-- The whole future lies in uncertainty: live immediately. - Seneca -->
<x-website.layouts>
    <!-- Your content -->
    @if (session()->has('verifyProcess'))
    <div class="card flex w-full rounded-xl justify-center py-3 my-2 text-sm text-center text-slate-50 bg-green-500 bg-opacity-50">
        {{ session('verifyProcess') }}
    </div>
    @endif
    @if (session()->has('success'))
    <div class="card flex w-full rounded-xl justify-center py-3 my-2 text-sm text-center text-slate-50 bg-green-500 bg-opacity-50">
        {{ session('success') }}
    </div>
    @endif
    @if (session()->has('logoutSuccess'))
    <div class="card flex w-full rounded-xl justify-center py-3 my-2 text-sm text-center text-slate-50 bg-orange-500 bg-opacity-50">
        {{ session('logoutSuccess') }}
    </div>
    @endif
    <div class="lg:flex lg:justify-between">

        <div class="min-w-0 flex-1">
            <div class="mt-1 lg:max-w-3xl">
                <div class="card flex w-full rounded-md shadow-xl justify-center py-3 text-center bg-green-600">
                <p class="text-white text-3sm font-semibold">ALUR PPDB</p>
                </div>
                <div class="flex w-full justify-center py-5 text-center">
                <img src="images/yayasanaba.jpg" alt="alur pendaftaran" class="rounded-lg" style="height: 411px; width: 100%;">
                </div>
            </div>
            </div>

        <div class="mt-1 lg:mx-auto lg:w-full sm:max-w-sm">
        {{-- <x-profile-auth></x-profile-auth> --}}
        <x-website.form-auth></x-website.form-auth>
        <x-website.guide-video></x-website.guide-video>
        </div>
    </div>
</x-website.layouts>