<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Accounts') }}
        </h2>
    </x-slot>

    <div class="py-12" x-data='{income:true, expenses:false}'>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px">
                    <li class="me-2">
                        <span :class="income ? 'inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg hover:cursor-pointer active dark:text-blue-500 dark:border-blue-500' : 'inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:cursor-pointer hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300'" x-on:click='income = true, expenses = false'>
                            Income
                        </span>
                    </li>
                    <li class="me-2">
                        <span :class="expenses ? 'inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg hover:cursor-pointer active dark:text-blue-500 dark:border-blue-500' : 'inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:cursor-pointer hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300'" aria-current="page" x-on:click='income = false, expenses = true'>
                            Expenses
                        </span>
                    </li>
                </ul>
            </div>

            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg" x-show='income'>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Type
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Amount
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Date
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($incomes as $index => $income)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$index + 1}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$income->name}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$income->type}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$income->amount}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$income->date}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg" x-show='expenses' x-cloak>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Type
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Amount
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Date
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expenses as $index => $expense)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$index + 1}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$expense->name}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$expense->type}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$expense->amount}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$expense->date}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
