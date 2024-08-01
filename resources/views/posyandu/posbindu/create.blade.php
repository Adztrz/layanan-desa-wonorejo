<!DOCTYPE html>
<html lang="en">
<head>
   @include('posyandu.components.head')
</head>
<body>
 
@include('posyandu.components.sidebar')

 <div class="p-4 sm:ml-64">
 

<!-- Breadcrumb -->
<nav class="justify-between px-4 py-3 text-black border border-gray-200 rounded-lg sm:flex sm:px-5 bg-gradient-to-r from-cyan-500 to-blue-500 focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 dark:border-gray-700" aria-label="Breadcrumb">
  <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-2 rtl:space-x-reverse sm:mb-0">
    <li>
      <div class="flex items-center">
        <a href="/posyandu/posbindu" class="ms-1 text-xl font-medium">Pendataan Pasien - Posbindu</a>
      </div>
    </li>
  </ol>
</nav>

<div class="bg-white p-6 rounded-lg shadow-md">
  <form action="{{ url('posyandu/posbindu/store') }}" method="POST">
    @csrf
    <div class="mb-4">
        <h3 class="text-lg font-semibold mb-2">Pemeriksaan dilakukan di: </h3>
        <select name="nama_posyandu" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama_posyandu" required>
            <option value="">Pilih Posyandu</option>
            <option value="Posyandu Jetis" {{ old('nama_posyandu') == 'Posyandu Jetis' ? 'selected' : '' }}>Posyandu Jetis</option>
            <option value="Posyandu Blimbing" {{ old('nama_posyandu') == 'Posyandu Blimbing' ? 'selected' : '' }}>Posyandu Blimbing</option>
            <option value="Posyandu Wonorejo" {{ old('nama_posyandu') == 'Posyandu Wonorejo' ? 'selected' : '' }}>Posyandu Wonorejo</option>
            <option value="Posyandu Sayangan" {{ old('nama_posyandu') == 'Posyandu Sayangan' ? 'selected' : '' }}>Posyandu Sayangan</option>
            <option value="Posyandu Bangunrejo" {{ old('nama_posyandu') == 'Posyandu Bangunrejo' ? 'selected' : '' }}>Posyandu Bangunrejo</option>
            <option value="Posyandu Bancakan" {{ old('nama_posyandu') == 'Posyandu Bancakan' ? 'selected' : '' }}>Posyandu Bancakan</option>
            <option value="Posyandu Tegalan" {{ old('nama_posyandu') == 'Posyandu Tegalan' ? 'selected' : '' }}>Posyandu Tegalan</option>
        </select>
        @error('nama_posyandu')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <h3 class="text-lg font-semibold mb-2">Hasil periksa</h3>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">Nama</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nama" id="nama" type="text" value="{{ old('nama') }}" required>
            @error('nama')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="umur_tahun">Umur</label>
                <div class="flex items-center">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="umur_tahun" id="umur_tahun" type="number" value="{{ old('umur_tahun') }}" required>
                    <span class="bg-white-200 px-3 py-2 text-black-700">tahun</span>
                </div>
                @error('umur_tahun')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="umur_bulan">Umur</label>
                <div class="flex items-center">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="umur_bulan" id="umur_bulan" type="number" value="{{ old('umur_bulan') }}" required>
                    <span class="bg-white-200 px-3 py-2 text-black-700">bulan</span>
                </div>
                @error('umur_bulan')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="rt">RT</label>
                <div class="flex items-center">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="rt" id="rt" type="number" value="{{ old('rt') }}" required>
                </div>
                @error('rt')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="rw">RW</label>
                <div class="flex items-center">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="rw" id="rw" type="number" value="{{ old('rw') }}" required>
                </div>
                @error('rw')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="tanggal">Tanggal</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tanggal" id="tanggal" type="date" value="{{ old('tanggal') }}" required>
        @error('tanggal')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="berat_badan">Berat Badan</label>
            <div class="flex items-center">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="berat_badan" id="berat_badan" type="number" step="any" value="{{ old('berat_badan') }}" required>
                <span class="bg-white-200 px-3 py-2 text-black-700">kg</span>
            </div>
            @error('berat_badan')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <br>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="tinggi_badan">Tinggi Badan</label>
            <div class="flex items-center">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tinggi_badan" id="tinggi_badan" type="number" step="any" value="{{ old('tinggi_badan') }}" required>
                <span class="bg-white-200 px-3 py-2 text-black-700">cm</span>
            </div>
            @error('tinggi_badan')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <br>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="lemak_perut">Lemak Perut</label>
            <div class="flex items-center">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="lemak_perut" id="lemak_perut" type="number" step="any" value="{{ old('lemak_perut') }}" required>
                <span class="bg-white-200 px-3 py-2 text-black-700">cm</span>
            </div>
            @error('lemak_perut')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <br>
    <div class="grid grid-cols-2 gap-4">
        <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tensi_darah_sistolik">Tensi Darah</label>
                <div class="flex items-center">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tensi_darah_sistolik" id="tensi_darah_sistolik" type="number" step="any" value="{{ old('tensi_darah_sistolik') }}" required>
                    <span class="bg-white-200 px-3 py-2 text-black-700">/</span>
                </div>
                @error('tensi_darah_sistolik')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block text-white text-sm font-bold mb-2" for="tensi_darah_diastolik">Tensi Darah</label>
                <div class="flex items-center">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tensi_darah_diastolik" id="tensi_darah_diastolik" type="number" step="any" value="{{ old('tensi_darah_diastolik') }}" required>
                    <span class="bg-white-200 px-3 py-2 text-white-700">mmHg</span>
                </div>
                @error('tensi_darah_diastolik')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
    </div>
    <br>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="gula_darah">Gula Darah</label>
            <div class="flex items-center">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="gula_darah" id="gula_darah" type="number" step="any" value="{{ old('gula_darah') }}" required>
                <span class="bg-white-200 px-3 py-2 text-black-700">mg/dL</span>
            </div>
            @error('gula_darah')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <br>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="kolesterol">Kolesterol</label>
            <div class="flex items-center">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="kolesterol" id="kolesterol" type="number" step="any" value="{{ old('kolesterol') }}" required>
                <span class="bg-white-200 px-3 py-2 text-black-700">mg/dL</span>
            </div>
            @error('gula_darah')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <br>
    <div class="mb-4">
        <p class="text-gray-700 text-sm font-bold mb-2">Status Perokok</p>
        <select name="status_perokok" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="status_perokok" required>
            <option value="">Pilih Status Perokok</option>
            <option value="Perokok Aktif" {{ old('status_perokok') == 'Perokok Aktif' ? 'selected' : '' }}>Perokok Aktif</option>
            <option value="Perokok Pasif" {{ old('status_perokok') == 'Perokok Pasif' ? 'selected' : '' }}>Perokok Pasif</option>
            <option value="Bukan Perokok" {{ old('status_perokok') == 'Bukan Perokok' ? 'selected' : '' }}>Bukan Perokok</option>
        </select>
        @error('status_perokok')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="riwayat_penyakit">Riwayat Penyakit</label>
        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="riwayat_penyakit" id="riwayat_penyakit" required>{{ old('riwayat_penyakit') }}</textarea>
        @error('riwayat_penyakit')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div style="text-align: right; margin-top: 20px;">
      <button type="submit" 
          style="
          background: linear-gradient(to bottom right, #4ade80, #3b82f6);
          color: black;
          font-weight: 500;
          padding: 10px 20px;
          border: none;
          border-radius: 8px;
          cursor: pointer;
          font-size: 16px;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
          transition: all 0.3s ease;"
          onmouseover="this.style.background='linear-gradient(to bottom left, #4ade80, #3b82f6)'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.2)';"
          onmouseout="this.style.background='linear-gradient(to bottom right, #4ade80, #3b82f6)'; this.style.boxShadow='0 2px 4px rgba(0, 0, 0, 0.1)';">
          Setor
      </button>
    </div>
</form>

</div>




 </div>
 
</body>
</html>