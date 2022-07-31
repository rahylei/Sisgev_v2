<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{--<x-jet-welcome />--}}
                @role('administrador')
                    <span class="px-6 py-4">I am a admin...</span>
                <div class="container px-4 mx-auto">

                    <div class="p-6 m-20 bg-white rounded shadow">
                        {!! $chart->container() !!}
                    </div>

                    <div class="p-6 m-20 bg-white rounded shadow">
                        {!! $chartP->container() !!}
                    </div>


                    <div class="p-6 m-20 bg-white rounded shadow">
                        {!! $chartL->container() !!}
                    </div>

                </div>

                <script src="{{ $chart->cdn() }}"></script>

                {{ $chart->script() }}

                <script src="{{ $chartP->cdn() }}"></script>

                {{ $chartP->script() }}


                <script src="{{ $chartL->cdn() }}"></script>

                {{ $chartL->script() }}

                @endrole

                @role('encargado')
                    I am a encargado...
                    
                @endrole

                @role('operador')
                    I am a operador
                @endrole
            </div>
        </div>
    </div>
</x-app-layout>