<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
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
                                    Gigante Sur, Carles - Clients
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive-sm mt-2">
                                    <table class="table table-striped table-bordered table-hover table-sm text-nowrap text-center bg-info" id="sortTable">
                                        <thead >
                                            <tr>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Plan</th>
                                            </tr>
                                        </thead>
                                        <tbody >
                                            @foreach($islasurdata as $islasurdata)
                                                <tr>
                                                <td>{{ $islasurdata->name }}</td>
                                                <td>{{ $islasurdata->address }}</td>
                                                <td>{{ $islasurdata->plan }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table> 
                                </div>
                            </div>
                        </div>              
                    </div>
                </div>
            </div>
        </div>

        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="row">
                        {{-- January --}}
                        <div class="col-12 col-lg-6 my-2">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h1>January</h1>
                                </div>
                                <div class="card-body">
                                    <p>
                                        Number of clients : {{ $januarynumberofclients }}
                                    </p>
                                        Income per client : &#8369; 200.00
                                    <p>
                                        Total Income : &#8369; {{ $january }}.00
                                    </p>
                                    <p>
                                        Deduction : &#8369; {{ $deduction }}.00
                                    </p>
                                    <p>
                                        Payable by admin : &#8369; {{ $january - $deduction }}.00
                                    </p>
                                </div>
                            </div>
                        </div>
                        {{-- Febuary --}}
                        <div class="col-12 col-lg-6 my-2">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h1>Febuary</h1>
                                </div>
                                <div class="card-body">
                                    <p>
                                        Number of clients : {{ $febuarynumberofclients }}
                                    </p>
                                        Income per client : &#8369; 200.00
                                    <p>
                                    <p>
                                        Total Income : &#8369; {{ $febuary }}.00
                                    </p>
                                    <p>
                                        Deduction : &#8369; {{ $deduction }}.00
                                    </p>
                                    <p>
                                        Payable by admin : &#8369; {{ $febuary - $deduction }}.00
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
