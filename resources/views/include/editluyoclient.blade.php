<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Update {{ $data->fullname }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                    @endif
                        <div class="card">
                            <div class="card-header">
                            <h4>Update Client
                                <a href="{{route('luyo')}}" class="btn btn-primary float-end">Back</a>
                            </h4>
                            </div>
                            <div class="card-body">
                                <form action="{{route('updateluyoclient',[$data->id])}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div>
                                        <x-input-label for="fullname" :value="__('Fullname')" />
                                        <x-text-input  class="block mt-1 w-full" type="text" name="fullname" value="{{$data->fullname}}"  autofocus  style="text-transform: capitalize"/>
                                        <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
                                    </div>
                                    <div>
                                        <x-input-label for="contact" :value="__('Contact')" />
                                        <x-text-input  class="block mt-1 w-full" type="number" name="contact" value="{{$data->contact}}" autofocus />
                                        <x-input-error :messages="$errors->get('contact')" class="mt-2" />
                                    </div>
                                    <div>
                                        <x-input-label for="plan" :value="__('Plan')" />
                                        <x-text-input  class="block mt-1 w-full" type="number" name="plan" value="{{$data->plan}}"  autofocus />
                                        <x-input-error :messages="$errors->get('plan')" class="mt-2" />
                                    </div>
                                    <div>
                                        <x-input-label for="duedate" :value="__('Duedate Every')" />
                                        <x-text-input  class="block mt-1 w-full" type="number" name="duedate" value="{{$data->duedate}}"  autofocus />
                                        <x-input-error :messages="$errors->get('duedate')" class="mt-2" />
                                    </div>
                                    <x-primary-button class="my-2">
                                        {{ __('Update') }}
                                    </x-primary-button>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
