@inject('almacen', 'App\Models\AlmacenPieza')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Almacen') }}
        </h2>
    </x-slot>

    <x-slot name="main">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="flex justify-end">
                    <x-modal 
                                :labels="['Codigo pieza', 'Piezas', 'Scrap', 'Alto', 'Largo','Ancho', 'Peso',]"
                                :types="['text', 'text', 'text', 'text', 'text','text','text']"
                                :names="['codigo_pieza', 'piezas_ok', 'scrap' , 'alto','largo', 'ancho', 'peso']"
                                :ids="['codigo_pieza', 'piezas_ok', 'scrap', 'alto','largo', 'ancho', 'peso']"
                                :placeholders="['abcde12345','0.00','0.00','0.00','0.00','0.00','0.00']"
                                formulario="altaAlmacen"/>
                </div>

                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    {{--<x-table state="personal" :list="$users->all()"/>--}}
                        <x-table state="almacen" >
                            <x-slot name="tbody">
                @foreach($almacen->all() as $item)
                    
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="py-4 px-6">{{$item->id}}</td>
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$item->codigo_pieza}}
                            </th>
                            <td class="py-4 px-6">{{$item->piezas_ok}}</td>
                            <td class="py-4 px-6">{{$item->scrap}}</td>
                            <td class="py-4 px-6">min {{$item->min_alto}} | max {{$item->max_alto}}</td>                            
                            <td class="py-4 px-6">min {{$item->min_largo}} | max {{$item->max_largo}}</td>                            
                            <td class="py-4 px-6">min {{$item->min_ancho}} | max {{$item->max_ancho}}</td>                    
                            <td class="py-4 px-6">min {{$item->min_peso}} | max {{$item->max_peso}}</td>
                            <td>
                                @php
                                    $labels = array('id','Codigo pieza', 'Piezas', 'Scrap', 'Alto', 'Largo','Ancho', 'Peso',);
                                    $types = array('hidden','text', 'text', 'text', 'text', 'text','text','text');
                                    $names = array('id','codigo_pieza', 'piezas_ok', 'scrap', 'alto','largo', 'ancho', 'peso');
                                    $ids = array('id','codigo_pieza', 'piezas_ok', 'scrap', 'alto','largo', 'ancho', 'peso');
                                    $formulario="upAlmacen";
                                    $self="almacen";
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
                                    'ruta' => 'rmAlmacen',
                                    $item->id,
                                    'self' => 'almacen'
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