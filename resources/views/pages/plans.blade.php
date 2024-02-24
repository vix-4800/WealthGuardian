<x-guest-layout>
    <section class="pt-24">
        @foreach ($plans as $index => $plan)
        <div class="max-w-screen-lg mx-auto space-y-12 bg-purple-200 border rounded-lg hover:bg-purple-300 hover:border-purple-500 lg:space-y-20 lg:my-10 ">
            <a href="{{route('subscription')}}">
                <div class="px-4 py-8 lg:py-5 lg:px-6">
                    <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-2">
                        <img class="hidden mb-4 rounded-lg w-96 lg:mb-0 lg:flex" src="{{asset('img/subscription_plan/plan_cover_'.($index + 1).'.png')}}" alt="Plan #{{ $index + 1 }} Image">
                        <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                            <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                                {{ $plan->name }}
                            </h2>
                            <p class="mb-8 font-light lg:text-xl">
                                {{ $plan->description }}
                            </p>
                            <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
                                @foreach ($plan->features as $feature)
                                <li class="flex space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd">
                                        </path>
                                    </svg>
                                    <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                                        {{ $feature->name }}
                                    </span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </section>
</x-guest-layout>
