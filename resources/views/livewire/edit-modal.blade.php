
<form method="POST" action="{{route($formulario)}}" role="form" enctype="multipart/form-data">
 @csrf
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-6">
        <div class="flex flex-col flex-wrap justify-center">
         
        {{--@for($i=0; $i<count($ids); $i++)
            <x-modal-row type="{{$types[$i]}}" label="{{$labels[$i]}}" name="{{$names[$i]}}" id="{{$ids[$i]}}" placeholder="{{$placeholders[$i]}}"/>
        @endfor--}}
        @php
            $i=0;
        @endphp

        @if($self == "personal")   
            @foreach($item as $object)
                @if($i==0)<input type="hidden" name="id" value="{{$object}}">@endif
                @if($i>0)
                <div class="hidden">
                    @if($i==3){{$object = "**************"}}@endif                
                </div>                        
                <x-modal-row type="{{$types[$i]}}" label="{{$labels[$i]}}" name="{{$names[$i]}}" id="{{$ids[$i]}}" placeholder="{{$object}}"/>
                @endif
                @if($i++ == 3)
                    @break
                @endif
            @endforeach
        @endif

        @if($self == "piezas")   
            @foreach($item as $object)
                @if($i==0)<input type="hidden" name="id" value="{{$object}}">@endif
                @if($i>0)
                <x-modal-row type="{{$types[$i]}}" label="{{$labels[$i]}}" name="{{$names[$i]}}" id="{{$ids[$i]}}" placeholder="{{$object}}"/>
                @endif
                @if($i++ == 5)
                    @break
                @endif
            @endforeach
        @endif

        @if($self == "lineas")   
            @foreach($item as $object)
                @if($i==0)<input type="hidden" name="id" value="{{$object}}">@endif
                @if($i>0)
                <x-modal-row type="{{$types[$i]}}" label="{{$labels[$i]}}" name="{{$names[$i]}}" id="{{$ids[$i]}}" placeholder="{{$object}}"/>
                @endif
                @if($i++ == 3)
                    @break
                @endif
            @endforeach
        @endif
        
        </div>

        {{--modal footer--}}
        <div class="flex flex-row justify-end gap-1 mt-6">
            <button wire:click="closeEdit" class=" min-w-[100px] text-white bg-gradient-to-r from-gray-400 via-gray-500 to-gray-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-gray-800 shadow-lg shadow-gray-500/50 dark:shadow-lg dark:shadow-gray-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" type="button" >Cerrar</button>
            <button class=" min-w-[100px] text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 " type="submit" >Alta</button>    
        </div>
        
    </div>

</form>
