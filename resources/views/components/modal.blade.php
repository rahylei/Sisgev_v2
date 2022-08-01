<div>
    <button class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 " type="button" data-modal-toggle="formulario">Agregar</button>
    
    <div id="formulario" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">

         <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
            <form method="POST" action="{{route($formulario)}}" role="form" enctype="multipart/form-data">
             @csrf
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-6">
                    <div class="flex flex-col flex-wrap justify-center">

                    @if($formulario == 'altaUsuario')
                        @for($i=0; $i<count($ids); $i++)
                            <x-modal-row type="{{$types[$i]}}" label="{{$labels[$i]}}" name="{{$names[$i]}}" id="{{$ids[$i]}}" placeholder="{{$placeholders[$i]}}"/>
                        @endfor

                        <label for="puestos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Seleciona el rol</label>
                        <select id="puesto" name="puesto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option>Administrador</option>
                                  <option>Encargado</option>
                                  <option>Operador</option>
                        </select>

                    @endif

                    @if($formulario == 'altaPieza')
                        @for($i=0; $i<count($ids); $i++)
                            <x-modal-row type="{{$types[$i]}}" label="{{$labels[$i]}}" name="{{$names[$i]}}" id="{{$ids[$i]}}" placeholder="{{$placeholders[$i]}}"/>
                        @endfor
                    @endif
                    @if($formulario == 'altaLinea')
                        @inject('users', 'App\Models\User')
                        @inject('piezas', 'App\Models\Pieza')

                        @for($i=0; $i<count($ids); $i++)
                            @if($i==0)
                            <x-modal-row type="{{$types[$i]}}" label="{{$labels[$i]}}" name="{{$names[$i]}}" id="{{$ids[$i]}}" placeholder="{{$placeholders[$i]}}"/>
                            @endif

                            @if($i==1)

                                <label for="piezas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Seleciona la pieza</label>
                                <select id="pieza" name="pieza" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  @foreach($piezas->all() as $pieza)  
                                  <option>{{$pieza->codigo}}</option>
                                  @endforeach
                                </select>

                            @endif

                            @if($i==2)

                                <label for="users" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Seleciona la pieza</label>
                                <select id="encargado" name="encargado" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  @foreach($users->all() as $user)  
                                  <option>{{$user->name}}</option>
                                  @endforeach
                                </select>

                            @endif

                        @endfor
                    @endif

                    @if($formulario == 'altaAlmacen')
                        @for($i=0; $i<count($ids); $i++)
                            {{--<x-modal-row type="{{$types[$i]}}" label="{{$labels[$i]}}" name="{{$names[$i]}}" id="{{$ids[$i]}}" placeholder="{{$placeholders[$i]}}"/>--}}
                            @if($i<3)
                            <x-modal-row type="{{$types[$i]}}" label="{{$labels[$i]}}" name="{{$names[$i]}}" id="{{$ids[$i]}}" placeholder="{{$placeholders[$i]}}"/>
                            @endif
                            <div class="grid grid-cols-2">
                                <div class="basis-1/2">
                                    @if($i>2 && $i<7)
                                    <x-modal-row type="{{$types[$i]}}" label="Min_{{$labels[$i]}}" name="min_{{$names[$i]}}" id="min_{{$ids[$i]}}" placeholder="{{$placeholders[$i]}}"/>
                                    @endif        
                                </div>
                                <div class="basis-1/2">
                                    @if($i>2 && $i<7)
                                    <x-modal-row type="{{$types[$i]}}" label="Max_{{$labels[$i]}}" name="max_{{$names[$i]}}" id="max_{{$ids[$i]}}" placeholder="{{$placeholders[$i]}}"/>
                                    @endif
                                </div>
                            </div>
                            
                        @endfor                        

                    @endif

                    </div>

                    {{--modal footer--}}
                    <div class="flex flex-row justify-end gap-1 mt-6">
                        <button class=" min-w-[100px] text-white bg-gradient-to-r from-gray-400 via-gray-500 to-gray-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-gray-800 shadow-lg shadow-gray-500/50 dark:shadow-lg dark:shadow-gray-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" type="button" data-modal-toggle="formulario">Cerrar</button>
                        <button class=" min-w-[100px] text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 " type="submit" >Alta</button>    
                    </div>
                    
                </div>

            </form>
        </div>
    </div>
</div>