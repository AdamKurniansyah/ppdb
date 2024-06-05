<!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
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

  {{-- <div class="min-w-0 flex-1">
    <div class="mt-1 lg:max-w-3xl">
      <div class="card flex w-full rounded-md shadow-xl justify-center py-3 text-center bg-green-600">
        <p class="text-white text-3sm font-semibold">INFORMASI DAN FORMULIR PENDAFTARAN SEKOLAH</p>
      </div>
      <div class="row columns-2">
        <div class="py-5">
          <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-1 sm:w-full sm:max-w-sm">
            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-5">
              <div class="sm:flex sm:items-start">
                <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center sm:mx-0" style="width: 100px; height: auto;">
                  <img src="images/logo-tk-muslimat.png" alt="kb/tk">
                </div>
                <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                  <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">KB / TK Muslimat NU 02 Nurul Huda Miji</h3>
                  <div class="mt-2">
                    <p class="text-sm text-gray-500">1 Sekolah</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
              <a href="/registration-form" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xl hover:bg-red-500 sm:ml-3 sm:w-auto">Pendaftaran &nbsp; <span aria-hidden="true">&rarr;</span></a>
              <a href="https://tknurulhuda2.wordpress.com/" target="_blank" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Lihat sekolah</a>
            </div>
          </div>
        </div>
        <div class="py-5">
          <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-1 sm:w-full sm:max-w-sm">
            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-5">
              <div class="sm:flex sm:items-start">
                <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center sm:mx-0" style="width: 96px; height: auto;">
                  <img src="images/logo-minuhasa.jpg" alt="sd/mi">
                </div>
                <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                  <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">SD / MI Ma'arif NU Nurul Huda 01 Miji</h3>
                  <div class="mt-2">
                    <p class="text-sm text-gray-500">1 Sekolah</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
              <a href="/registration-form" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xl hover:bg-red-500 sm:ml-3 sm:w-auto">Pendaftaran &nbsp; <span aria-hidden="true">&rarr;</span></a>
              <a href="https://minuhasahebat.sch.id/" target="_blank" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Lihat Sekolah</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="min-w-0 flex-1 py-5">
    <x-website.welcome-card></x-website.welcome-card>
    <x-website.information-school></x-website.information-school>
  </div>

  <div class="mt-1 lg:mx-auto lg:w-full sm:max-w-sm">
    {{-- <x-profile-auth></x-profile-auth> --}}
    <x-website.form-auth></x-website.form-auth>
    <x-website.guide-video></x-website.guide-video>
  </div>
</div>
</x-website.layouts>