<x-app-layout>
<x-slot name="header">
        <p class="text-3xl text-center">Menu</p>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <a href="{{url('suratkeluar')}}">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold text-xl w-full py-10 px-20 rounded">
                    Surat Keluar PSC
                </button>
                </a>
                </br>
                </br>
                <a href="{{url('suratstk')}}">
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold text-xl w-full py-10 px-20 rounded">
                    Registrasi STK
                </button>
                </a>
                </br>
                </br>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold text-xl w-full py-10 px-20 rounded">
                    Pembuatan PS
                </button>
                </br>
                </br>
                <a href="{{url('lib')}}">
                <button class="bg-transparent hover:bg-black text-black-700 font-semibold text-xl hover:text-white w-full py-10 px-20 border border-black hover:border-transparent rounded">
                    Library
                </button>
                </br>
                </br>
                <a href="{{url('log')}}">
                <button class="bg-transparent hover:bg-black text-black-700 font-semibold text-xl hover:text-white w-full py-10 px-20 border border-black hover:border-transparent rounded">
                    Status Log
                </button>
                </a>
        </div>
    </div>
</x-app-layout>
