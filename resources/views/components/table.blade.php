<div>
    
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                @if($state == "personal")
                    <th scope="col" class="py-3 px-6">
                        ID
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Nombre
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Puesto
                    </th>
                @endif

                @if($state == "piezas")
                    <th scope="col" class="py-3 px-6">
                        Codigo
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Alto
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Largo
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Ancho
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Peso
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Check
                    </th>
                @endif

                @if($state == "linea")
                    <th scope="col" class="py-3 px-6">
                        Codigo
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Pieza
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Encargado
                    </th>
                @endif


                <th scope="col" class="py-3 px-6">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($list as $item)
                @if($state == "personal")
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="py-4 px-6">{{$item->id}}</td>
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$item->name}}
                        </th>
                        <td class="py-4 px-6">{{$item->password}}</td>
                        <td>
                            <div class="flex flex-row">
                            <button type="button" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Editar</button>
                            
                            
                            {{--<a href="{{route('rmUsuario',$item->id)}}">
                                <button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Eliminar</button>
                            </a>--}}
                            <x-modal-confirm estilos="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                                tipo="Eliminar"
                                :ruta="['rmUsuario']"
                                :id="$item->name"
                                />
                            </div>
                        </td>
                    </tr>
                @endif

                @if($state == "piezas")
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">                        
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$item->codigo}}
                        </th>
                        <td class="py-4 px-6">{{$item->alto}}</td>
                        <td class="py-4 px-6">{{$item->largo}}</td>
                        <td class="py-4 px-6">{{$item->ancho}}</td>
                        <td class="py-4 px-6">{{$item->peso}}</td>
                        <td class="py-4 px-6">
                            @if($item->check == 1)
                            Pasa
                            @else
                            No pasa
                            @endif
                        </td>
                        <td>
                            <button type="button" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Editar</button>
                            <a href="{{route('rmUsuario', $item->id)}}">
                                <button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Eliminar</button>    
                            </a>                                                            
                            
                        </td>
                    </tr>
                @endif

                @if($state == "linea")
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">                        
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$item->codigo}}
                        </th>
                        <td class="py-4 px-6">{{$item->pieza}}</td>
                        <td class="py-4 px-6">{{$item->encargado}}</td>
                        <td>
                            <button type="button" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Editar</button>
                            <button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Eliminar</button>
                        </td>                      
                    </tr>
                @endif
            @endforeach
            
        </tbody>
    </table>
</div>

</div>