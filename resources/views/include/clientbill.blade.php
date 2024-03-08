<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="text-transform: capitalize">
            {{ $clientbill->fullname . ' Billing' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="card">
                        <div class="card-header">
                            @if(session('status'))
                                <div class="alert alert-success">{{session('status')}}</div>
                            @endif
                            <h4 class="my-2">
                                <a href="{{route('punta')}}" class="btn btn-primary float-end my-1 me-1 btn-sm">Back</a>
                                <a href="{{route('addpuntaclient')}}" class="btn btn-success float-end mx-1 my-1 btn-sm">Add</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="responsive-table">
                                <table class="table table-bordered table-striped">
                                    <thead class="">
                                        <tr>
                                           @if(date('m')>=1)
                                                <td>January</td>
                                            @endif
                                            @if(date('m')>=2)
                                                <td>Febuary</td>
                                            @endif
                                            @if(date('m')>=3)
                                                <td>March</td>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            {{-- JANUARY --}}
                                            @if(date('m')>=1)
                                                @if($clientbill->january === NULL || $clientbill->january === 0)
                                                    <td>PAID</td>
                                                @else 
                                                    <td>&#8369; {{$clientbill->january}}.00</td>
                                                @endif
                                            @endif 
                                            {{-- FEBUARY --}}
                                            @if(date('m')>=2)
                                                @if($clientbill->febuary === NULL || $clientbill->febuary === 0)
                                                    <td>PAID</td>
                                                @else 
                                                    <td>&#8369; {{$clientbill->febuary}}.00</td>
                                                @endif
                                            @endif
                                            {{-- MARCH --}}
                                            @if(date('m')>=3)
                                                @if($clientbill->march === NULL || $clientbill->march === 0)
                                                    <td>PAID</td>
                                                @else 
                                                    <td>&#8369; {{$clientbill->march}}.00</td>
                                                @endif
                                            @endif

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


</x-app-layout>
