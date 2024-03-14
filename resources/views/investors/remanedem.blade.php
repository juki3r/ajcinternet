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
                                    Punta, Carles - Clients
                                    <a href="{{route('dashboard')}}" class="btn btn-primary float-end my-1 me-1 btn-sm">Back</a>
                                    <a href="{{route('AddPuntaClient')}}" class="btn btn-success float-end mx-1 my-1 btn-sm">Add</a>
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
</x-app-layout>
