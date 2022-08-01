<div>
    <button class="{{$estilos}}" type="button" data-modal-toggle="form_confirm">{{$tipo}}</button>
    
    <div id="form_confirm" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">

         <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
            <div class="relative bg-gray-100 rounded-lg shadow dark:bg-gray-700 p-6">
                <div class="flex flex-col justify-center
                ">
                <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h3 class="text-center mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">¿Estas seguro de eliminar este registro?</h3>
                <h2>{{$ruta.$id}}</h2>
                <div class="flex justify-around">
                    {{$btneliminar}}
                {{--<a href="{{route($ruta,$id)}}">
                    <button data-modal-toggle="form_confirm" type="button" class="text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
                    Si, seguro
                    </button>
                </a>--}}                
                <button data-modal-toggle="form_confirm" type="button" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">No</button></div>
                </div>
            </div>                
        </div>
    </div>
</div>