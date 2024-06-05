<!-- Well begun is half done. - Aristotle -->
<head>
  <style>
    body{
      font-family: "Inter var", sans-serif;
        }
        /* #registrationForm {
            max-width: 500px;
        } */
        #registrationForm .form-header .stepIndicator.active {
            font-weight: 600;
        }
        #registrationForm .form-header .stepIndicator.finish {
            font-weight: 600;
            color: #5a67d8;
        }
        #registrationForm .form-header .stepIndicator::before {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            z-index: 9;
            width: 20px;
            height: 20px;
            background-color: #c3dafe;
            border-radius: 50%;
            border: 3px solid #ebf4ff;
        }
        #registrationForm .form-header .stepIndicator.active::before {
            background-color: #a3bffa;
            border: 3px solid #c3dafe;
        }
        #registrationForm .form-header .stepIndicator.finish::before {
            background-color: #5a67d8;
            border: 3px solid #c3dafe;
        }
        #registrationForm .form-header .stepIndicator::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 8px;
            width: 100%;
            height: 3px;
            background-color: #f3f3f3;
        }
        #registrationForm .form-header .stepIndicator.active::after {
            background-color: #a3bffa;
        }
        #registrationForm .form-header .stepIndicator.finish::after {
            background-color: #5a67d8;
        }
        #registrationForm .form-header .stepIndicator:last-child:after {
            display: none;
        }
        #registrationForm input.invalid {
            border: 2px solid #ffaba5;
        }
        #registrationForm .step {
          display: none;
        }
  </style>
