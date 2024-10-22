<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Você esta logado!") }}
                </div>
                <br>
                
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-2">
                
                <div class="p-6 text-gray-900 flex items-center ">
                    <a href="/">
                        <img src="/bus.io.png" class="block  w-16 fill-current" /> 
                    </a>
                </div>
            </div>

            @can('is-admin')
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-2">
                
                <div class="p-6 text-gray-900 flex items-center ">
                    <a href="/cadastros/acessoRestrito">Lista de Usuarios</a>
                </div>
            </div>
            @endcan
        </div>
    </div>
</x-app-layout>
