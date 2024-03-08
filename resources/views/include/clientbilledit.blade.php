<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="text-transform: capitalize">
            Update {{ $clientbilledit->fullname }} Bill
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
                            <h4>Update Bill
                                <a href="{{url('punta/'.$clientbilledit->id .'')}}" class="btn btn-primary float-end">Back</a>
                            </h4>
                            </div>
                            <div class="card-body">
                                <form action="{{url('punta/updatebillclient/'.$clientbilledit->id.'')}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    @if(date('m')>=1)
                                        <div>
                                            <x-input-label for="january" :value="__('January')" />
                                            <x-text-input  class="block mt-1 w-full" type="number" name="january" value="{{$clientbilledit->january}}" />
                                            <x-input-error :messages="$errors->get('january')" class="mt-2" />
                                        </div>
                                    @endif
                                    @if(date('m')>=2)
                                    <div>
                                        <x-input-label for="febuary" :value="__('Febuary')" />
                                        <x-text-input  class="block mt-1 w-full" type="number" name="febuary" value="{{$clientbilledit->febuary}}" />
                                        <x-input-error :messages="$errors->get('febuary')" class="mt-2" />
                                    </div>
                                    @endif
                                    @if(date('m')>=3)
                                    <div>
                                        <x-input-label for="march" :value="__('March')" />
                                        <x-text-input  class="block mt-1 w-full" type="number" name="march" value="{{$clientbilledit->march}}"  />
                                        <x-input-error :messages="$errors->get('march')" class="mt-2" />
                                    </div>
                                    @endif
                                    @if(date('m')>=4)
                                    <div>
                                        <x-input-label for="april" :value="__('April')" />
                                        <x-text-input  class="block mt-1 w-full" type="number" name="april" value="{{$clientbilledit->april}}"  />
                                        <x-input-error :messages="$errors->get('april')" class="mt-2" />
                                    </div>
                                    @endif
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
