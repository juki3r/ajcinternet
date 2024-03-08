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
                            <h4 class="my-2 " style="text-transform: capitalize">
                                {{ $clientbill->fullname . ' Bill' }}
                                <a href="{{route('punta')}}" class="btn btn-primary float-end my-1 me-1 btn-sm">Back</a>
                                <a href="{{route('EditBillClient', [$clientbill->id])}}" class="btn btn-success float-end my-1 me-1 btn-sm">Edit</a>
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
                                            @if(date('m')>=4)
                                                <td>April</td>
                                            @endif
                                            @if(date('m')>=5)
                                                <td>May</td>
                                            @endif
                                            @if(date('m')>=6)
                                                <td>June</td>
                                            @endif
                                            @if(date('m')>=7)
                                                <td>July</td>
                                            @endif
                                            @if(date('m')>=8)
                                                <td>August</td>
                                            @endif
                                            @if(date('m')>=9)
                                                <td>September</td>
                                            @endif
                                            @if(date('m')>=10)
                                                <td>October</td>
                                            @endif
                                            @if(date('m')>=11)
                                                <td>November</td>
                                            @endif
                                            @if(date('m')>=12)
                                                <td>December</td>
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
                                            {{-- APRIL --}}
                                            @if(date('m')>=4)
                                                @if($clientbill->april === NULL || $clientbill->april === 0)
                                                    <td>PAID</td>
                                                @else 
                                                    <td>&#8369; {{$clientbill->april}}.00</td>
                                                @endif
                                            @endif
                                            {{-- MAY --}}
                                            @if(date('m')>=5)
                                                @if($clientbill->may === NULL || $clientbill->may === 0)
                                                    <td>PAID</td>
                                                @else 
                                                    <td>&#8369; {{$clientbill->may}}.00</td>
                                                @endif
                                            @endif
                                            {{-- JUNE --}}
                                            @if(date('m')>=6)
                                                @if($clientbill->june === NULL || $clientbill->june === 0)
                                                    <td>PAID</td>
                                                @else 
                                                    <td>&#8369; {{$clientbill->june}}.00</td>
                                                @endif
                                            @endif
                                            {{-- JULY --}}
                                            @if(date('m')>=7)
                                                @if($clientbill->july === NULL || $clientbill->july === 0)
                                                    <td>PAID</td>
                                                @else 
                                                    <td>&#8369; {{$clientbill->july}}.00</td>
                                                @endif
                                            @endif
                                            {{-- AUGUST --}}
                                            @if(date('m')>=8)
                                                @if($clientbill->august === NULL || $clientbill->august === 0)
                                                    <td>PAID</td>
                                                @else 
                                                    <td>&#8369; {{$clientbill->august}}.00</td>
                                                @endif
                                            @endif
                                            {{-- SEPTEMBER --}}
                                            @if(date('m')>=9)
                                                @if($clientbill->september === NULL || $clientbill->september === 0)
                                                    <td>PAID</td>
                                                @else 
                                                    <td>&#8369; {{$clientbill->september}}.00</td>
                                                @endif
                                            @endif
                                            {{-- OCTOBER --}}
                                            @if(date('m')>=10)
                                                @if($clientbill->october === NULL || $clientbill->october === 0)
                                                    <td>PAID</td>
                                                @else 
                                                    <td>&#8369; {{$clientbill->october}}.00</td>
                                                @endif
                                            @endif
                                            {{-- NOVEMBER --}}
                                            @if(date('m')>=11)
                                                @if($clientbill->november === NULL || $clientbill->november === 0)
                                                    <td>PAID</td>
                                                @else 
                                                    <td>&#8369; {{$clientbill->november}}.00</td>
                                                @endif
                                            @endif
                                            {{-- DECEMBER --}}
                                            @if(date('m')>=12)
                                                @if($clientbill->december === NULL || $clientbill->december === 0)
                                                    <td>PAID</td>
                                                @else 
                                                    <td>&#8369; {{$clientbill->december}}.00</td>
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
