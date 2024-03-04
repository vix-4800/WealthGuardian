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
                        <div class="p-5" x-data='{showAll:false}'>
                            <div>
                                <div x-show='!showAll'>
                                    <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            {{$currentSubscription->name}}
                                        </h5>
                                        <p class="font-normal text-gray-700 dark:text-gray-400">
                                            {{$currentSubscription->description}}
                                        </p>
                                    </div>
                                </div>
                                <div x-show='showAll' x-cloak>
                                    <div class="flex gap-3">
                                        @foreach ($subscriptions as $subscription)
                                        @php
                                        $isActive = $subscription->is($currentSubscription);
                                        // $isActive = $subscription->id === $currentSubscription->id;
                                        @endphp
                                        <div class="flex flex-col justify-between max-w-sm p-6 bg-white border {{$isActive ? 'border-green-400' : 'border-gray-200'}}  rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                            <h5 class="flex justify-between mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                {{$subscription->name}}
                                                <span class="{{$isActive ? 'border border-green-400 bg-green-100 text-green-800' : 'border border-red-400 bg-red-100 text-red-800'}} h-fit  text-xs font-medium me-2 px-2.5 py-0.5 rounded ">
                                                    {{$isActive ? 'Active' : 'Inactive'}}
                                                </span>
                                            </h5>
                                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                                {{$subscription->description}}
                                            </p>
                                            <div class="mt-3">
                                                @if ($isActive)
                                                <button type="button" disabled class="text-white bg-gray-400 cursor-not-allowed focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">
                                                    Selected
                                                </button>
                                                @else
                                                <form action="{{route('subscription.change',['subscription'=>$subscription->id])}}" method="post">
                                                    @csrf
                                                    <button type="submit" class="text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">
                                                        Select
                                                    </button>
                                                </form>
                                                @endif
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="flex mt-5">
                                <div x-show='!showAll'>
                                    <button type="button" x-on:click='showAll = true' class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        Change Plan
                                    </button>
                                </div>
                                <div x-show='showAll' x-cloak>
                                    <button type="button" x-on:click='showAll = false' class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
