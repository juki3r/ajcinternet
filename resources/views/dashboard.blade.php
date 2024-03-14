<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if(Auth::user()->usertype==='user')
        @if(Auth::user()->name == 'Reman Edem')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ Auth::user()->usertype}}
                        {{ Auth::user()->name}}
                    </div>
                </div>
            </div>
        </div>
        @else 
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ Auth::user()->usertype}}
                    </div>
                </div>
            </div>
        </div>
        @endif

    @else

    <!--Admin -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ Auth::user()->usertype}}
                </div>
            </div>
        </div>
    </div>
    
    @endif

</x-app-layout>
