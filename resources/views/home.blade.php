<x-dashboard-layout>
    <div class="mb-3 md:mb-6">
        <h2 class="text-lg leading-6 font-medium text-gray-900">Overview</h2>

        <div class="mt-2 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Card -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">
                                    Account balance
                                </dt>
                                <dd>
                                    <div class="flex items-baseline text-lg font-medium text-gray-900">
                                        <span>$30,659.45</span>

                                        <p class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                                            <svg class="self-center flex-shrink-0 h-5 w-5 text-green-500"
                                                 fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                      d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                            <span class="sr-only">
                                                Increased by
                                            </span>
                                            1,2%
                                        </p>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <!-- Heroicon name: outline/scale -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">
                                    Last trade
                                </dt>
                                <dd>
                                    <div class="text-lg font-medium text-gray-900">
                                        14 Feb. 2021 <span
                                            class="text-sm font-medium text-gray-500">(54 days ago)</span>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">
                                    Total trades
                                </dt>
                                <dd>
                                    <div class="text-lg font-medium text-gray-900">
                                        59 Trades <span class="text-sm font-medium text-gray-500">(with 13 Coins)</span>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <h2 class="text-lg leading-6 font-medium text-gray-900">
            Recent activity
        </h2>

        <!-- Activity list (smallest breakpoint only) -->
        <div class="shadow sm:hidden">
            <ul class="mt-2 divide-y divide-gray-200 overflow-hidden shadow sm:hidden">
                <li>
                    <a href="#" class="block px-4 py-4 bg-white hover:bg-gray-50">
                    <span class="flex items-center space-x-4">
                      <span class="flex-1 flex space-x-2 truncate">
                        <!-- Heroicon name: solid/cash -->
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd"
                                d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"/>
                        </svg>
                        <span class="flex flex-col text-gray-500 text-sm truncate">
                          <span class="truncate">Payment to Molly Sanders</span>
                          <span><span class="text-gray-900 font-medium">$20,000</span> USD</span>
                          <time datetime="2020-07-11">July 11, 2020</time>
                        </span>
                      </span>
                        <!-- Heroicon name: solid/chevron-right -->
                      <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                           viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"/>
                      </svg>
                    </span>
                    </a>
                </li>

                <!-- More items... -->
            </ul>

            <nav class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200"
                 aria-label="Pagination">
                <div class="flex-1 flex justify-between">
                    <a href="#"
                       class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">
                        Previous
                    </a>
                    <a href="#"
                       class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">
                        Next
                    </a>
                </div>
            </nav>
        </div>

        <!-- Activity table (small breakpoint and up) -->
        <div class="hidden sm:block">
            <div class="flex flex-col mt-2">
                <div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Transaction
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Amount
                            </th>
                            <th class="hidden px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider md:block">
                                Status
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Date
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="bg-white">
                            <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                <div class="flex">
                                    <a href="#" class="group inline-flex space-x-2 truncate text-sm">
                                        <!-- Heroicon name: solid/cash -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                        <p class="text-gray-500 truncate group-hover:text-gray-900">
                                            Payment to Molly Sanders
                                        </p>
                                    </a>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                <span class="text-gray-900 font-medium">$20,000 </span>
                                USD
                            </td>
                            <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize">
                              success
                            </span>
                            </td>
                            <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                <time datetime="2020-07-11">July 11, 2020</time>
                            </td>
                        </tr>

                        <!-- More items... -->
                        </tbody>
                    </table>
                    <!-- Pagination -->
                    <nav class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6"
                         aria-label="Pagination">
                        <div class="hidden sm:block">
                            <p class="text-sm text-gray-700">
                                Showing
                                <span class="font-medium">1</span>
                                to
                                <span class="font-medium">10</span>
                                of
                                <span class="font-medium">20</span>
                                results
                            </p>
                        </div>
                        <div class="flex-1 flex justify-between sm:justify-end">
                            <a href="#"
                               class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                Previous
                            </a>
                            <a href="#"
                               class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                Next
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white max-w-xl mt-6 mx-auto p-6">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flow-root">
            <ul class="-mb-8">
                <li>
                    <div class="relative pb-8">
                        <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                        <div class="relative flex space-x-3">
                            <div>
            <span class="h-8 w-8 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white">
              <!-- Heroicon name: solid/user -->
              <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                   aria-hidden="true">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
              </svg>
            </span>
                            </div>
                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                <div>
                                    <p class="text-sm text-gray-500">Applied to <a href="#"
                                                                                   class="font-medium text-gray-900">Front
                                            End Developer</a></p>
                                </div>
                                <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                    <time datetime="2020-09-20">Sep 20</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="relative pb-8">
                        <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                        <div class="relative flex space-x-3">
                            <div>
            <span class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center ring-8 ring-white">
              <!-- Heroicon name: solid/thumb-up -->
              <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                   aria-hidden="true">
                <path
                    d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"/>
              </svg>
            </span>
                            </div>
                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                <div>
                                    <p class="text-sm text-gray-500">Advanced to phone screening by <a href="#"
                                                                                                       class="font-medium text-gray-900">Bethany
                                            Blake</a></p>
                                </div>
                                <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                    <time datetime="2020-09-22">Sep 22</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="relative pb-8">
                        <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                        <div class="relative flex space-x-3">
                            <div>
            <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                   aria-hidden="true">
                <path fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"/>
              </svg>
            </span>
                            </div>
                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                <div>
                                    <p class="text-sm text-gray-500">Completed phone screening with <a href="#"
                                                                                                       class="font-medium text-gray-900">Martha
                                            Gardner</a></p>
                                </div>
                                <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                    <time datetime="2020-09-28">Sep 28</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="relative pb-8">
                        <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                        <div class="relative flex space-x-3">
                            <div>
            <span class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center ring-8 ring-white">
              <!-- Heroicon name: solid/thumb-up -->
              <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                   aria-hidden="true">
                <path
                    d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"/>
              </svg>
            </span>
                            </div>
                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                <div>
                                    <p class="text-sm text-gray-500">Advanced to interview by <a href="#"
                                                                                                 class="font-medium text-gray-900">Bethany
                                            Blake</a></p>
                                </div>
                                <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                    <time datetime="2020-09-30">Sep 30</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="relative pb-8">
                        <div class="relative flex space-x-3">
                            <div>
            <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
              <!-- Heroicon name: solid/check -->
              <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                   aria-hidden="true">
                <path fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"/>
              </svg>
            </span>
                            </div>
                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                <div>
                                    <p class="text-sm text-gray-500">Completed interview with <a href="#"
                                                                                                 class="font-medium text-gray-900">Katherine
                                            Snyder</a></p>
                                </div>
                                <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                    <time datetime="2020-10-04">Oct 4</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</x-dashboard-layout>
