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
                                {{ __('New Transaction') }}
                            </h2>
                        </div>
                        <div class="mt-1">
                            <p class="text-sm text-cyan-300">
                                Get started by filling in the information below to add your new transaction.
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="sm:hidden">
                            <label for="tabs" class="sr-only">Select a tab</label>
                            <select id="tabs" name="tabs" class="block w-full focus:ring-cyan-500 focus:border-cyan-500 border-gray-300">
                                <option selected>Buy</option>

                                <option>Sell</option>

                                <option>Add</option>

                                <option>Remove</option>
                            </select>
                        </div>

                        <div class="hidden sm:block">
                            <div class="border-b border-gray-200">
                                <nav class="-mb-px flex" aria-label="Tabs">
                                    <span
                                        wire:click="setActiveTab('BUY')"
                                        class="@if($activeTab === 'BUY') border-cyan-500 text-cyan-600 @else border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 @endif cursor-pointer w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm"
                                        @if($activeTab === 'BUY') aria-current="page" @endif
                                    >
                                        {{ __('Buy') }}
                                    </span>

                                    <span
                                        wire:click="setActiveTab('SELL')"
                                        class="@if($activeTab === 'SELL') border-cyan-500 text-cyan-600 @else border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 @endif cursor-pointer w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm"
                                        @if($activeTab === 'SELL') aria-current="page" @endif
                                    >
                                        {{ __('Sell') }}
                                    </span>

                                    <span
                                        wire:click="setActiveTab('ADD')"
                                        class="@if($activeTab === 'ADD') border-cyan-500 text-cyan-600 @else border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 @endif cursor-pointer w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm"
                                        @if($activeTab === 'ADD') aria-current="page" @endif
                                    >
                                        {{ __('Add') }}
                                    </span>

                                    <span
                                        wire:click="setActiveTab('REMOVE')"
                                        class="@if($activeTab === 'REMOVE') border-cyan-500 text-cyan-600 @else border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 @endif cursor-pointer w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm"
                                        @if($activeTab === 'REMOVE') aria-current="page" @endif
                                    >
                                        {{ __('Remove') }}
                                    </span>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="flex-1 flex flex-col justify-between">
                        @if($activeTab === 'BUY')
                            <livewire:transaction-buy />
                        @endif

                        @if($activeTab === 'SELL')
                            <livewire:transaction-sell />
                        @endif

                        @if($activeTab === 'ADD')
                            <livewire:transaction-add />
                        @endif

                        @if($activeTab === 'REMOVE')
                            <livewire:transaction-remove />
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
