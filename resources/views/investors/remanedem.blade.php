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
                                            </tr>
                                        </thead>
                                        <tbody >
                                            @foreach($islasurdata as $islasurdata)
                                                <tr>
                                                <td>{{ $islasurdata->name }}</td>
                                                <td>{{ $islasurdata->address }}</td>
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
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>Number of clients</td>
                                            <td><strong>{{ $januarynumberofclients }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Income per client</td>
                                            <td><strong>&#8369; 200.00</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Total Income</td>
                                            <td><strong>&#8369; {{ $january }}.00</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Deduction</td>
                                            <td><strong>&#8369; {{ $deduction }}.00</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-primary text-light">Payable by admin</td>
                                            <td class="bg-primary text-light"><strong>&#8369; {{ $january - $deduction }}.00</strong></td>
                                        </tr>
                                    </table> 
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
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>Number of clients</td>
                                            <td><strong>{{ $febuarynumberofclients }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Income per client</td>
                                            <td><strong>&#8369; 200.00</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Total Income</td>
                                            <td><strong>&#8369; {{ $febuary }}.00</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Deduction</td>
                                            <td><strong>&#8369; {{ $deduction }}.00</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-primary text-light">Payable by admin</td>
                                            <td class="bg-primary text-light"><strong>&#8369; {{ $febuary - $deduction }}.00</strong></td>
                                        </tr>
                                    </table> 
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
