<x-admin-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
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
                            Email
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $index => $user)
                    @unless($user->is(auth()->user()))
                    {{-- @unless ($user->id === auth()->id()) --}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $index + 1 }}
                        </th>
                        <td class="px-6 py-4">
                            {{$user->name}}
                        </td>

                        <td class="px-6 py-4">
                            {{$user->email}}
                        </td>
                    </tr>
                    @endunless
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
