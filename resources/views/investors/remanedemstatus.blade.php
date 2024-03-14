<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Status') }}
        </h2>
    </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                       <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h1>January</h1>
                                </div>
                                <div class="card-body">
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
                        <div class="col-12 col-lg-6"></div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
