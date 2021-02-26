<x-app-layout>
<x-slot name="header">
        <p class="text-3xl text-center">Menu</p>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <a href="{{url('nomorbarustk')}}">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold text-xl w-full py-10 px-20 rounded">
                    Nomor Baru
                </button>
                </a>
                </br>
                </br>
                <a href="{{url('pendaftaranstk')}}">
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold text-xl w-full py-10 px-20 rounded">
                    Pendaftaran STK
                </button>
                </a>
                </br>
                </br>
                
        </div>
    </div>
</x-app-layout>
