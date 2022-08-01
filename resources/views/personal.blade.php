<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Personal') }}
        </h2>
    </x-slot>

    <x-slot name="main">
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
                    {{--<x-table state="personal" :list="$users->all()"/>--}}
                        <x-table state="personal" >
                            <x-slot name="tbody">
                @foreach($component->list as $item)
                    
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="py-4 px-6">{{$item->id}}</td>
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$item->name}}
                            </th>
                            <td class="py-4 px-6">{{$item->password}}</td>
                            <td>
                                @php
                                    $labels = array("ID","Nombre", "Correo", "Password");
                                    $types = array("hidden","text", "email", "password");
                                    $names = array("id","name", "email","password");
                                    $ids = array("id","name", "email", "password");
                                    $formulario = "upUsuario";
                                    $self="personal";
                                @endphp


                                <div class="flex flex-row">
                                <button type="button" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                                onclick="Livewire.emit('openModal', 'edit-modal', 
                                {{ json_encode([
                                    $labels,
                                    $types,
                                    $names,
                                    $ids,
                                    $item,                                    
                                    $formulario,
                                    $self,
                                    ])}}
                                )">Editar</button>
                                
                                <button class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" onclick="Livewire.emit('openModal', 'confirm-modal', 
                                {{ json_encode([
                                    'estilos'=>'text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2',
                                    'tipo' => 'Eliminar',
                                    'ruta' => 'rmUsuario',
                                    $item->id,
                                    'self' => 'personal',
                                    ])}}
                                )">Eliminar</button>
                                
                                </div>
                            </td>
                        </tr>                
                   
                @endforeach
                            </x-slot>
                        </x-table>
                </div>
            </div>
        </div>
    </x-slot>
    
</x-app-layout>