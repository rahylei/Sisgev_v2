<div>
    <button class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 " type="button" data-modal-toggle="formulario">Editar</button>
    
    <div id="formulario" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">

         <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
            <form method="POST" action="{{route($formulario)}}" role="form" enctype="multipart/form-data">
             @csrf
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-6">
                    <div class="flex flex-col flex-wrap justify-center">
                     
                    @for($i=0; $i<count($ids); $i++)
                        <x-modal-row type="{{$types[$i]}}" label="{{$labels[$i]}}" name="{{$names[$i]}}" id="{{$ids[$i]}}" placeholder="{{$placeholders[$i]}}"/>
                    @endfor
                    </div>

                    {{--modal footer--}}
                    <div class="flex flex-row justify-end gap-1 mt-6">
                        <button class=" min-w-[100px] text-white bg-gradient-to-r from-gray-400 via-gray-500 to-gray-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-gray-800 shadow-lg shadow-gray-500/50 dark:shadow-lg dark:shadow-gray-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" type="button" data-modal-toggle="formulario">Cancelar</button>
                        <button class=" min-w-[100px] text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 " type="submit" >Actualizar</button>    
                    </div>
                    
                </div>

            </form>
        </div>
    </div>
</div>