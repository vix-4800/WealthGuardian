<x-admin-layout>
    <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-2 lg:grid-cols-3">
        <div class="p-6 bg-white border border-gray-100 rounded-md shadow-md shadow-black/5">
            <div class="flex justify-between mb-6">
                <div>
                    <div class="flex items-center mb-1">
                        <div class="text-2xl font-semibold">2</div>
                    </div>
                    <div class="text-sm font-medium text-gray-400">Users</div>
                </div>
                <div class="dropdown">
                    <button type="button" class="text-gray-400 dropdown-toggle hover:text-gray-600"><i class="ri-more-fill"></i></button>
                    <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>

            <a href="/gebruikers" class="text-[#f84525] font-medium text-sm hover:text-red-800">View</a>
        </div>
        <div class="p-6 bg-white border border-gray-100 rounded-md shadow-md shadow-black/5">
            <div class="flex justify-between mb-4">
                <div>
                    <div class="flex items-center mb-1">
                        <div class="text-2xl font-semibold">100</div>
                        <div class="p-1 rounded bg-emerald-500/10 text-emerald-500 text-[12px] font-semibold leading-none ml-2">+30%</div>
                    </div>
                    <div class="text-sm font-medium text-gray-400">Companies</div>
                </div>
                <div class="dropdown">
                    <button type="button" class="text-gray-400 dropdown-toggle hover:text-gray-600"><i class="ri-more-fill"></i></button>
                    <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="/dierenartsen" class="text-[#f84525] font-medium text-sm hover:text-red-800">View</a>
        </div>
        <div class="p-6 bg-white border border-gray-100 rounded-md shadow-md shadow-black/5">
            <div class="flex justify-between mb-6">
                <div>
                    <div class="mb-1 text-2xl font-semibold">100</div>
                    <div class="text-sm font-medium text-gray-400">Blogs</div>
                </div>
                <div class="dropdown">
                    <button type="button" class="text-gray-400 dropdown-toggle hover:text-gray-600"><i class="ri-more-fill"></i></button>
                    <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="" class="text-[#f84525] font-medium text-sm hover:text-red-800">View</a>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-6 mb-6 lg:grid-cols-2">
        <div class="relative flex flex-col w-full min-w-0 p-6 mb-4 break-words rounded shadow-lg lg:mb-0 bg-gray-50 dark:bg-gray-800">
            <div class="px-0 mb-0 border-0 rounded-t">
                <div class="flex flex-wrap items-center px-4 py-2">
                    <div class="relative flex-1 flex-grow w-full max-w-full">
                        <h3 class="text-base font-semibold text-gray-900 dark:text-gray-50">Users</h3>
                    </div>
                </div>
                <div class="block w-full overflow-x-auto">
                    <table class="items-center w-full bg-transparent border-collapse">
                        <thead>
                            <tr>
                                <th class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">Role</th>
                                <th class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">Amount</th>
                                <th class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap min-w-140-px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-gray-700 dark:text-gray-100">
                                <th class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">Administrator</th>
                                <td class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">1</td>
                                <td class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="mr-2">70%</span>
                                        <div class="relative w-full">
                                            <div class="flex h-2 overflow-hidden text-xs bg-blue-200 rounded">
                                                <div style="width: 70%" class="flex flex-col justify-center text-center text-white bg-blue-600 shadow-none whitespace-nowrap"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-100">
                                <th class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">User</th>
                                <td class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">6</td>
                                <td class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="mr-2">40%</span>
                                        <div class="relative w-full">
                                            <div class="flex h-2 overflow-hidden text-xs bg-blue-200 rounded">
                                                <div style="width: 40%" class="flex flex-col justify-center text-center text-white bg-blue-500 shadow-none whitespace-nowrap"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-100">
                                <th class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">User</th>
                                <td class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">5</td>
                                <td class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="mr-2">45%</span>
                                        <div class="relative w-full">
                                            <div class="flex h-2 overflow-hidden text-xs bg-pink-200 rounded">
                                                <div style="width: 45%" class="flex flex-col justify-center text-center text-white bg-pink-500 shadow-none whitespace-nowrap"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-100">
                                <th class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">User</th>
                                <td class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">4</td>
                                <td class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="mr-2">60%</span>
                                        <div class="relative w-full">
                                            <div class="flex h-2 overflow-hidden text-xs bg-red-200 rounded">
                                                <div style="width: 60%" class="flex flex-col justify-center text-center text-white bg-red-500 shadow-none whitespace-nowrap"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="p-6 bg-white border border-gray-100 rounded-md shadow-md shadow-black/5">
            <div class="flex items-start justify-between mb-4">
                <div class="font-medium">Activities</div>
                <div class="dropdown">
                    <button type="button" class="text-gray-400 dropdown-toggle hover:text-gray-600"><i class="ri-more-fill"></i></button>
                    <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="overflow-hidden">
                <table class="w-full min-w-[540px]">
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <div class="flex items-center">
                                    <a href="#" class="ml-2 text-sm font-medium text-gray-600 truncate hover:text-blue-500">Lorem Ipsum</a>
                                </div>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400">02-02-2024</span>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400">17.45</span>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <div class="dropdown">
                                    <button type="button" class="flex items-center justify-center w-6 h-6 text-sm text-gray-400 rounded dropdown-toggle hover:text-gray-600 bg-gray-50"><i class="ri-more-2-fill"></i></button>
                                    <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                        <li>
                                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <div class="flex items-center">
                                    <a href="#" class="ml-2 text-sm font-medium text-gray-600 truncate hover:text-blue-500">Lorem Ipsum</a>
                                </div>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400">02-02-2024</span>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400">17.45</span>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <div class="dropdown">
                                    <button type="button" class="flex items-center justify-center w-6 h-6 text-sm text-gray-400 rounded dropdown-toggle hover:text-gray-600 bg-gray-50"><i class="ri-more-2-fill"></i></button>
                                    <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                        <li>
                                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-6 mb-6 lg:grid-cols-3">
        <div class="p-6 bg-white border border-gray-100 rounded-md shadow-md shadow-black/5 lg:col-span-2">
            <div class="flex items-start justify-between mb-4">
                <div class="font-medium">Order Statistics</div>
                <div class="dropdown">
                    <button type="button" class="text-gray-400 dropdown-toggle hover:text-gray-600"><i class="ri-more-fill"></i></button>
                    <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-2 lg:grid-cols-3">
                <div class="p-4 border border-gray-200 border-dashed rounded-md">
                    <div class="flex items-center mb-0.5">
                        <div class="text-xl font-semibold">10</div>
                        <span class="p-1 rounded text-[12px] font-semibold bg-blue-500/10 text-blue-500 leading-none ml-1">$80</span>
                    </div>
                    <span class="text-sm text-gray-400">Active</span>
                </div>
                <div class="p-4 border border-gray-200 border-dashed rounded-md">
                    <div class="flex items-center mb-0.5">
                        <div class="text-xl font-semibold">50</div>
                        <span class="p-1 rounded text-[12px] font-semibold bg-emerald-500/10 text-emerald-500 leading-none ml-1">+$469</span>
                    </div>
                    <span class="text-sm text-gray-400">Completed</span>
                </div>
                <div class="p-4 border border-gray-200 border-dashed rounded-md">
                    <div class="flex items-center mb-0.5">
                        <div class="text-xl font-semibold">4</div>
                        <span class="p-1 rounded text-[12px] font-semibold bg-rose-500/10 text-rose-500 leading-none ml-1">-$130</span>
                    </div>
                    <span class="text-sm text-gray-400">Canceled</span>
                </div>
            </div>
            <div>
                <canvas id="order-chart"></canvas>
            </div>
        </div>
        <div class="p-6 bg-white border border-gray-100 rounded-md shadow-md shadow-black/5">
            <div class="flex items-start justify-between mb-4">
                <div class="font-medium">Earnings</div>
                <div class="dropdown">
                    <button type="button" class="text-gray-400 dropdown-toggle hover:text-gray-600"><i class="ri-more-fill"></i></button>
                    <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full min-w-[460px]">
                    <thead>
                        <tr>
                            <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">Service</th>
                            <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">Earning</th>
                            <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <div class="flex items-center">
                                    <img src="https://placehold.co/32x32" alt="" class="block object-cover w-8 h-8 rounded">
                                    <a href="#" class="ml-2 text-sm font-medium text-gray-600 truncate hover:text-blue-500">Create landing page</a>
                                </div>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-emerald-500">+$235</span>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <span class="inline-block p-1 rounded bg-emerald-500/10 text-emerald-500 font-medium text-[12px] leading-none">Pending</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <div class="flex items-center">
                                    <img src="https://placehold.co/32x32" alt="" class="block object-cover w-8 h-8 rounded">
                                    <a href="#" class="ml-2 text-sm font-medium text-gray-600 truncate hover:text-blue-500">Create landing page</a>
                                </div>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-rose-500">-$235</span>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <span class="inline-block p-1 rounded bg-rose-500/10 text-rose-500 font-medium text-[12px] leading-none">Withdrawn</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <div class="flex items-center">
                                    <img src="https://placehold.co/32x32" alt="" class="block object-cover w-8 h-8 rounded">
                                    <a href="#" class="ml-2 text-sm font-medium text-gray-600 truncate hover:text-blue-500">Create landing page</a>
                                </div>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-emerald-500">+$235</span>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <span class="inline-block p-1 rounded bg-emerald-500/10 text-emerald-500 font-medium text-[12px] leading-none">Pending</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <div class="flex items-center">
                                    <img src="https://placehold.co/32x32" alt="" class="block object-cover w-8 h-8 rounded">
                                    <a href="#" class="ml-2 text-sm font-medium text-gray-600 truncate hover:text-blue-500">Create landing page</a>
                                </div>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-rose-500">-$235</span>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <span class="inline-block p-1 rounded bg-rose-500/10 text-rose-500 font-medium text-[12px] leading-none">Withdrawn</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <div class="flex items-center">
                                    <img src="https://placehold.co/32x32" alt="" class="block object-cover w-8 h-8 rounded">
                                    <a href="#" class="ml-2 text-sm font-medium text-gray-600 truncate hover:text-blue-500">Create landing page</a>
                                </div>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-emerald-500">+$235</span>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <span class="inline-block p-1 rounded bg-emerald-500/10 text-emerald-500 font-medium text-[12px] leading-none">Pending</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <div class="flex items-center">
                                    <img src="https://placehold.co/32x32" alt="" class="block object-cover w-8 h-8 rounded">
                                    <a href="#" class="ml-2 text-sm font-medium text-gray-600 truncate hover:text-blue-500">Create landing page</a>
                                </div>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-rose-500">-$235</span>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <span class="inline-block p-1 rounded bg-rose-500/10 text-rose-500 font-medium text-[12px] leading-none">Withdrawn</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <div class="flex items-center">
                                    <img src="https://placehold.co/32x32" alt="" class="block object-cover w-8 h-8 rounded">
                                    <a href="#" class="ml-2 text-sm font-medium text-gray-600 truncate hover:text-blue-500">Create landing page</a>
                                </div>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-emerald-500">+$235</span>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <span class="inline-block p-1 rounded bg-emerald-500/10 text-emerald-500 font-medium text-[12px] leading-none">Pending</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <div class="flex items-center">
                                    <img src="https://placehold.co/32x32" alt="" class="block object-cover w-8 h-8 rounded">
                                    <a href="#" class="ml-2 text-sm font-medium text-gray-600 truncate hover:text-blue-500">Create landing page</a>
                                </div>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-rose-500">-$235</span>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <span class="inline-block p-1 rounded bg-rose-500/10 text-rose-500 font-medium text-[12px] leading-none">Withdrawn</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <div class="flex items-center">
                                    <img src="https://placehold.co/32x32" alt="" class="block object-cover w-8 h-8 rounded">
                                    <a href="#" class="ml-2 text-sm font-medium text-gray-600 truncate hover:text-blue-500">Create landing page</a>
                                </div>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-emerald-500">+$235</span>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <span class="inline-block p-1 rounded bg-emerald-500/10 text-emerald-500 font-medium text-[12px] leading-none">Pending</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <div class="flex items-center">
                                    <img src="https://placehold.co/32x32" alt="" class="block object-cover w-8 h-8 rounded">
                                    <a href="#" class="ml-2 text-sm font-medium text-gray-600 truncate hover:text-blue-500">Create landing page</a>
                                </div>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-rose-500">-$235</span>
                            </td>
                            <td class="px-4 py-2 border-b border-b-gray-50">
                                <span class="inline-block p-1 rounded bg-rose-500/10 text-rose-500 font-medium text-[12px] leading-none">Withdrawn</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
