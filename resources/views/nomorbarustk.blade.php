<x-app-layout>
    <x-slot name="header" >
        <p class="text-3xl text-center">Nomor Baru STK</p>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 ">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-xl font-bold mb-2" for="username">
                        Nama Pengirim
                    </label>
                    <input class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name='nama_pengirim' type="text" placeholder="Username">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-xl font-bold mb-2" for="fungsijabatan">
                        Fungsi Jabatan
                    </label>
                    <input class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="fungsi_jabatan" type="text" placeholder="Fungsi Jabatan">
                </div>
                <div class="mb-4">
                    <label class="form-control block text-gray-700 text-xl font-bold mb-2" for="date">
                        Tanggal
                    </label>
                    <input class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tanggal" placeholder="<?php echo date('d F Y'); ?>" readonly>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-xl font-bold mb-2" for="grid-state">
                        Jenis Surat
                    </label>
                    <div class="relative">
                        <select name="jenis" class="form-control block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="jenis">
                            <option value="A">Pedoman</option>
                            <option value="B">TKO</option>
                            <option value="C">TKI</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-xl font-bold mb-2" for="perihal">
                        Perihal
                    </label>
                    <input class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="perihal" type="text" placeholder="Perihal">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-xl font-bold mb-2" for="judul_stk">
                        Judul STK
                    </label>
                    <input class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="judul_stk" type="text" placeholder="Judul STK">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-xl font-bold mb-2" for="isi">
                        Isi Surat
                    </label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="perihal" type="text" placeholder="Isi Surat">
                    </textarea>
                </div>
                <div class="mb-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold text-xl w-full py-10 px-20 rounded" type="submit">
                    Unduh Word (.DOCX)
                </button>
                </div>
                
            </form>
        </div>
    </div>
    <script>
        //message with toastr
        @if(session()-> has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()-> has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>
</x-app-layout> 