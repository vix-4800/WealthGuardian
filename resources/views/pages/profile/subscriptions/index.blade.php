<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Subscription') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto">
                    <div class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                        <div class="m-5">
                            <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                <h5 class="flex justify-between mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{$subscription->name}}
                                    <span class="bg-green-100 h-fit text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400">
                                        Active
                                    </span>
                                </h5>
                                <p class="font-normal text-gray-700 dark:text-gray-400">
                                    {{$subscription->description}}
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
