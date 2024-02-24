<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Family') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto">
                    <div class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                        <div class="p-5">
                            @if ($familyMembers)
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Email
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Subscription
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Income
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Expenses
                                            </th>
                                            @if ($isCreator)
                                            <th scope="col" class="px-6 py-3">
                                                <span class="sr-only">
                                                    Kick
                                                </span>
                                            </th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($familyMembers as $member)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $member['name']}}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ $member['email'] }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $member['subscription'] }}
                                            </td>
                                            <td class="px-6 py-4">
                                                ${{ $member['income'] }}
                                            </td>
                                            <td class="px-6 py-4">
                                                ${{ $member['expenses'] }}
                                            </td>
                                            @if ($isCreator)
                                            <td class="px-6 py-4 text-right">
                                                <form action="{{route('family.kick',['member'=>$member['id']])}}" method="post">
                                                    @csrf

                                                    <button type="submit">
                                                        <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-red-400 border border-red-400">
                                                            {{($member['id'] === auth()->id()) ? 'Leave' : "Kick" }}
                                                        </span>
                                                    </button>
                                                </form>
                                            </td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @else
                            <h3 class="text-sm font-medium text-gray-900 dark:text-white">
                                You are not currently part of the family
                            </h3>
                            @endif

                            <div class="flex gap-3 mt-3">
                                @if ($familyMembers)
                                <button type="buttin" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    Invite
                                </button>
                                @else
                                <a href="{{route('family.join.view')}}" type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                    Join
                                </a>
                                <form action="{{route('family.create')}}" method="post">
                                    @csrf

                                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        Create Family
                                    </button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
