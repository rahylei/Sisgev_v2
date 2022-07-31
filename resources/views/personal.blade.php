@inject('users', 'App\Models\User')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Personal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-end">
                <x-modal 
                            :labels="['Nombre', 'Correo', 'Password']"
                            :types="['text', 'email', 'password']"
                            :names="['name', 'email','password']"
                            :ids="['name', 'email', 'password']"
                            :placeholders="['Juan Perez','Usuario@gmail.com','password']"
                            formulario="altaUsuario"/>
            </div>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-table state="personal" :list="$users->all()"/>
            </div>
        </div>
    </div>
</x-app-layout>