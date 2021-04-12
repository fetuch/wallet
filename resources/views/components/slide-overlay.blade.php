<section
    x-show="slideOverlay"
    class="z-30 fixed inset-0 overflow-hidden"
    aria-labelledby="slide-over-title"
    role="dialog"
    aria-modal="true"
>
    <div class="absolute inset-0 overflow-hidden">

        <div
            x-show="slideOverlay"
            x-transition:enter="ease-in-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in-out duration-300"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
            aria-hidden="true"
        ></div>

        <div class="absolute inset-y-0 right-0 pl-10 max-w-full flex">
            <div
                x-show="slideOverlay"
                x-transition:enter="transform transition ease-in-out duration-300"
                x-transition:enter-start="translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="transform transition ease-in-out duration-300"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="translate-x-full"
                class="relative w-screen max-w-md"
            >
                <div class="absolute top-0 left-0 -ml-8 pt-4 pr-2 flex sm:-ml-10 sm:pr-4">
                    <button
                        @click="slideOverlay = false"
                        x-transition:enter="ease-in-out duration-300"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="ease-in-out duration-300"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="rounded-md text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-white"
                    >
                        <span class="sr-only">Close panel</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <div class="h-full flex flex-col bg-white shadow-xl overflow-y-scroll">
                    <div class="py-6 px-4 bg-cyan-700 sm:px-6">
                        <div class="flex items-center justify-between">
                            <h2 class="text-lg font-medium text-white" id="slide-over-title">
                                {{ $title ?? 'New Transaction' }}
                            </h2>
                        </div>
                        <div class="mt-1">
                            <p class="text-sm text-cyan-300">
                                Get started by filling in the information below to add your new transaction.
                            </p>
                        </div>
                    </div>

                    <div class="flex-1 flex flex-col justify-between">
                        <div class="px-4 divide-y divide-gray-200 sm:px-6">
                            <div class="space-y-6 pt-6 pb-5">
                                <div>
                                    <label for="project_name" class="block text-sm font-medium text-gray-900">
                                        Project name
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" name="project_name" id="project_name"
                                               class="block w-full shadow-sm sm:text-sm focus:ring-cyan-500 focus:border-cyan-500 border-gray-300 rounded-md">
                                    </div>
                                </div>
                                <div>
                                    <label for="description" class="block text-sm font-medium text-gray-900">
                                        Description
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="description" name="description" rows="4"
                                                  class="block w-full shadow-sm sm:text-sm focus:ring-cyan-500 focus:border-cyan-500 border-gray-300 rounded-md"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex-shrink-0 px-4 py-4 flex justify-end border-t">
                        <button @click="slideOverlay = false" type="button"
                                class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                            Cancel
                        </button>
                        <button type="submit"
                                class="ml-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
