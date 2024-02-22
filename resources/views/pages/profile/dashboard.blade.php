<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Overview') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto">
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1">
                        @foreach ($accounts as $account)
                        <div class="w-full max-w-sm p-4 bg-white rounded-lg dark:bg-gray-800 md:p-6">
                            <a href="{{route('accounts.select',['account'=>$account['id']])}}">
                                <div class="p-3 border rounded-md bg-slate-200 hover:bg-slate-300">
                                    <span>
                                        {{$account['name']}}
                                    </span>

                                    <div class="flex justify-between pb-3 border-b border-gray-400 dark:border-gray-700">
                                        <dl>
                                            <dt class="pb-1 text-base font-normal text-gray-500 dark:text-gray-400">
                                                Balance
                                            </dt>
                                            <dd class="text-3xl font-bold leading-none text-gray-900 dark:text-white">
                                                ${{$account['balance']}}
                                            </dd>
                                        </dl>
                                        <div>
                                            <span class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-green-900 dark:text-green-300">
                                                <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4" />
                                                </svg>
                                                Profit {{$account['profit_rate']}}%
                                            </span>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-2 py-3">
                                        <dl>
                                            <dt class="pb-1 text-base font-normal text-gray-500 dark:text-gray-400">
                                                Income
                                            </dt>
                                            <dd class="text-xl font-bold leading-none text-green-500 dark:text-green-400">
                                                ${{$account['incomes']}}
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt class="pb-1 text-base font-normal text-gray-500 dark:text-gray-400">
                                                Expense
                                            </dt>
                                            <dd class="text-xl font-bold leading-none text-red-600 dark:text-red-500">
                                                -${{$account['expenses']}}
                                            </dd>
                                        </dl>
                                    </div>
                                </div>

                            </a>

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