</head>
<x-website.layouts>
    <!-- Your content -->
  <div class="lg:flex lg:justify-between">
    <div class="min-w-0 flex-1">
      <div class="mt-1 lg:max-w-3xl">
        <div class="card flex w-full rounded-md shadow-xl justify-center py-3 text-center bg-green-600">
          <p class="text-white text-3sm font-semibold">PEMBELIAN FORMULIR PENDAFTARAN</p>
        </div>
        <div class="pb-0">
          <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-3">
              <label for="school_choise" class="block text-sm font-bold leading-6 text-gray-900">Pilihan Sekolah <span class="text-red-700">*</span></label>
              <div class="mt-1">
                <select required id="school_choise" name="school_choise" autocomplete="school_choise" class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  <option selected disabled>- Pilih salah satu -</option>
                  <option value="KB/TK Muslimat NU 02 Nurul Huda Miji">KB/TK Muslimat NU 02 Nurul Huda Miji</option>
                  <option value="SD/MI Ma'arif NU Nurul Huda 01 Miji">SD/MI Ma'arif NU Nurul Huda 01 Miji</option>
                </select>
              </div>
            </div>
            <div class="sm:col-span-3">
              <label for="year_of_study" class="block text-sm font-bold leading-6 text-gray-900">Tahun Pembelajaran <span class="text-red-700">*</span></label>
              <div class="mt-1">
                <select required id="year_of_study" name="year_of_study" autocomplete="year_of_study" class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  <option selected disabled>- Pilih salah satu -</option>
                  <option value="2024/2025">2024-2025</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <form id="registrationForm" action="#!" method="POST" enctype="multipart/form-data">
          {{-- @csrf --}}
            <!-- start step indicators -->
            <div class="form-header flex gap-3 mb-4 py-5 text-xs text-center">
                <span class="stepIndicator flex-1 pb-8 relative">Identitas Calon Siswa</span>
                <span class="stepIndicator flex-1 pb-8 relative">Identitas Orangtua</span>
                <span class="stepIndicator flex-1 pb-8 relative">Identitas Wali</span>
                <span class="stepIndicator flex-1 pb-8 relative">Mengunggah Berkas Asli</span>
            </div>
            <!-- end step indicators -->
          <div class="space-y-5">
            {{-- <div class="pb-0">
              <h2 class="mt-4 text-base font-semibold leading-7 text-gray-900">FORMULIR PENDAFTARAN</h2>
              <p class="mt-0 text-sm leading-6 text-gray-600">CALON PESERTA DIDIK BARU</p>
              <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

              </div>
            </div> --}}
            <div class="step">
            <div class="pb-0">
              <h2 class="text-base font-semibold leading-7 text-gray-900">I. IDENTITAS CALON SISWA</h2>
              <p class="mt-0 text-sm leading-6 text-gray-600">Masukkan data diri lengkap calon siswa/i.</p>
              <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                  <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nama Lengkap <span class="text-red-700">*</span></label>
                  <div class="mt-1">
                    <input required type="text" name="name" id="name" placeholder="Nama lengkap" autocomplete="name" class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nama Panggilan <span class="text-red-700">*</span></label>
                    <div class="mt-1">
                      <input required type="text" name="name" id="name" placeholder="Nama panggilan" autocomplete="name" class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="year_of_study" class="block text-sm font-medium leading-6 text-gray-900">Jenis Kelamin <span class="text-red-700">*</span></label>
                    <div class="mt-1">
                      <select required id="year_of_study" name="year_of_study" autocomplete="year_of_study" class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option selected disabled>- Pilih salah satu -</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                  </div>
                    <div class="sm:col-span-3">
                      <label for="child" class="block text-sm font-medium leading-6 text-gray-900">Anak ke <span class="text-red-700">*</span></label>
                        <div class="flex items-center mt-1 gap-x-3">
                              <input required id="child" name="" type="number" class="block w-24 shadow-xl rounded-md border-1 py-1 border-gray-300 text-gray-900 focus:ring-indigo-600">
                              <label for="child" class="block text-sm font-medium leading-6 text-gray-900">dari</label>
                              <input required id="child" name="" type="number" class="block w-24 shadow-xl rounded-md border-1 py-1 border-gray-300 text-gray-900 focus:ring-indigo-600">
                              <label for="child" class="block text-sm font-medium leading-6 text-gray-900">bersaudara</label>
                          </div>
                      </div>
                <div class="sm:col-span-3">
                  <label for="place_of_birth" class="block text-sm font-medium leading-6 text-gray-900">Tempat Lahir <span class="text-red-700">*</span></label>
                  <div class="mt-1">
                    <input required type="text" name="place_of_birth" id="place_of_birth" placeholder="Tempat Lahir" autocomplete="place_of_birth" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="sm:col-span-3">
                  <label for="date_of_birth" class="block text-sm font-medium leading-6 text-gray-900">Tanggal Lahir <span class="text-red-700">*</span></label>
                  <div class="mt-1">
                    <input required type="date" name="date_of_birth" id="date_of_birth" autocomplete="date_of_birth" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="sm:col-span-3">
                  <label for="agama" class="block text-sm font-medium leading-6 text-gray-900">Agama <span class="text-red-700">*</span></label>
                  <div class="mt-1">
                    <input required type="text" name="agama" id="agama" placeholder="Agama" autocomplete="agama" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="sm:col-span-3">
                  <label for="from_school" class="block text-sm font-medium leading-6 text-gray-900">Status dalam keluarga <span class="text-red-700">*</span></label>
                  <div class="mt-1">
                    <input required type="text" name="from_school" id="from_school" placeholder="Status dalam keluarga" autocomplete="from_school" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="col-span-full">
                    <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Alamat <span class="text-red-700">*</span></label>
                    <div class="mt-1">
                      <textarea required id="address" name="address" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                    <p class="mt-1 px-2 text-xs leading-6 text-gray-500">*wajib isi dengan alamat lengkap sesuai KK</p>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="agama" class="block text-sm font-medium leading-6 text-gray-900">Asal sekolah <span class="text-red-700">*</span></label>
                    <div class="mt-1">
                      <input required type="text" name="agama" id="agama" placeholder="Asal sekolah" autocomplete="agama" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="nisn" class="block text-sm font-medium leading-6 text-gray-900">NISN <span class="text-red-700">*</span></label>
                    <div class="mt-1">
                      <input required type="number" name="nisn" id="nisn" placeholder="NISN" autocomplete="nisn" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
              </div>
            </div>
          </div>

          <div class="step">
            <div class="pb-0">
              <h2 class="text-base font-semibold leading-7 text-gray-900">II. IDENTITAS ORANGTUA</h2>
              <p class="mt-0 text-sm leading-6 text-gray-600">Masukkan data diri lengkap orangtua calon siswa/i</p>
              <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                  <label for="parent_name" class="block text-sm font-medium leading-6 text-gray-900">Nama Lengkap Ayah <span class="text-red-700">*</span></label>
                  <div class="mt-1">
                    <input type="text" name="parent_name" id="parent_name" placeholder="Nama Lengkap Ayah" autocomplete="parent_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="sm:col-span-1">
                    <label for="year_of_study" class="block text-sm font-medium leading-6 text-gray-900">Agama Ayah <span class="text-red-700">*</span></label>
                    <div class="mt-1">
                      <select required id="year_of_study" name="year_of_study" autocomplete="year_of_study" class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option selected disabled>- Pilih -</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Khonghucu">Khonghucu</option>
                      </select>
                    </div>
                  </div>
                  <div class="sm:col-span-2">
                    <label for="parent_name" class="block text-sm font-medium leading-6 text-gray-900">Pendidikan Terakhir Ayah <span class="text-red-700">*</span></label>
                    <div class="mt-1">
                      <input type="text" name="parent_name" id="parent_name" placeholder="Pendidikan Terakhir Ayah" autocomplete="parent_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="parent_name" class="block text-sm font-medium leading-6 text-gray-900">Nama Lengkap Ibu <span class="text-red-700">*</span></label>
                    <div class="mt-1">
                      <input type="text" name="parent_name" id="parent_name" placeholder="Nama Lengkap Ibu" autocomplete="parent_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                  <div class="sm:col-span-1">
                      <label for="year_of_study" class="block text-sm font-medium leading-6 text-gray-900">Agama Ibu <span class="text-red-700">*</span></label>
                      <div class="mt-1">
                        <select required id="year_of_study" name="year_of_study" autocomplete="year_of_study" class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                          <option selected disabled>- Pilih -</option>
                          <option value="Islam">Islam</option>
                          <option value="Kristen">Kristen</option>
                          <option value="Katolik">Katolik</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Buddha">Buddha</option>
                          <option value="Khonghucu">Khonghucu</option>
                        </select>
                      </div>
                    </div>
                    <div class="sm:col-span-2">
                      <label for="parent_name" class="block text-sm font-medium leading-6 text-gray-900">Pendidikan Terakhir Ibu <span class="text-red-700">*</span></label>
                      <div class="mt-1">
                        <input type="text" name="parent_name" id="parent_name" placeholder="Pendidikan Terakhir Ibu" autocomplete="parent_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                      </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="year_of_study" class="block text-sm font-medium leading-6 text-gray-900">Status Perkawinan <span class="text-red-700">*</span></label>
                        <div class="mt-1">
                          <select required id="year_of_study" name="year_of_study" autocomplete="year_of_study" class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <option selected disabled>- Pilih -</option>
                            <option value="Islam">Kawin</option>
                            <option value="Kristen">Cerai Hidup</option>
                            <option value="Katolik">Cerai Mati</option>
                          </select>
                        </div>
                      </div>
                <div class="sm:col-span-4">
                  <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Alamat</label>
                  <div class="mt-1">
                    <textarea id="address" name="address" rows="1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                  </div>
                  <p class="mt-1 px-2 text-xs leading-6 text-gray-500">*wajib isi dengan alamat lengkap sesuai KK/KTP</p>
                </div>
                  <div class="sm:col-span-3">
                    <label for="parent_name" class="block text-sm font-medium leading-6 text-gray-900">Pekerjaan Ayah <span class="text-red-700">*</span></label>
                    <div class="mt-1">
                      <input type="text" name="parent_name" id="parent_name" placeholder="Pekerjaan Ayah" autocomplete="parent_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="parent_name" class="block text-sm font-medium leading-6 text-gray-900">No. Telp Ayah <span class="text-red-700">*</span></label>
                    <div class="mt-1">
                      <input type="number" name="parent_name" id="parent_name" placeholder="No. Telp Ayah" autocomplete="parent_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="parent_name" class="block text-sm font-medium leading-6 text-gray-900">Pekerjaan Ibu <span class="text-red-700">*</span></label>
                    <div class="mt-1">
                      <input type="text" name="parent_name" id="parent_name" placeholder="Pekerjaan Ibu" autocomplete="parent_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="parent_name" class="block text-sm font-medium leading-6 text-gray-900">No. Telp Ibu <span class="text-red-700">*</span></label>
                    <div class="mt-1">
                      <input type="number" name="parent_name" id="parent_name" placeholder="No. Telp Ibu" autocomplete="parent_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                  <div class="sm:col-span-2">
                    <label for="year_of_study" class="block text-sm font-medium leading-6 text-gray-900">Bantuan yang pernah diterima <span class="text-red-700">*</span></label>
                    <div class="mt-1">
                        <input type="text" name="parent_name" id="parent_name" placeholder="" autocomplete="parent_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <p class="mt-1 px-2 text-xs leading-6 text-gray-500">*PKH/KIP/PIP/lainnya</p>
                    </div>
                  </div>
                  <div class="sm:col-span-2">
                    <label for="year_of_study" class="block text-sm font-medium leading-6 text-gray-900">Status Pekerjaan Orangtua <span class="text-red-700">*</span></label>
                    <div class="mt-1">
                      <select required id="year_of_study" name="year_of_study" autocomplete="year_of_study" class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option selected disabled>- Pilih -</option>
                        <option value="Islam">Ayah Bekerja</option>
                        <option value="Kristen">Ibu Bekerja</option>
                        <option value="Katolik">Ayah & Ibu Bekerja</option>
                      </select>
                    </div>
                  </div>
                  <div class="sm:col-span-2">
                    <label for="year_of_study" class="block text-sm font-medium leading-6 text-gray-900">Domisili Tempat Orangtua Bekerja <span class="text-red-700">*</span></label>
                    <div class="mt-1">
                      <select required id="year_of_study" name="year_of_study" autocomplete="year_of_study" class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option selected disabled>- Pilih -</option>
                        <option value="Islam">Kota Mojokerto</option>
                        <option value="Kristen">Kabupaten Mojokerto</option>
                        <option value="Katolik">Luar Mojokerto</option>
                      </select>
                    </div>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="year_of_study" class="block text-sm font-medium leading-6 text-gray-900">Sumber dana biaya pendidikan <span class="text-red-700">*</span></label>
                    <div class="mt-1">
                        <input type="text" name="parent_name" id="parent_name" placeholder="" autocomplete="parent_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <p class="mt-1 px-2 text-xs leading-6 text-gray-500">*Penghasilan/Bansos/lainnya</p>
                    </div>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="year_of_study" class="block text-sm font-medium leading-6 text-gray-900">Rata-rata Penghasilan Orangtua Perbulan <span class="text-red-700">*</span></label>
                    <div class="mt-1">
                      <select required id="year_of_study" name="year_of_study" autocomplete="year_of_study" class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option selected disabled>- Pilih salah satu -</option>
                        <option value="Islam">Dibawah 500</option>
                        <option value="Kristen">500.000 - 1.000.000</option>
                        <option value="Katolik">1.000.000 - 2.000.000</option>
                        <option value="Katolik">2.000.000 - 3.500.000</option>
                        <option value="Katolik">3.500.000 - 6.000.000</option>
                        <option value="Katolik">Diatas 6.000.000</option>
                      </select>
                    </div>
                  </div>
                  <div class="sm:col-span-6">
                    <label for="year_of_study" class="block text-sm font-medium leading-6 text-gray-900">Apabila ada kegiatan/program sekolah yang membutuhkan kehadiran orang tua siapakah yang akan datang ? <span class="text-red-700">*</span></label>
                    <div class="mt-1">
                        <input type="text" name="parent_name" id="parent_name" placeholder="" autocomplete="parent_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <p class="mt-1 px-2 text-xs leading-6 text-gray-500">*Ayah/Ibu/Anggota Keluarga lainnya</p>
                    </div>
                  </div>
              </div>
            </div>
          </div>

          <div class="step">
            <div class="pb-0">
              <h2 class="text-base font-semibold leading-7 text-gray-900">III. IDENTITAS WALI</h2>
              <p class="mt-0 text-sm leading-6 text-gray-600">Masukkan data diri wali calon siswa/i jika ada</p>
              <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                  <label for="parent_name" class="block text-sm font-medium leading-6 text-gray-900">Nama Lengkap Wali</label>
                  <div class="mt-1">
                    <input type="text" name="parent_name" id="parent_name" placeholder="Nama Lengkap Wali" autocomplete="parent_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="sm:col-span-3">
                  <label for="year_of_study" class="block text-sm font-medium leading-6 text-gray-900">Agama Wali</label>
                  <div class="mt-1">
                    <select required id="year_of_study" name="year_of_study" autocomplete="year_of_study" class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                      <option selected disabled>- Pilih salah satu -</option>
                      <option value="Islam">Islam</option>
                      <option value="Kristen">Kristen</option>
                      <option value="Katolik">Katolik</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Buddha">Buddha</option>
                      <option value="Khonghucu">Khonghucu</option>
                    </select>
                  </div>
                </div>
                <div class="sm:col-span-full">
                  <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Alamat Wali</label>
                  <div class="mt-1">
                    <textarea id="address" name="address" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                  </div>
                  <p class="mt-1 px-2 text-xs leading-6 text-gray-500">*wajib isi dengan alamat lengkap sesuai KK/KTP</p>
                </div>
                <div class="sm:col-span-3">
                  <label for="parent_name" class="block text-sm font-medium leading-6 text-gray-900">Pekerjaan Wali</label>
                  <div class="mt-1">
                    <input type="text" name="parent_name" id="parent_name" placeholder="Pekerjaan Wali" autocomplete="parent_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="sm:col-span-3">
                  <label for="parent_name" class="block text-sm font-medium leading-6 text-gray-900">No. Telp Wali</label>
                  <div class="mt-1">
                    <input type="number" name="parent_name" id="parent_name" placeholder="No. Telp Wali" autocomplete="parent_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="step">
            <div class="pb-0">
              <h2 class="text-base font-semibold leading-7 text-gray-900">IV. MENGUNGGAH BERKAS ASLI</h2>
              <p class="mt-0 text-sm leading-6 text-gray-600">Mengunggah berkas asli yang diperlukan, sebagai berikut</p>
              <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                  <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Akte Kelahiran</label>
                  <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                    <div class="text-center">
                      <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                      </svg>
                      <div class="mt-4 flex text-sm leading-6 text-gray-600">
                        <label for="file-upload" class="relative cursor-pointer rounded-md bg-transparent font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                          <span>Mengunggah Berkas</span>
                          <input id="file-upload" name="file-upload" type="file" class="sr-only">
                        </label>
                        <p class="pl-1">Akte kelahiran</p>
                      </div>
                      <p class="text-xs leading-5 text-gray-600">PNG, JPG, JPEG Maksimal 10MB</p>
                    </div>
                  </div>
                </div>
                <div class="sm:col-span-3">
                  <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Kartu Keluarga</label>
                  <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                    <div class="text-center">
                      <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                      </svg>
                      <div class="mt-4 flex text-sm leading-6 text-gray-600">
                        <label for="file-upload" class="relative cursor-pointer rounded-md bg-transparent font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                          <span>Mengunggah Berkas</span>
                          <input id="file-upload" name="file-upload" type="file" class="sr-only">
                        </label>
                        <p class="pl-1">Kartu Keluarga</p>
                      </div>
                      <p class="text-xs leading-5 text-gray-600">PNG, JPG, JPEG Maksimal 10MB</p>
                    </div>
                  </div>
                </div>
                <div class="sm:col-span-3">
                  <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">KTP Orangtua</label>
                  <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                    <div class="text-center">
                      <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                      </svg>
                      <div class="mt-4 flex text-sm leading-6 text-gray-600">
                        <label for="file-upload" class="relative cursor-pointer rounded-md bg-transparent font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                          <span>Mengunggah Berkas</span>
                          <input id="file-upload" name="file-upload" type="file" class="sr-only">
                        </label>
                        <p class="pl-1">KTP Orangtua</p>
                      </div>
                      <p class="text-xs leading-5 text-gray-600">PNG, JPG, JPEG Maksimal 10MB</p>
                    </div>
                  </div>
                </div>
                <div class="sm:col-span-3">
                  <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">KIA/KIP/PKH/KPS</label>
                  <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                    <div class="text-center">
                      <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                      </svg>
                      <div class="mt-4 flex text-sm leading-6 text-gray-600">
                        <label for="file-upload" class="relative cursor-pointer rounded-md bg-transparent font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                          <span>Mengunggah Berkas</span>
                          <input id="file-upload" name="file-upload" type="file" class="sr-only">
                        </label>
                        <p class="pl-1">KIA/KIP/PKH/KPS</p>
                      </div>
                      <p class="text-xs leading-5 text-gray-600">PNG, JPG, JPEG Maksimal 10MB</p>
                    </div>
                  </div>
                </div>
                <div class="sm:col-span-3">
                  <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">STTB/Ijazah</label>
                  <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                    <div class="text-center">
                      <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                      </svg>
                      <div class="mt-4 flex text-sm leading-6 text-gray-600">
                        <label for="file-upload" class="relative cursor-pointer rounded-md bg-transparent font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                          <span>Mengunggah Berkas</span>
                          <input id="file-upload" name="file-upload" type="file" class="sr-only">
                        </label>
                        <p class="pl-1">STTB/Ijazah</p>
                      </div>
                      <p class="text-xs leading-5 text-gray-600">PNG, JPG, JPEG Maksimal 10MB</p>
                    </div>
                  </div>
                </div>
                <div class="sm:col-span-3">
                  <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">NISN</label>
                  <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                    <div class="text-center">
                      <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                      </svg>
                      <div class="mt-4 flex text-sm leading-6 text-gray-600">
                        <label for="file-upload" class="relative cursor-pointer rounded-md bg-transparent font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                          <span>Mengunggah Berkas</span>
                          <input id="file-upload" name="file-upload" type="file" class="sr-only">
                        </label>
                        <p class="pl-1">NISN</p>
                      </div>
                      <p class="text-xs leading-5 text-gray-600">PNG, JPG, JPEG Maksimal 10MB</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

            <!-- start previous / next buttons -->
            <div class="form-footer flex gap-3">
              <button type="button" id="prevBtn" class="flex-1 focus:outline-none border border-gray-300 py-2 px-5 rounded-lg shadow-sm text-center text-gray-700 bg-white hover:bg-gray-100 text-sm" onclick="nextPrev(-1)">Sebelumnya</button>
              <button type="button" id="nextBtn" class="flex-1 border border-transparent focus:outline-none p-2 rounded-md text-center text-white bg-indigo-600 hover:bg-indigo-700 text-sm" onclick="nextPrev(1)">Berikutnya</button>
            </div>
            <!-- end previous / next buttons -->

          </div>
          {{-- <div class="mt-10 flex items-center justify-center">
            @auth
            <button type="submit" class="rounded-lg bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xl hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Beli Formulir</button>
            @else
            <button disabled type="submit" class="rounded-lg bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xl hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Beli Formulir</button>
            @endauth
          </div> --}}
        </form>
        <div class="text-center border-b border-gray-900/10 ring-2 bg-amber-400 shadow-xl rounded-lg mt-5 pb-4 pt-1">
          <h2 class="text-base p-1 m-1 font-semibold leading-7 text-gray-900">Pemberitahuan!</h2>
          <p class="mt-1 p-1 m-1 text-sm leading-6 text-gray-600"><strong>Catatan:</strong> Dihimbau kepada calon wali murid yang mempunyai KARTANU/KARTAMUS/Alumni Busyri Al Aly untuk langsung membeli Formulir di sekolah dengan membawa bukti atau bisa menghubungi panitia PPDB melalui kontak/whatsapp support, dan bagi pembeli Formulir online diharap Inputkan Email dengan benar, Email Tersebut Akan Digunakan Sebagai Konfirmasi Pembayaran Formulir Pendaftaran Serta Informasi Lainnya.</p>
        </div>
      </div>
    </div>
    <div class="mt-1 lg:mx-auto lg:w-full sm:max-w-sm">
      {{-- <x-profile-auth></x-profile-auth> --}}
      <x-website.form-auth></x-website.form-auth>
      <x-website.guide-video></x-website.guide-video>
    </div>
  </div>

    <script>var currentTab = 0; // Current tab is set to be the first tab (0)
      showTab(currentTab); // Display the current tab
      
      function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("step");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
          document.getElementById("prevBtn").style.display = "none";
        } else {
          document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
          document.getElementById("nextBtn").innerHTML = "Kirim";
        } else {
          document.getElementById("nextBtn").innerHTML = "Berikutnya";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
      }
      
      function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("step");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
          // ... the form gets submitted:
          document.getElementById("registrationForm").submit();
          return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
      }
      
      function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("step");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
          // If a field is empty...
          if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
          }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
          document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
        }
        return valid; // return the valid status
      }
      
      function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("stepIndicator");
        for (i = 0; i < x.length; i++) {
          x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
      }</script>
</x-website.layouts>