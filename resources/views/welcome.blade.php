<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Oke Garden</title>
</head>

<body class="bg-[#f1f1f1]">
  <nav class="flex bg-white w-full h-16 justify-between items-center shadow-md px-10 fixed z-10">
    <div class="w-32">
      <img src="https://okegarden.com/assets/img/logo.png" />
    </div>
    <div class="flex w-96 justify-between text-md">
      <div class="cursor-pointer">Beranda</div>
      <div class="flex items-center gap-3 cursor-pointer">Layanan <img class="w-2" src="/images/down.svg" /></div>
      <div class="flex items-center gap-3 cursor-pointer">Blog <img class="w-2" src="/images/down.svg" /></div>
      <div class="flex items-center gap-3 cursor-pointer">Mitra <img class="w-2" src="/images/down.svg" /></div>
    </div>

    <div class="w-12 h-12 rounded-full">
      <img class="w-12 h-12 rounded-full object-cover" src="https://images.unsplash.com/photo-1504593811423-6dd665756598?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" />
    </div>
  </nav>

  <div class="relative top-32 px-52 pb-20">
    <!-- Header -->
    <div class="text-center">
      <h1 class="font-bold text-3xl mb-3 text-[#424547]">Konsultasi Taman</h1>
      <p>
        Klik dibawah ini untuk memilih tanggal & waktu yang tersedia untuk
        memanggil konsultan kami
      </p>
    </div>
    <!-- Header -->

    <form>

      <!-- Content 1 -->
      <div class="flex h-[420px] gap-10 mt-20">
        <!-- Calender -->
        <div class="bg-white w-[400px] h-full border shadow rounded-md p-5">
          <div class="mb-4 flex justify-between items-center">
            <h3 class="font-bold text-xl" id="month"></h3>
            <div class="flex gap-4">
              <div class="cursor-pointer w-3" id="prev"><img src="/images/left.svg" /></div>
              <div class="cursor-pointer w-3" id="next"><img src="/images/right.svg" /></div>
            </div>
          </div>
          <table class="w-full text-center">
            <thead>
              <tr class="h-12">
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thur</th>
                <th>Fri</th>
                <th>Sat</th>
              </tr>
            </thead>
            <tbody id="calendar">

            </tbody>
          </table>
        </div>
        <!-- Calender -->

        <!-- Waktu -->
        <div class="bg-white grow border shadow rounded-md p-8">
          <div class="text-center mb-5">
            <h1 class="text-xl mb-3 font-medium" id="currentDay"></h1>
            <input type="date" name="date" id="dateForm" value="" class="hidden">
            <p class="text-sm" id="currentMonth"></p>
          </div>

          <div>
            <h4 class="font-medium mb-2">Pilih Waktu</h4>
            <p>Durasi Konsultasi 30 Menit</p>
            <div class=" grid grid-cols-3 gap-5 mt-5">

              <!-- Jam 9 -->
              <div>
                <input type="radio" id="jam1" name="waktu" value="09.00" class="hidden peer" />
                <label for="jam1" class="py-2 block text-center text-xl font-bold w-full text-sky-700 rounded-md border border-black cursor-pointer peer-checked:bg-sky-300 hover:bg-sky-100">09.00
                </label>
              </div>

              <!-- Jam 10 -->
              <div>
                <input type="radio" id="jam2" name="waktu" value="10.00" class="hidden peer" />
                <label for="jam2" class="py-2 block text-center text-xl font-bold w-full text-sky-700 rounded-md border border-black cursor-pointer peer-checked:bg-sky-300 hover:bg-sky-100">10.00
                </label>
              </div>

              <div>
                <input type="radio" id="jam3" name="waktu" value="11.00" class="hidden peer" />
                <label for="jam3" class="py-2 block text-center text-xl font-bold w-full text-sky-700 rounded-md border border-black cursor-pointer peer-checked:bg-sky-300 hover:bg-sky-100">11.00
                </label>
              </div>

              <div>
                <input type="radio" id="jam4" name="waktu" value="12.00" class="hidden peer" />
                <label for="jam4" class="py-2 block text-center text-xl font-bold w-full text-sky-700 rounded-md border border-black cursor-pointer peer-checked:bg-sky-300 hover:bg-sky-100">12.00
                </label>
              </div>

              <div>
                <input type="radio" id="jam5" name="waktu" value="13.00" class="hidden peer" />
                <label for="jam5" class="py-2 block text-center text-xl font-bold w-full text-sky-700 rounded-md border border-black cursor-pointer peer-checked:bg-sky-300 hover:bg-sky-100">13.00
                </label>
              </div>

              <div>
                <input type="radio" id="jam6" name="waktu" value="14.00" class="hidden peer" />
                <label for="jam6" class="py-2 block text-center text-xl font-bold w-full text-sky-700 rounded-md border border-black cursor-pointer peer-checked:bg-sky-300 hover:bg-sky-100">14.00
                </label>
              </div>

              <div>
                <input type="radio" id="jam7" name="waktu" value="15.00" class="hidden peer" />
                <label for="jam7" class="py-2 block text-center text-xl font-bold w-full text-sky-700 rounded-md border border-black cursor-pointer peer-checked:bg-sky-300 hover:bg-sky-100">15.00
                </label>
              </div>

              <div>
                <input type="radio" id="jam8" name="waktu" value="16.00" class="hidden peer" />
                <label for="jam8" class="py-2 block text-center text-xl font-bold w-full text-sky-700 rounded-md border border-black cursor-pointer peer-checked:bg-sky-300 hover:bg-sky-100">16.00
                </label>
              </div>


            </div>
          </div>
        </div>
        <!-- Waktu -->

      </div>
      <!-- Content 1 -->

      <!-- Content2 -->
      <div class="bg-white border shadow rounded-md mt-20 pt-20 pb-12">

        <!-- Informasi Data Diri -->
        <div class="border-b pb-28 px-24">
          <h1 class="font-bold text-3xl mb-3 text-[#424547]">
            Informasi Data Diri
          </h1>
          <div class="flex items-center mt-5 gap-20">
            <div>
              <label class="block mb-3 font-medium">Nama Lengkap</label>
              <input type="text" name="name" placeholder="Yudha Wahyu" class="bg-[#f5f3f2] w-96 py-2 rounded border outline-none px-5" />
            </div>

            <div>
              <label class="block mb-3 font-medium">No Hp</label>
              <input id="inputPhone" value="" onchange="tes()" type="text" name="phoneNumber" placeholder="+6288375938572" class="bg-[#f5f3f2] w-96 py-2 rounded border outline-none px-5" />
            </div>
          </div>
          <div class="flex itemx-start mt-8 gap-5">
            <label>Alamat</label>
            <textarea name="Address" style="resize: none" class="border-gray-300 w-[500px] h-24 outline-green-600 rounded border p-3"></textarea>
          </div>
        </div>
        <!-- Informasi Data Diri -->

        <!-- Informasi Konsultasi Taman -->
        <div class="mt-10 px-24">
          <h1 class="font-bold text-3xl mb-3 text-[#424547]">
            Informasi Konsultasi Taman
          </h1>

          <div class="mb-12">
            <h4 class="font-medium mb-2">Lahan Tanaman</h4>
            <p>Pilih jumlah lahan tanaman yang akan dibuat.</p>

            <div class="mt-12 flex items-center">
              <div class="w-52">
                <input type="radio" id="hosting-big" name="lahan" value="1 Lahan Tanaman" class="hidden peer" />
                <label for="hosting-big" class="p-5 w-full text-black bg-white rounded-md border border-green-200 cursor-pointer peer-checked:border-green-600 peer-checked:text-green-600 peer-checked:font-medium hover:text-green-600 hover:bg-green-100">1 Lahan Tanaman
                </label>
              </div>

              <div class="w-52">
                <input type="radio" id="hosting-big1" name="lahan" value="2 Lahan Tanaman" class="hidden peer" />
                <label for="hosting-big1" class="p-5 w-full text-black bg-white rounded-md border border-green-200 cursor-pointer peer-checked:border-green-600 peer-checked:text-green-600 peer-checked:font-medium hover:text-green-600 hover:bg-green-100">2 Lahan Tanaman
                </label>
              </div>

              <div class="w-80">
                <input type="radio" id="hosting-big2" name="lahan" value="Lebih dari 2 Lahan Tanaman" class="hidden peer" />
                <label for="hosting-big2" class="p-5 w-full text-black bg-white rounded-md border border-green-200 cursor-pointer peer-checked:border-green-600 peer-checked:text-green-600 peer-checked:font-medium hover:text-green-600 hover:bg-green-100">Lebih dari 2 Lahan Tanaman
                </label>
              </div>
            </div>
          </div>
        </div>
        <!-- Informasi Konsultasi Taman -->

        <!-- Tema Taman -->
        <div class="mt-24 px-24">
          <h4 class="font-medium mb-2">Tema Tanaman</h4>
          <p>Pilih tema tanaman yang akan dibuat.</p>
          <div class="bg-yellow-100 rounded-md p-4 w-[700px] mt-8">
            <span class="font-bold">Catatan : </span> Jika anda belum memiliki
            inspirasi tema taman maka anda bisa melewati tahap ini, konsultan
            kami memberikan rekomendasi terbaik untuk taman anda
          </div>

          <div class="mt-10 grid grid-cols-3 gap-8">
            <div>
              <input type="radio" id="tema1" name="tema" value="tema1" class="hidden peer" />

              <label for="tema1" class="rounded-md bg-white border h-[500px] flex flex-col pb-10 peer-checked:border-green-600 cursor-pointer">
                <div class="h-60 w-full rounded-md">
                  <img class="h-60 w-full rounded-md object-cover" src="https://images.unsplash.com/photo-1544727219-d2ff78f0f148?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Z2FyZGVufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" />
                </div>
                <div class="py-4 px-6 grow">
                  <h3 class="font-medium">Taman Minimalis</h3>
                  <p>Taman yang indah dilahan yang sempit</p>
                </div>
                <div class="px-6 flex justify-end peer-checked:text-red-600">
                  <h5 class="text-green-600 font-medium px-1 border-b-1 border-green-600">
                    Pilih
                  </h5>
                </div>
              </label>
            </div>

            <div>
              <input type="radio" id="tema2" name="tema" value="tema2" class="hidden peer" />

              <label for="tema2" class="rounded-md bg-white border h-[500px] flex flex-col pb-10 peer-checked:border-green-600 cursor-pointer">
                <div class="h-60 w-full rounded-md">
                  <img class="h-60 w-full rounded-md object-cover" src="https://images.unsplash.com/photo-1585320806297-9794b3e4eeae?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Z2FyZGVufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" />
                </div>
                <div class="py-4 px-6 grow">
                  <h3 class="font-medium">Taman Kering</h3>
                  <p>Taman yang dirancang untuk menghasilkan suasana akan didalam
                    dan diluar rumah</p>
                </div>
                <div class="px-6 flex justify-end peer-checked:text-red-600">
                  <h5 class="text-green-600 font-medium px-1 border-b-1 border-green-600">
                    Pilih
                  </h5>
                </div>
              </label>
            </div>

            <div>
              <input type="radio" id="tema3" name="tema" value="tema3" class="hidden peer" />

              <label for="tema3" class="rounded-md bg-white border h-[500px] flex flex-col pb-10 peer-checked:border-green-600 cursor-pointer">
                <div class="h-60 w-full rounded-md">
                  <img class="h-60 w-full rounded-md object-cover" src="https://images.unsplash.com/photo-1558293842-c0fd3db86157?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Z2FyZGVufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" />
                </div>
                <div class="py-4 px-6 grow">
                  <h3 class="font-medium">Taman Tropis</h3>
                  <p>Taman yang paling sesuai dengan iklom di Indonesia</p>
                </div>
                <div class="px-6 flex justify-end peer-checked:text-red-600">
                  <h5 class="text-green-600 font-medium px-1 border-b-1 border-green-600">
                    Pilih
                  </h5>
                </div>
              </label>
            </div>
          </div>
        </div>
        <!-- Tema Taman -->

        <!-- Estimasi Ukuran Taman -->
        <div class="mt-24 px-24">
          <h4 class="font-medium mb-2">Estimasi ukuran Taman</h4>

          <div class="mt-8 flex items-center gap-8">

            <!-- <10m2 -->
            <div>
              <input type="radio" id="ukuran1" name="ukuran" value="<10m2" class="hidden peer" />
              <label for="ukuran1" class="p-3 w-full text-black bg-white rounded-md border border-green-200 cursor-pointer peer-checked:border-green-600 peer-checked:text-green-600 peer-checked:font-medium hover:text-green-600 hover:bg-green-100">&#60;10m2
              </label>
            </div>

            <!-- 11-20m2 -->
            <div>
              <input type="radio" id="ukuran2" name="ukuran" value="11-20m2" class="hidden peer" />
              <label for="ukuran2" class="p-3 w-full text-black bg-white rounded-md border border-green-200 cursor-pointer peer-checked:border-green-600 peer-checked:text-green-600 peer-checked:font-medium hover:text-green-600 hover:bg-green-100">11-20m2
              </label>
            </div>

            <!-- 21-30m2 -->
            <div>
              <input type="radio" id="ukuran3" name="ukuran" value="21-30m2" class="hidden peer" />
              <label for="ukuran3" class="p-3 w-full text-black bg-white rounded-md border border-green-200 cursor-pointer peer-checked:border-green-600 peer-checked:text-green-600 peer-checked:font-medium hover:text-green-600 hover:bg-green-100">21-30m2
              </label>
            </div>

            <!-- 31-40m2 -->
            <div>
              <input type="radio" id="ukuran4" name="ukuran" value="31-40m2" class="hidden peer" />
              <label for="ukuran4" class="p-3 w-full text-black bg-white rounded-md border border-green-200 cursor-pointer peer-checked:border-green-600 peer-checked:text-green-600 peer-checked:font-medium hover:text-green-600 hover:bg-green-100">31-40m2
              </label>
            </div>

            <!-- 41-50m2 -->
            <div>
              <input type="radio" id="ukuran5" name="ukuran" value="41-50m2" class="hidden peer" />
              <label for="ukuran5" class="p-3 w-full text-black bg-white rounded-md border border-green-200 cursor-pointer peer-checked:border-green-600 peer-checked:text-green-600 peer-checked:font-medium hover:text-green-600 hover:bg-green-100">41-50m2
              </label>
            </div>

            <!-- 51-60m2 -->
            <div>
              <input type="radio" id="ukuran6" name="ukuran" value="51-60m2" class="hidden peer" />
              <label for="ukuran6" class="p-3 w-full text-black bg-white rounded-md border border-green-200 cursor-pointer peer-checked:border-green-600 peer-checked:text-green-600 peer-checked:font-medium hover:text-green-600 hover:bg-green-100">51-60m2
              </label>
            </div>

            <!-- >100m2 -->
            <div>
              <input type="radio" id="ukuran7" name="ukuran" value=">100m2" class="hidden peer" />
              <label for="ukuran7" class="p-3 w-full text-black bg-white rounded-md border border-green-200 cursor-pointer peer-checked:border-green-600 peer-checked:text-green-600 peer-checked:font-medium hover:text-green-600 hover:bg-green-100">&#62;100m2
              </label>
            </div>
          </div>
        </div>
        <!-- Estimasi Ukurann Taman -->

        <!-- Content2 -->

        <!-- Button Handle -->
        <div class="flex items-center justify-end gap-5 mt-32 px-24">
          <button class="bg-[#f5f5f5] rounded text-green-600 px-5 border border-green-600 py-1 font-medium">
            Batal
          </button>
          <input type="submit" value="OKE" class="bg-green-600 text-white rounded px-5 py-1 border border-green-600 cursor-pointer" />
        </div>
        <!-- Button Handle -->
    </form>
  </div>

  <script src="script.js"></script>
  </script>
</body>

</html>