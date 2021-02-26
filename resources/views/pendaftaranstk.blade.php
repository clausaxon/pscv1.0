<x-app-layout>
    <x-slot name="header" >
        <p class="text-3xl text-center">Pendaftaran STK</p>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 ">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-xl font-bold mb-2" for="nomorsurat">
                        Nomor Surat
                    </label>
                    <input class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name='nomorsurat' type="text" placeholder="Nomor surat">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-xl font-bold mb-2" for="grid-state">
                        Jenis Surat
                    </label>
                    <div class="relative">
                        <select name="jenissurat" class="form-control block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="jenissurat">
                            <option value="PSCA">Pedoman</option>
                            <option value="PSCB">TKO</option>
                            <option value="PSCC">TKI</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold text-xl w-full py-10 px-20 rounded" type="submit">
                    Submit
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